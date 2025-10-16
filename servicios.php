<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class=" contenedor ">
    <div class="contenedor-servicios">
        <div class="sidebar">
            <h1>BOZZO</h1>
            <h2>Categorias</h2>
            <ul class="texto-lista">
                <li><a href="#">Plomeria</a></li>
                <li><a href="#">Vigilancia</a></li>
                <li><a href="#">Aseo</a></li>
                <li><a href="#">Mecanica</a></li>
                <li><a href="#">Electricidad</a></li>
            </ul>
        </div>
        <?php
       
        include 'includes/templates/anuncios.php'
        ?>
    </div>

    <?php include 'includes/templates/ws.php'; ?>

</main>

<?php include 'includes/templates/footer.php'; ?>