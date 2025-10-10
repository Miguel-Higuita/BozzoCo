<?php

require __DIR__ . '/../includes/funciones.php';

$auth = autenticado();

if (!$auth) {
    header('Location: /bozzoco/index.php');
}

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// exit;

// importar conexion 
require __DIR__ . '/../includes/config/database.php';

$db = conectarDB();

// Escribir el query
$query = "SELECT * FROM inicio";


// Consultar  la base de datos
$resultadoConsulta = mysqli_query($db, $query);


//muestra mensaje condicional
$mensaje = $_GET['resultado'] ?? null;


// // Consultar para obtener los servicios
// $consulta = "SELECT * FROM servicio ORDER BY nombre_servicio ASC";
// $resultado = mysqli_query($db, $consulta);

// Consultar para obtener los usuarios
$query = "
    SELECT 
        i.id_inicio,
        i.servicio,
        i.imagen,
        CONCAT(u.nombre, ' ', u.apellido) AS nombre_usuario,
        s.nombre_servicio
    FROM inicio i
    INNER JOIN usuario u ON i.usuario = u.id_usuario
    INNER JOIN servicio s ON i.servicio = s.id_servicio
    ORDER BY i.id_inicio ASC
   
";
$resultadoConsulta = mysqli_query($db, $query);

// // debgug de la conuslta 
// if (!$resultadoConsulta) {
//     die("❌ Error en la consulta: " . mysqli_error($db));
// }

//Eliminar anuncio
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        //Eliminar imagen
        $query = "SELECT imagen FROM inicio WHERE id_inicio = $id ";

        $resultado = mysqli_query($db, $query);
        $anuncio = mysqli_fetch_assoc($resultado);

        unlink('/../imagenes/' . $anuncio['imagen']);


        //Eliminar item
        $query = "DELETE FROM inicio WHERE id_inicio = $id ";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /BozzoCo/admin/index.php?resultado=3');
        }
    }
}

// incluye en template

incluirTemplate('headerAdmin');
?>

<main class="contenedor seccion">
    <h1 class="titulo1"> Administrador de Anuncios </h1>

    <?php if (intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php elseif (intval($mensaje) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif (intval($mensaje) === 3): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>


    <?php endif; ?>

    <a href="anuncios/crear.php" class="boton boton-verde">Nuevo anuncio</a>
   

    <div class="tabla-responsive">
        <table class="tAnuncios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Servicio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($anuncio = mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <tr>
                        <td data-label="ID"><?php echo $anuncio['id_inicio']; ?></td>
                        <td data-label="Usuario"><?php echo htmlspecialchars($anuncio['nombre_usuario']); ?></td>
                        <td data-label="Servicio"><?php echo htmlspecialchars($anuncio['nombre_servicio']); ?></td>
                        <td data-label="Imagen">
                            <img src="../imagenes/<?php echo htmlspecialchars($anuncio['imagen']); ?>"
                                class="imagen-tabla"
                                alt="imagen del servicio">
                        </td>
                        <td data-label="Acciones" class="acciones">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $anuncio['id_inicio']; ?>">
                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a href="anuncios/actualizar.php?id=<?php echo $anuncio['id_inicio']; ?>"
                                class="boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</main>



<?php

// cerrar conexion
mysqli_close($db);

include __DIR__ . "/../includes/templates/footer.php"; ?>