<?php 
include "../../modelo/conexion.php";
$mensaje = "";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM equipos WHERE id='$id'");
    if ($sql==1) {
      $mensaje = "<p style='color:green;'>Equipo eliminado con exito</p>";
      header("location: ../../vistas/Admin/equipos.php");
    } else {
      echo "Error al eliminar equipo";
    }
  }
?>