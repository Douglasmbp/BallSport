<?php

session_start();

require_once "../../modelo/conexion.php";

if (isset($_POST["id"])) {
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['id']) &&
        !empty($_POST['cedula']) &&
        !empty($_POST['cargo']) &&
        !empty($_POST['tipo_usuario']) &&
        !empty($_POST['user']) &&
        !empty($_POST['password'])
    ) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $cargo = $_POST['cargo'];
        $tipo_usuario = $_POST['tipo_usuario'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $fecha = date('y,m,d');

        $pass = md5($password);

        $sql = $conexion->query("UPDATE usuarios SET nombre='$nombre', cedula='$cedula', cargo='$cargo', tipo_usuario='$tipo_usuario',  usuario='$user', password='$pass' ,fecha='$fecha' WHERE id='$id';");
        if ($sql == 1) {
            echo '<div class="alert-success">Equipo se modifico Correctamente</div>';
            header("location: ../../views/Admin/usuarios/index.php");
        } else {
            echo '<div class="alert-danger">Error al regisrar</div>';
        }
    } else {
        echo '<div class="alert-warning">Por favor llene todos los campos</div>';
    }
}
