<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class=" contenedor ">
    <div class="contenedor-servicios">
        <div class="sidebar">
            <div class="contenedor_sidebar">
                
                <?php
                include 'includes/templates/serviciosLista.php'
                ?>
            </div>
        </div>
        <?php
        include 'includes/templates/serviciosCategoria.php'
        ?>
    </div>

    <?php include 'includes/templates/ws.php'; ?>

</main>

<?php include 'includes/templates/footer.php'; ?>