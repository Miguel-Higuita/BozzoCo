<?php
require 'includes/config/database.php';
$db = conectarDB();



// Autenticar el usuario
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // $nick = mysqli_real_escape_string($db, filter_var($_POST['usuario'], FILTER_VALIDATE_EMAIL));

    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    // $usuario = mysqli_real_escape_string($db, $_POST['usuario']);
    // $password =  mysqli_real_escape_string($db, $_POST['password']);

    // var_dump($usuario);
    // var_dump($password);


    if (!$usuario) {
        $errores[] = "El usuario es Obligatorio o no es valido";
    }

    if (!$password) {
        $errores[] = "El Password es Obligatorio";
    }

    if (empty($errores)) {
        // Consulta preparada para evitar inyección SQL
        $query = "SELECT * FROM usuario WHERE nick = ? LIMIT 1";
        //  var_dump($query);
        $stmt = mysqli_prepare($db, $query);

        if ($stmt) {
            // Vincular parámetros
            mysqli_stmt_bind_param($stmt, 's', $usuario);
            mysqli_stmt_execute($stmt);

            // Obtener resultados
            $resultado = mysqli_stmt_get_result($stmt);

            if ($resultado && $resultado->num_rows) {
                $usuarioData = mysqli_fetch_assoc($resultado);

                // Comparación directa (sin hash)
                $auth = ($password === $usuarioData['password']);

                if ($auth) {
                    session_start();
                    $_SESSION['usuario'] = $usuarioData['usuario'];
                    $_SESSION['login'] = true;

                    header('Location: /BozzoCo/admin/index.php');
                    exit;
                } else {
                    $errores[] = 'El password es incorrecto.';
                }
            } else {
                $errores[] = "El usuario no existe.";
            }

            mysqli_stmt_close($stmt);
        } else {
            $errores[] = "Error al preparar la consulta.";
        }
    }
}



// incluye  el header

require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>

    <?php foreach ($errores as $error) :   ?>
        <div class="alerta error">
            <?php echo $error;    ?>
        </div>

    <?php endforeach;   ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend></legend>

            <label for="Usuario">usuario</label>
            <input type="text" name="usuario" placeholder="Tu usuario" id="usuario">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" id="password">

        </fieldset> <!---------- Fin fieldset---------->

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">






    </form>

</main>


<?php
incluirTemplate('footer');
?>