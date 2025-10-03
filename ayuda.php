<?php require 'includes/funciones.php';
incluirTemplate('header')
?>
    <main class="contenedor">
        <h2>Ayuda</h2>
        <div class="contenedor__ayuda">
            <img class="ayuda__imagen" src="" alt="ayuda">
            <p class="ayuda__texto">Si tienes alguna pregunta o inquietud, no dudes en llenar el siguiente formulario
            y nos pondremos en contacto contigo lo mas pronto posible.</p>
        </div>
        <form class="formulario">
            <input class="formulario__campo"
            placeholder="Nombre"
            type="text">
            <input class="formulario__campo" 
            placeholder="Email"
            type="text">
            <input class="formulario__campo" 
            placeholder="Telefono"
            type="text">
            <input class="formulario__campo"
            placeholder="Descripcion de la consulta" 
            type="text">
            <input
            class="formulario__submit"
            type="submit"
            value="Enviar información"
            />
        </form>
    </main>

<?php include 'includes/templates/footer.php'; ?>