<?php
include "../../modelo/conexion.php";
$mensaje = "";
$pregunta_seguridad1 = "";
$usuario_existe = false;
$username = "";

if (isset($_POST['verificar_usuario'])) {
    session_start();
    $username = strtolower($_POST['username']);

    // Verificar si el usuario existe
    $sql = $conexion->query("SELECT pregunta_seguridad1 FROM usuarios WHERE username='$username'");
    
    if ($sql->num_rows > 0) {
        // Obtener la pregunta de seguridad
        $usuario = $sql->fetch_assoc();
        if ($usuario['pregunta_seguridad1'] == "ciudad_natal") {
            $usuario['pregunta_seguridad1']= "¿En qué ciudad naciste?";
        }
        if ($usuario['pregunta_seguridad1'] == "mascota") {
            $usuario['pregunta_seguridad1'] = "¿Cuál es el nombre de tu mascota?";
        }
        if ($usuario['pregunta_seguridad1'] == "color_favorito") {
            $usuario['pregunta_seguridad1'] = "¿Cuál es tu color favorito?";
        }
        $pregunta_seguridad1 = $usuario['pregunta_seguridad1'];
        $usuario_existe = true; // El usuario existe
    } else {
        $mensaje = "<p style='color:red;'>El usuario no existe</p>";
    }
}
if (isset($_POST['restablecer'])) {
    $username = strtolower($_POST['username']);
    $respuesta_seguridad1 = strtolower($_POST['respuesta_seguridad1']);
    $respuesta_seguridad = md5($respuesta_seguridad1); // Encriptar la respuesta
    $password = strtolower($_POST['password']);

    // Verificar la respuesta a la pregunta de seguridad
    $sql = $conexion->query("SELECT * FROM usuarios WHERE  username='$username' AND respuesta_seguridad1='$respuesta_seguridad'");
    
    if ($sql->num_rows > 0) {
        // Actualizar la contraseña
        $pass = md5($password);
        $update = $conexion->query("UPDATE usuarios SET password='$pass' WHERE username='$username'");
        
        if ($update) {
            $mensaje = "<p style='color:green;'>Contraseña actualizada con éxito</p>";
            header("refresh:2; url=../../index.php");
        } else {
            $mensaje = "<p style='color:red;'>Error al actualizar la contraseña</p>";
        }
    } else {
        $mensaje = "<p style='color:red;'>La respuesta a la pregunta de seguridad es incorrecta</p>";
    }
}
?>