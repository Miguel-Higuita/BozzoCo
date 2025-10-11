    <footer class="footer">
        <p class="footer__texto">
            Todos los derechos reservados Bozzo &copy; 2025
        </p>
        <p class="footer__tyc">
            Aplican <a href="tyc.php">terminos y condiciones</a>
        </p>

    </footer>
    <script>
  const btnMenu = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.navegacion-principal');

  btnMenu.addEventListener('click', () => {
    btnMenu.classList.toggle('activo');
    nav.classList.toggle('activo');
  });
</script>
    </body>
</html>