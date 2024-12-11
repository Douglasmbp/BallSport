<?php
include "../../modelo/conexion.php";
$mensaje = "";

if (isset($_POST['registrar'])){
  if (empty($_POST['nombre']) || empty($_POST['jugadores'])) {
    $mensaje = "<p style='color:red;'>Por favor complete todos los campos</p>";
  }
  else {
    if ($_POST['jugadores'] < 3) {
        $mensaje = "<p style='color:red;'>El numero de jugadores minimo para poder participar son 8</p>";
    }
    else{
        $nombre = $_POST['nombre'];
        $jugadores = $_POST['jugadores'];
        $fecha = date("Y-m-d");
    
        $sql = $conexion->query("INSERT INTO equipos (nombre, jugadores, fecha) VALUES ('$nombre','$jugadores','$fecha')");
    
        if ($sql == 1) {
          $mensaje = "<p style='color:green;'>Equipo inscrito con éxito</p>";
          header("refresh:2; url=equipos.php");
        }
        else{
          $mensaje = "<p style='color:red;'>Error al inscribir el equipo</p>";
        }
    }
  }
}
?>