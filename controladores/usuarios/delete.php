<?php
include "../../modelo/conexion.php";

if (!empty($_GET["id"])) {
  $id = $_GET["id"];
  $sql = $conexion->query("DELETE FROM usuarios WHERE id='$id'");
  if ($sql == 1) {
    echo "Usuario eliminado con éxito";
    header("location: ../../views/Admin/usuarios/index.php");
  } else {
    echo "Error al eliminar usuario";
  }
}
