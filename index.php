<?php 
require 'includes/funciones.php';
incluirTemplate('header')
?>

    <main class="contenedor">
        
        <?php 
            $limite = 6;
            include 'includes/templates/anuncios.php'
        ?>



<?php include 'includes/templates/ws.php'; ?>
        
    </main>
<?php include 'includes/templates/footer.php'; ?>