<?php require 'includes/funciones.php';
incluirTemplate('header')
?>

    <main class="contenedor">

    <h1 class="titulo1">Nosotros</h1>
    <div class="nosotros">
        <div class="nosotros__contenido">
        <div class="nosotros__texto">
            <p>
                Bozzo nace como una iniciativa para conectar personas y facilitar el acceso a servicios de calidad.
            </p>
            <p>
                Somos jóvenes emprendedores comprometidos con la innovación y la satisfacción del cliente.
            </p>
        </div>
        <img class="nosotros__imagen" src="src/scss/img/icono-apreton-manos-estilo-plano_169241-482.jpg" alt="imagen nosotros"/>
        </div>
    </div>
    </main>
    <section class="contenedor__comprar">
    <h2 class="titulo2 comprar__titulo">¿Porque Confiar en Bozzo?</h2>
    </section>
    <section class="bloques contenedor">
    <div class="grid_2">
        <div class="bloque">
            <img
            class="bloque__imagen"
            src="src/scss/img/servicios.png"
            alt="porque comprar"
            />
            <h3 class="titulo3 bloque__titulo">Servicios de todo tipo</h3>
            <p class="bloque__texto">
                Se disponen de todos los servicios que requieran tus necesidades.
            </p>
        </div>
        <!-- bloque -->
        <div class="bloque">
            <img class="bloque__imagen" src="src/scss/img/personas.png" alt="">
            <h3 class="titulo3 bloque__titulo">De todos, Para todos</h3>
            <p class="bloque__texto">
                Bozzo, es un sistema de persona a persona, lo que lo hace diverso ante la sociedad</p>
        </div>
            <!-- bloque -->
            <div class="bloque">
            <img class="bloque__imagen" src="src/scss/img/telefono.png" alt="">
            <h3 class="titulo3 bloque__titulo">Contacto Privado</h3>
            <p class="bloque__texto">
                Contactos y comunicacion por la cuenta de cada persona, lo que hace un ambiente mas comodo. </p>
            </div>
            <!-- bloque -->
            <div class="bloque">
            <img class="bloque__imagen" src="src/scss/img/seguridad.png" alt="">
            <h3 class="titulo3 bloque__titulo">Seguridad</h3>
            <p class="bloque__texto">
                Mantenemos la informacion de nuestros clientes segura y con total privacidad. </p>
        </div>
    </div>
    </section>
<?php include 'includes/templates/footer.php'; ?>