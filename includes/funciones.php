<?php

function incluirTemplate($nombre): void {
     //  echo TEMPLATES_URL."/$nombre.php";
    include __DIR__ . "/templates/$nombre.php";
}



function autenticado() : bool {
    session_start();

    $auth = $_SESSION['login'];

    if($auth) {
        return true;
    }

    return false;
}


// Ruta base del proyecto
if (!defined('DIR_')) {
    define('DIR_', '/'); // Ajusta la ruta según la carpeta real del proyecto
}

?>