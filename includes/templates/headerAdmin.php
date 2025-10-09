<?php

if(!isset($_SESSION)) {
session_start();
}

$auth  = $_SESSION['login'] ?? false;

var_dump($auth)


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bozoo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/css/app.css" />
  </head>


  <header class="header">
    <div class="contenedor contenido-header">
        <a href="index.php">
            <h1>Bozzo</h1>
        </a>
        <nav class="navegacion-principal" id="nav">
          <!-- <a href="#">Crear</a>
          <a href="#">Eliminar</a> -->
          <a href="../index.php">Pagina</a>
          <?php  if ($auth):?>
                 <a href="../Cerrar_sesion.php" class="sesion">Cerrar sesion</a>
            <?php  endif ?>
          <!-- <a href="contacto.php">Contacto</a> -->
        </nav>
    </div>
</header>
