<?php

function incluirTemplate($nombre): void {
     //  echo TEMPLATES_URL."/$nombre.php";
     include __DIR__ . "/templates/$nombre.php";
}
?>