<?php 
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor-servicios">
    <div class="sidebar">
        <h1>Hola</h1>
        <h2>Categorias</h2>
        <ul class ="texto-lista">
            <li><a href="#">Plomeria</a></li>
            <li><a href="#">Vigilancia</a></li>
            <li><a href="#">Aseo</a></li>
            <li><a href="#">Mecanica</a></li>
            <li><a href="#">Electricidad</a></li>
        </ul>
    </div>
    <div class="grid ofertores">
        <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">#</p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
        </div>
        <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">#</p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
        </div>
        <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">#</p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
        </div>
    </div>
    
</main>

<?php include 'includes/templates/footer.php'; ?>