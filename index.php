<?php 
require 'includes/funciones.php';
incluirTemplate('header')
?>

    <main class="contenedor">
        
     <?php 
      $limite = 6;
      include 'includes/templates/anuncios.php'
      ?>




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