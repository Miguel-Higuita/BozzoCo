<?php

// Validar la URL por ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin/index.php');
    exit;
}


// importar conexion 
require __DIR__ . '/../../includes/config/database.php';

$db = conectarDB();

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

// exit;

// Consultar para obtener los datos de inicio
$consulta = "SELECT * FROM inicio  WHERE  id_inicio = $id";
$resultado = mysqli_query($db, $consulta);
$inicio = mysqli_fetch_assoc($resultado);

if (!$inicio) {
    header('Location: /BozzoCo/admin/index.php');
    exit;
}

// Datos iniciales
$imagen = $inicio['imagen'];
$idServicio = $inicio['servicio'];
$idUsuario = $inicio['usuario'];
$descripcion = $inicio['descripcion'];

// Consultar todos los servicios y usuarios para los select
$queryResultado1 = "SELECT * FROM servicio";
$resultado1 = mysqli_query($db, $queryResultado1);

$queryResultado2 = "SELECT * FROM usuario";
$resultado2 = mysqli_query($db, $queryResultado2);

// Arreglo con mensajes de error
$errores = [];


// $imagen = $inicio['imagen'];
// $servicio = $inicio['servicio'];
// $usuario = $inicio['usuario'];
// $descripcion =  $inicio['descripcion'];

// var_dump($servicio);
// var_dump($usuario);


// ejecuta el codigo despues de la verificacion 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // $titulo = $_POST['usuario'];

    // exit;

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";


    $idServicio = mysqli_real_escape_string($db,  $_POST['servicio']);
    $idUsuario = mysqli_real_escape_string($db,  $_POST['usuario']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']);

    //asignar file hacia una variable
    $imagen = $_FILES['imagen'] ?? null;
    // var_dump($imagen['name']);

    //validador de errores
    if (!$idServicio) {
        $errores[] = "Debes añadir un servicio";
    }

    if (!$idUsuario) {
        $errores[] = "Debes selecionar un usuario";;
    }

    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
    }

    if (empty($inicio['imagen']) && empty($imagen['name'])) {
        $errores[] = 'La imagen es obligatoria';
    }

    // validar por tamaño (3 mb maximo)
    $medida = 3000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = 'La Imagen es muy pesada (máx 3MB)';
    }


    // Si no hay errores, realizamos la actualización
    if (empty($errores)) {

        /** SUBIDA DE ARCHIVOS */

        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // conservar imagen existente por defecto
        $nombreImagen = $inicio['imagen'];



        if (!empty($imagen['name'])) {
            // Eliminar la imagen previa solo si existe
            if (!empty($inicio['imagen']) && file_exists($carpetaImagenes . $inicio['imagen'])) {
                unlink($carpetaImagenes . $inicio['imagen']);
            }

            // Generar nuevo nombre
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            // Mantener la anterior
            $nombreImagen = $inicio['imagen'];
        }


        // Actualizar la base de datos

        $query = " UPDATE  inicio SET imagen = '$nombreImagen', servicio = '$idServicio', Usuario =  '$idUsuario', descripcion = '$descripcion' WHERE id_inicio = $id";

        // echo $query;
        // exit;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /BozzoCo/admin/index.php?resultado=2');
            exit;
        }
    }
}


// Obtener los datos del servicio asociado a ese anuncio
$idServicio = $inicio['servicio'];
$queryServicio = "SELECT * FROM servicio WHERE id_servicio = $idServicio";
$resultadoServicio = mysqli_query($db, $queryServicio);
$servicio = mysqli_fetch_assoc($resultadoServicio);


// Obtener los datos del usuario asociado a ese anuncio
$idUsuario = $inicio['usuario'];
$queryusuario = "SELECT * FROM usuario WHERE id_usuario = $idUsuario";
$resultadousuario = mysqli_query($db, $queryusuario);
$usuario = mysqli_fetch_assoc($resultadousuario);

// var_dump($usuario);


// // Consultar para obtener los usuarios
// $consulta2 = "SELECT * FROM usuario WHERE id_usuario = $id";
// $resultado2 = mysqli_query($db, $consulta2);



// // Escribir el query
// $query = "SELECT * FROM inicio";


// // Consultar  la base de datos
// $resultadoConsulta = mysqli_query($db, $query);







require __DIR__ . '/../../includes/funciones.php';
incluirTemplate('headerAnuncio');
?>
<main class="contenedor seccion">
    <h1 class="titulo1"> Actualizar Anuncios </h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <!-- Formulario para Actualizar un anuncio -->
    <form class="formulario" method="post" action="actualizar.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            <img src="../../imagenes/<?php echo $imagen; ?>" class="imagen-small">

            <label for="servicio">Servicio:</label>
            <select name="servicio">
                <option value="">----- Seleccione un servicio -----</option>
                <?php while ($row = mysqli_fetch_assoc($resultado1)): ?>
                    <option
                        value="<?php echo $row['id_servicio']; ?>"
                        <?php echo ($idServicio == $row['id_servicio']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($row['nombre_servicio']); ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <label for="usuario">Usuario:</label>
            <select name="usuario">
                <option value="">----- Seleccione un usuario -----</option>
                <?php while ($row2 = mysqli_fetch_assoc($resultado2)): ?>
                    <option
                        value="<?php echo $row2['id_usuario']; ?>"
                        <?php echo ($idUsuario == $row2['id_usuario']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($row2['nombre'] . " " . $row2['apellido']); ?>
                    </option>
                <?php endwhile; ?>
            </select>


            <!-- <option value="">----- Seleccione un usuario -----</option>
                <?php while ($row2 =  mysqli_fetch_assoc($resultado2)) : ?>
                    <option 
                     value="<?php echo $row['id_usuario']; ?>"
                    <?php echo $usuario === $row2['id_usuario'] ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($row2['nombre'] . " " . $row2['apellido']); ?>
                    </option>
                <?php endwhile; ?>
            </select> -->

            <label for="descripcion">Descripción del servicio:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

        </fieldset>



        <input type="submit" value="Actualizar anuncio" class="boton boton-verde">
    </form>
</main>

<?php include __DIR__ . "/../../includes/templates/footer.php"; ?>