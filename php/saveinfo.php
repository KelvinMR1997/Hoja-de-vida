<?php
// Incluir archivo de base de datos
include("db.php");
// Funcion para el botón enviar
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $servicio = $_POST['servicio'];
    $email = $_POST['e-mail'];
    $mensaje = $_POST['mensaje'];
    // Validaciones

    if ($nombre == "" || $servicio == "" || $email == ""){
        

        $_SESSION ['mensaje'] = 'Por favor, llene los campos requeridos';
        $_SESSION ['tipo_mensaje'] = 'danger';

        $_POST['enviar'];
        header('Location: ../contacto.php');   
        die();

    }
    // Query
    $query = "INSERT INTO contacto(nombre,servicio,email,mensaje) VALUES ('$nombre','$servicio','$email','$mensaje')";
    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Algo anda mal');
    }
    //mostrar mensaje
    $_SESSION['mensaje'] = 'Sus datos han sido registrados exitosamente';
    $_SESSION['tipo_mensaje'] = 'success';
    header('Location: ../contacto.php');   
}
