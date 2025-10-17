<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>
<div class="comtenedor">
<h1 class="titulo1">Nuevos Servicios</h1>
</div>


<main class="contenedor">

    <?php
    $limite = 3;
    include 'includes/templates/anuncios.php'
    ?>
    
    
    <?php include 'includes/templates/ws.php'; ?>
<a href="servicios.php" class="btn-volver">Ver más ...</a>
</main>
<div class="comtenedor"></div>

<?php include 'includes/templates/footer.php'; ?>