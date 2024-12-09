<?php
    include "../../controladores/usuarios/registrar.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../../estilos/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BallSport</title>
</head>

<body>
    <div class="container">
        <div class="illustration">
            <img src="../../img/logo.jpg" alt="Illustration">
            <p>Tu ventana al mundo del deporte, siempre al día.</p>
        </div>
        <div class="login-form">
            <h2>Iniciar Sesión</h2>
            <form method="post" action="#">
                <label for="username"> Nombre y Apellido:</label>
                <input type="text" placeholder="Ingresa su nombre y apellido" name="nombre" required>
                <label for="username"> Nombre de usuario:</label>
                <input type="text" placeholder="Ingresa el nombre de Usuario" name="username" required>
                <label for="password"> Contraseña:</label>
                <input type="password" placeholder="Ingresa la Contraseña" name="password" required>
                <label for="pregunta_seguridad1">Pregunta de seguridad:</label>
                <select name="pregunta_seguridad1" required>
                    <option value="">Selecciona una pregunta</option>
                    <option value="mascota">¿Cuál es el nombre de tu mascota?</option>
                    <option value="ciudad_natal">¿En qué ciudad naciste?</option>
                    <option value="color_favorito">¿Cuál es tu color favorito?</option>
                </select>
                <label for="respuesta_seguridad1">Respuesta:</label>
                <input type="password" placeholder="Ingresa la respuesta" name="respuesta_seguridad1" required><br><br>
                
                <?php if (!empty($mensaje)): ?>
                    <div><?php echo $mensaje; ?></div>
                <?php endif; ?>
                <button type="submit" name="registrar">Crear cuenta</button>
                <a href="../../index.php"> ¿Ya tienes una cuenta?</a>
            </form>
        </div>
    </div>
</body>
</html>
