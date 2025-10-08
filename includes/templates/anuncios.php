<?php

//Importar conexion a la BD
require __DIR__ . '/../config/database.php';
$db = conectarDB();





// Consultar con JOIN para traer usuario y servicio directamente
$query = "SELECT inicio.*, CONCAT(usuario.nombre, ' ', usuario.apellido) AS nombre_usuario, servicio.nombre_servicio 
          FROM inicio
          JOIN usuario ON inicio.usuario = usuario.id_usuario
          JOIN servicio ON inicio.servicio = servicio.id_servicio
          LIMIT $limite";

$resultado = mysqli_query($db, $query);
?>

<section>
    <div class="grid">
        <!-- inicio anuncio -->
        <?php while ($anuncio = mysqli_fetch_assoc($resultado)): ?>
            <div class="servicio1">
                <a href="adentro.php?id=<?php echo $anuncio['id_inicio']; ?>">
                    <img class="servicio__imagen"
                        src="imagenes/<?php echo htmlspecialchars($anuncio['imagen']); ?>"
                        alt="Imagen del servicio <?php echo htmlspecialchars($anuncio['nombre_servicio']); ?>" />
                    <div class="servicio__informacion">
                        <b>
                            <p class="servicio__nombre"><?php echo htmlspecialchars($anuncio['nombre_servicio']); ?></p>
                            <p class="servicio__labor"><?php echo htmlspecialchars($anuncio['nombre_usuario']); ?></p>
                        </b>
                    </div>
                </a>
            </div>
            <!-- termina anuncio -->
        <?php endwhile; ?>
    </div>
</section>

<?php

//cerrar la conexion

mysqli_close($db);


?>