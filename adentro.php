<?php 
require 'includes/funciones.php';
require 'includes/config/database.php';

$db = conectarDB();

// Validar y obtener el ID desde la URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id <= 0) {
    header('Location: servicios.php');
    exit;
}

// Consulta de datos 
$query = "SELECT 
            inicio.id_inicio,
            inicio.imagen,
            servicio.nombre_servicio,
            usuario.nombre,
            usuario.apellido,
            usuario.celular,
            usuario.correo,
            usuario.descripcion
          FROM inicio
          JOIN servicio ON inicio.servicio = servicio.id_servicio
          JOIN usuario ON inicio.usuario = usuario.id_usuario
          WHERE inicio.id_inicio = $id
          LIMIT 1";

$resultado = mysqli_query($db, $query);
$anuncio = mysqli_fetch_assoc($resultado);

if (!$anuncio) {
    header('Location: servicios.php');
    exit;
}

incluirTemplate('header');
?>

<main class="contenedor">
    <h2 class="nombre_persona">
        <?php echo htmlspecialchars($anuncio['nombre'] . ' ' . $anuncio['apellido']); ?>
    </h2>

    <div class="info_persona">
        <div class="espacio_foto">
            <img class="foto_persona"
                src="imagenes/<?php echo htmlspecialchars($anuncio['imagen']); ?>"
                alt="Foto de <?php echo htmlspecialchars($anuncio['nombre']); ?>">
        </div>

        <div class="texto_persona">
            <p><strong>Servicio:</strong> <?php echo htmlspecialchars($anuncio['nombre_servicio']); ?></p>
            <p><strong>Descripción:</strong> <?php echo htmlspecialchars($anuncio['descripcion']); ?></p>
            <p><strong>Celular:</strong> <?php echo htmlspecialchars($anuncio['celular']); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($anuncio['correo']); ?></p>
        </div>
    </div>

    <a href="servicios.php" class="btn-volver">← Volver a los servicios</a>
</main>

<?php include 'includes/templates/footer.php'; ?>
<?php mysqli_close($db); ?>