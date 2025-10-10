<?php

if (!isset($_SESSION)) {
  session_start();
}

$auth  = $_SESSION['login'] ?? false;

// var_dump($auth)


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bozzo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/jpg" href="../../imagenesPrueba/logo.jpeg">
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900';" />
  <link rel="stylesheet" href="../build/css/app.css" />
</head>

<body>
  <header class="header">
    <div class="contenedor contenido_header">
      <nav class="navegacion-principal" id="nav">
        <header class="header">
    <div class="contenedor contenido-header">
        <a href="index.php">
            <h1>Bozzo</h1>
        </a>

         <!-- Botón Hamburguesa -->
        <button class="menu-toggle" aria-label="Abrir menú">
            <span class="linea"></span>
            <span class="linea"></span>
            <span class="linea"></span>
        </button>

        <nav class="navegacion-principal" id="nav">
          <!-- <a href="#">Crear</a>-->
          <a href="../index.php">Administración</a> 
          <a href="../../index.php">Pagina</a>
          <?php  if ($auth):?>
                 <a href="../Cerrar_sesion.php" class="sesion">Cerrar sesion</a>
            <?php  endif ?>
          <!-- <a href="contacto.php">Contacto</a> -->
        </nav>
    </div>
  </header>