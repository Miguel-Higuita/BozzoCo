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

?>