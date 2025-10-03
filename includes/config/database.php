<?php


// concexion para trabajar desde UPB
function conectarDB() {
    $db = mysqli_connect('localhost', 'root', '', 'bozzo', 3305);

    if (!$db) {
        echo "Error de conexión: ";
        exit; // detiene la ejecución si no hay conexión
    }

    // echo "✅ Conexión exitosa a la BD"; // puedes dejarlo solo para pruebas

    return $db;
}


// concexion para trabajar desde otro sitio
// function conectarDB() {
//     $db = mysqli_connect('localhost', 'root', '', 'bozzo');

//     if (!$db) {
//         echo "Error de conexión: ";
//         exit; // detiene la ejecución si no hay conexión
//     }

//     // echo "✅ Conexión exitosa a la BD"; // puedes dejarlo solo para pruebas

//     return $db;
// }