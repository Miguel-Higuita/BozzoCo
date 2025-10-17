<?php


// conexion para trabajar desde UPB
// function conectarDB() {
//     $db = mysqli_connect('localhost', 'root', '', 'bozzo', 3305);

//     if (!$db) {
//         echo "Error de conexión: ";
//         exit; // detiene la ejecución si no hay conexión
//     }

//     // echo "✅ Conexión exitosa a la BD"; // puedes dejarlo solo para pruebas

//     return $db;
// }


// conexion para trabajar desde otro sitio


if (!function_exists('conectarDB')) {
    function conectarDB()
    {
        $db = mysqli_connect('localhost', 'root', '', 'bozzo');
        mysqli_set_charset($db, 'utf8mb4');


        if (!$db) {
            echo "Error de conexión: ";
            exit; // detiene la ejecución si no hay conexión
        }

        // echo "✅ Conexión exitosa a la BD"; // puedes dejarlo solo para pruebas

        return $db;
    }
}
