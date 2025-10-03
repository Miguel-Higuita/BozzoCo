<?php 
require 'includes/funciones.php';
incluirTemplate('header')
?>

    <main class="contenedor">
        <section>
             
            <!-- inicio producto -->
            <div class="grid">
                <div class="servicio1">
                <a href="adentro.php">
                    <img class="servicio__imagen" src="src/scss/img/nino-fontanero-lindo-dibujos-animados_33070-2238.jpg" alt="" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">Plomeria</p>
                    <p class="servicio__labor">Miguel Angel</p></b>
                    </div>
                </a>
                </div>
                <!-- termina servicio -->
            <!-- inicio servicio -->
                <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre"></p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
                </div>

            <!-- termina servicio -->
            <!-- inicio servicio -->
                <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">#</p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
                </div>
            <!-- termina servicio -->
            <!-- inicio servicio -->
                <div class="servicio1">
                <a href="#">
                    <img class="servicio__imagen" src="#" alt="#" />
                    <div class="servicio__informacion">
                    <b><p class="servicio__nombre">#</p>
                    <p class="servicio__labor">$$</p></b>
                    </div>
                </a>
                </div>
            <!-- inicio servicio -->
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
            <!-- termina servicio -->
             <div>
                <a href="admin/propiedades/crear.php" class="boton boton-verde">Nuevo servicio</a>
             </div>
        </section>
        <div class="mensajeria">
        <a href="https://api.whatsapp.com/send?phone=3006425967 &text=Hola%20,%20Estoy%20Interesado%20por%20un%20trabajo,%20mi%20nombre%20es:%20" target="_blank">
            <picture class="icon-wsp">
                <source srcset="src/scss/img/logowhatsApp.avif" type="image/avif">
                <source srcset="src/scss/img/logowhatsApp.webp" type="image/webp">
                <img loading="lazy" width="100%" height="100%" src="src/scss/img/logowhatsApp.png" alt="logowhatsApp">
            </picture>
        </a>
        
 
    </div>
    </main>
<?php include 'includes/templates/footer.php'; ?>