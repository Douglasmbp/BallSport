<?php
    include "modelo/conexion.php";
    $mensaje = "";

if(isset($_POST['ingresar'])) {
    if (empty($_POST['username']) and empty($_POST['password'])) {
        $mensaje = "<p style='color:red;'>Por favor complete todos los campos</p>";
    }
    else{
        $username = strtolower($_POST['username']);
        $password = strtolower($_POST['password']);

        $pass = md5($password);

        // Consulta para verificar si el usuario y contraseña son correctos
        $sql = $conexion->query("SELECT * FROM usuarios WHERE username='$username' AND password='$pass'") ;

        if($sql->num_rows > 0) {
            session_start();
            $_SESSION['user_data'] = $sql->fetch_object() ;
            
            if ($_SESSION['user_data']->tipo_usuario == "admin") {
                header("location: vistas/Admin/index.php");
            }
            elseif ($_SESSION['user_data']->tipo_usuario == "estandar"){ 
                header("location: vistas/Estandar/index.php");
            }
            else{
                header("location: index.php");
            }
            } 
        else {
            header("refresh:2; url=index.php");
            $mensaje = "<p style='color:red;'>Contraseña o Usuario incorrecto.</p>";
        }
    }
}
?>