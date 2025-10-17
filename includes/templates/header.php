<?php

if (!isset($_SESSION)) {
    session_start();
}

$auth  = $_SESSION['login'] ?? false;

// var_dump($auth)


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bozzo</title>
    <link rel="shortcut icon" type="image/jpg" href="imagenesPrueba/logo.jpeg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>



<header class="header">
    <div class="contenedor contenido-header">
        <a href="<?php echo DIR_; ?>index.php">
            <h1>Bozzo</h1>
        </a>

        <!-- Botón Hamburguesa -->
        <button class="menu-toggle" aria-label="Abrir menú">
            <span class="linea"></span>
            <span class="linea"></span>
            <span class="linea"></span>
        </button>


        <?php $paginaActual = basename($_SERVER['PHP_SELF']); ?>

        <nav class="navegacion-principal">
            <a href="<?php echo DIR_; ?>index.php" class="<?php echo $paginaActual === 'index.php' ? 'activo' : ''; ?>">Inicio</a>
            <a href="<?php echo DIR_; ?>servicios.php" class="<?php echo $paginaActual === 'servicios.php' ? 'activo' : ''; ?>">Servicios</a>
            <a href="<?php echo DIR_; ?>nosotros.php" class="<?php echo $paginaActual === 'nosotros.php' ? 'activo' : ''; ?>">Nosotros</a>

            <?php if (!$auth): ?>
                <a href="<?php echo DIR_; ?>loginupb.php" class="<?php echo $paginaActual === 'loginupb.php' ? 'activo' : ''; ?>">Iniciar sesión</a>
            <?php endif; ?>

            <?php if ($auth): ?>
                <a href="<?php echo DIR_; ?>admin/index.php" class="sesion">Administrador</a>
                <a href="<?php echo DIR_; ?>cerrar_sesion.php" class="sesion">Cerrar sesión</a>
            <?php endif; ?>
        </nav>
    </div>
</header>