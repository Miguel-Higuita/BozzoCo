<?php


// importar conexion 
require __DIR__ . '/../config/database.php';

$db = conectarDB();


// // Obtener ID del filtro
$idSeleccionado = isset($_GET['id']) ? (int) $_GET['id'] : 0;


// Armar la consulta según el filtro
if ($idSeleccionado > 0) {
    $query = "SELECT inicio.*, CONCAT(usuario.nombre, ' ', usuario.apellido) AS nombre_usuario, servicio.nombre_servicio
              FROM inicio
              JOIN usuario ON inicio.usuario = usuario.id_usuario
              JOIN servicio ON inicio.servicio = servicio.id_servicio
              WHERE inicio.servicio = $idSeleccionado
              ORDER BY inicio.id_inicio DESC";
} else {
    $query = "SELECT inicio.*, CONCAT(usuario.nombre, ' ', usuario.apellido) AS nombre_usuario, servicio.nombre_servicio
              FROM inicio
              JOIN usuario ON inicio.usuario = usuario.id_usuario
              JOIN servicio ON inicio.servicio = servicio.id_servicio
              ORDER BY inicio.id_inicio DESC";
}

$resultado = mysqli_query($db, $query);
?>

        <div class="grid">
            <?php if (mysqli_num_rows($resultado) > 0): ?>
                <?php while ($anuncio = mysqli_fetch_assoc($resultado)): ?>
                    <div class="servicio1">
                        <a href="<?php echo DIR_; ?>adentro.php?id=<?php echo $anuncio['id_inicio']; ?>">
                        
                            <img class="servicio__imagen"
                                src="<?php echo DIR_; ?>imagenes/<?php echo $anuncio['imagen']; ?>"
                                alt="Imagen del servicio <?php echo htmlspecialchars($anuncio['nombre_servicio']); ?>" />
                            <div class="servicio__informacion">
                                <b>
                                    <p class="servicio__nombre"><?php echo htmlspecialchars($anuncio['nombre_servicio']); ?></p>
                                    <p class="servicio__labor"><?php echo htmlspecialchars($anuncio['nombre_usuario']); ?></p>
                                </b>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="no-resultados">No hay resultados para esta categoría.</p>
            <?php endif; ?>
        </div>
    

<?php
mysqli_close($db);
?>
