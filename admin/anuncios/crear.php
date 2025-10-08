<?php

// importar conexion 
require __DIR__ . '/../../includes/config/database.php';

$db = conectarDB();

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

// exit;

// Consultar para obtener los servicios
$consulta = "SELECT * FROM servicio ORDER BY nombre_servicio ASC";
$resultado = mysqli_query($db, $consulta);

// Consultar para obtener los usuarios
$consulta2 = "SELECT * FROM usuario ORDER BY nombre ASC, apellido ASC";
$resultado2 = mysqli_query($db, $consulta2);



// Escribir el query
$query = "SELECT * FROM inicio";


// Consultar  la base de datos
$resultadoConsulta = mysqli_query($db, $query);



// Arreglo con mensajes de error
$errores = [];


$imagen = "";
$servicio = "";
$usuario = "";
$descripcion = "";

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


    $servicio = mysqli_real_escape_string($db,  $_POST['servicio']);
    $usuario = mysqli_real_escape_string($db,  $_POST['usuario']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']);

    //asignar file hacia una variable
    $imagen = $_FILES['imagen'];
    // var_dump($imagen['name']);

    //validador de errores
    if (!$servicio) {
        $errores[] = "Debes añadir un servicio";
    }

    if (!$usuario) {
        $errores[] = "Debes selecionar un usuario";;
    }

    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
    }

    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = 'La imagen es obligatoria';
    }

    // validar por tamaño (2 mb maximo)
    $medida = 3000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = 'La Imagen es muy pesada';
    }

    if (empty($errores)) {

        /** SUBIDA DE ARCHIVOS */

        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // Generar un nombre único
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // mover la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


        // Insertar en la base de datos

        $query = " INSERT INTO inicio (imagen, servicio, usuario, descripcion ) VALUES ( '$nombreImagen', '$servicio', '$usuario',  '$descripcion' ) ";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: ../index.php?resultado=1');
        }
    }
}


require __DIR__ . '/../../includes/funciones.php';
incluirTemplate('headerAnuncio');
?>
<main class="contenedor seccion">
    <h1 class="titulo1"> Crear Anuncios </h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <!-- Formulario para crear un anuncio -->
    <form class="formulario" method="post" action="crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="servicio">Servicio:</label>
            <select name="servicio">
                <option value="">----- Seleccione un servicio -----</option>
                <?php while ($row =  mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $servicio === $row['id_servicio'] ? 'selected' : ''; ?> value="<?php echo $row['id_servicio']; ?>"> <?php echo $row['nombre_servicio']; ?> </option>
                <?php endwhile; ?>
            </select>

            <label for="usuario">Usuario:</label>

            <select name="usuario">
                <option value="">----- Seleccione un usuario -----</option>
                <?php while ($row2 =  mysqli_fetch_assoc($resultado2)) : ?>
                    <option <?php echo $usuario === $row2['id_usuario'] ? 'selected' : ''; ?> value="<?php echo $row2['id_usuario']; ?>"> <?php echo $row2['nombre'] . " " . $row2['apellido'] ?> </option>
                <?php endwhile; ?>
            </select>

            <label for="descripcion">Descripción del servicio:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

        </fieldset>



        <input type="submit" value="Crear anuncio" class="boton boton-verde">
    </form>
</main>

<?php include __DIR__ . "/../../includes/templates/footer.php"; ?>