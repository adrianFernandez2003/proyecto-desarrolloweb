<?php
include('connection.php');

if(isset($_POST['create_user'])) {
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];
    
    $query = "INSERT INTO contacto(nombre, apellidoP, apellidoM, telefono, correo, comentario) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono', '$correo', '$comentario')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die('query failed');
    }

    $_SESSION['message'] = 'Datos enviados con exito';
    $_SESSION['message_type'] = 'success';

    header("Location: contacto.php");
}
?>