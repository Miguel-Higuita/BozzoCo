<?php 

// importar conexion 
require __DIR__ . '/../../includes/config/database.php';

$db = conectarDB();

echo "<pre>";
var_dump($_POST);
echo "</pre>";

// exit;
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

        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";

    

    $imagen = mysqli_real_escape_string($db,  $_POST['imagen']);
    $servicio = mysqli_real_escape_string($db,  $_POST['servicio']);
    $usuario = mysqli_real_escape_string($db,  $_POST['usuario']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']);

}


require __DIR__.'/../../includes/funciones.php';
incluirTemplate('headerPropi');
?>
<main class="contenedor seccion">
    <h1>########### Crear ###########</h1>

    <a href="http://localhost:3000/admin/index.php"  class="boton boton-verde">Volver</a>

    <!-- <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?> -->

        <!-- Formulario para crear un anuncio -->
    <form class="formulario" method="post" action="/admin/anuncios/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="servicio">Servicio:</label>
            <select name="servicio">
                <option value="">----- Seleccione un servicio----</option>
                <option value="">electricidad</option>
                <option value="">vigilancia</option>
            </select>

            <label for="usuario">Usuario:</label>
            <select name="usuario">
                <option value="">----- Seleccione usuario----</option>
                <option value="">Andres Lopez</option>
                <option value="">Marta Gomez</option>
            </select>

            <label for="descripcion">Descripción del servicio:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

        </fieldset>

        

        <input type="submit" value="Crear anuncio" class="boton boton-verde">
    </form>
</main>

<?php include __DIR__ . "/../../includes/templates/footer.php"; ?>