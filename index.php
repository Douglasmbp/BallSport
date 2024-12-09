<?php
    include "controladores/login/login.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilos/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BallSport</title>
</head>

<body>
    <div class="container">
        <div class="illustration">
            <img src="img/logo.jpg" alt="Illustration">
            <p>Tu ventana al mundo del deporte, siempre al día.</p>
        </div>
        <div class="login-form">
            <h2>Iniciar Sesión</h2><br><br>
            <form method="post" action="#">
                <label for="username"> Nombre de usuario:</label>
                <input type="text" placeholder="Ingresa el nombre de Usuario" name="username" required>
                <label for="password"> Contraseña:</label>
                <input type="password" placeholder="Ingresa la Contraseña" name="password" required><br><br>
                <?php if (!empty($mensaje)): ?>
                    <div><?php echo $mensaje; ?></div>
                <?php endif; ?>
                <button type="submit" name="ingresar">Ingresar</button><br><br>
                <a href="vistas/Cuenta/crear_cuenta.php">Crear Cuenta</a>
                <a href="vistas/Cuenta/olvido_contrasena.php">¿Olvidaste tu Contraseña?</a>
            </form>
        </div>
    </div>
</body>
</html>
