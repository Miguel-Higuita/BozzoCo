<?php
// importar conexión 
require __DIR__ . '/../config/database.php';
$db = conectarDB();

// Capturar categoría seleccionada (si no hay, usar 0 = todas)
$idSeleccionado = isset($_GET['id']) && $_GET['id'] !== '' ? (int) $_GET['id'] : 0;

// Consultar servicios
$query = "SELECT id_servicio, nombre_servicio FROM servicio ORDER BY nombre_servicio ASC";
$resultado = mysqli_query($db, $query);
?>

<!-- Lista desplegable -->
<form action="servicios.php" method="GET" class="form-servicios">
    <label for="servicio">Selecciona una categoría:</label>
    <select name="id" id="servicio" onchange="this.form.submit()">
        <option value="0" <?= ($idSeleccionado === 0) ? 'selected' : ''; ?>>
            -- Todas las categorías --
        </option>

        <?php while ($servicio = mysqli_fetch_assoc($resultado)): ?>
            <option value="<?= $servicio['id_servicio']; ?>"
                <?= ((int)$servicio['id_servicio'] === $idSeleccionado) ? 'selected' : ''; ?>>
                <?= htmlspecialchars($servicio['nombre_servicio']); ?>
            </option>
        <?php endwhile; ?>
    </select>
</form>

<?php
mysqli_close($db);
?>