<?php 
include "../../modelo/conexion.php";
$mensaje = "";

if (isset($_GET["jugador"])) {
    $id = $_GET["jugador"];
    $sql = $conexion->query("DELETE FROM players WHERE id='$id'");
    if ($sql==1) {
      $mensaje = "<p style='color:green;'>Equipo eliminado con exito</p>";
      header("location: ../../vistas/Admin/equipos.php");
    } else {
      echo "Error al eliminar equipo";
    }
  }
?>