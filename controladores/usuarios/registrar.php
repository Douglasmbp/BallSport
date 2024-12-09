<?php
include "../../modelo/conexion.php";
$mensaje = "";

if (isset($_POST['registrar'])) {
  if (empty($_POST['nombre']) || empty($_POST['username']) || empty($_POST['password'])) {
    $mensaje = "<p style='color:red;'>Por favor complete todos los campos</p>";
  } else {
    session_start();
    $nombre = $_POST['nombre'];
    $username = strtolower($_POST['username']);
    $password = strtolower($_POST['password']);
    $tipo_usuario = "estandar";
    $pregunta_seguridad1 = $_POST['pregunta_seguridad1'];
    $respuesta_seguridad1 = strtolower($_POST['respuesta_seguridad1']);
    $fecha = date("Y-m-d");

    $respuesta_seguridad = md5($respuesta_seguridad1);
    $pass = md5($password);

    $sql = $conexion->query("INSERT INTO usuarios (nombre, username, password, tipo_usuario, fecha, pregunta_seguridad1, respuesta_seguridad1) VALUES ('$nombre','$username','$pass','$tipo_usuario','$fecha','$pregunta_seguridad1', '$respuesta_seguridad')");

    if ($sql == 1) {
      $mensaje = "<p style='color:green;'>Usuario creado con éxito</p>";
      header("refresh:2; url=../../index.php");
    } else {
      $mensaje = "<p style='color:red;'>Error al crear el usuario</p>";
    }
  }
}
