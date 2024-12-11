<?php
include "../../modelo/conexion.php";
session_start();
$mensaje = "";

if (isset($_POST['agregar_jugador'])) {
    if (empty($_POST['nombre']) || empty($_POST['cedula'])) {
        $mensaje = "<p style='color:red;'>Por favor complete todos los campos</p>";
    } else {
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        date_default_timezone_set(timezoneId: 'America/Caracas');
        $fecha = date(format: 'Y-m-d');
        $equipo = $_POST['equipo_id'];
        $sql = $conexion->query("INSERT INTO players (nombre, cedula, fecha, id_equipo) VALUES ('$nombre','$cedula', '$fecha','$equipo')");

        if ($sql == 1) {
            $mensaje = "<p style='color:green;'>Equipo inscrito con éxito</p>";
            header("location: ../../vistas/Admin/equipos.php");
        } else {
            $mensaje = "<p style='color:red;'>Error al inscribir el equipo</p>";
        }
    }
}
