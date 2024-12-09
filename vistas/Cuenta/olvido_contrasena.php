<?php
    include "../../controladores/login/olvido_contrasena.php";
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
            <h2>Restablecer Contraseña</h2><br>
            <?php if (!$usuario_existe): ?>
                <form method="post" action="">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" placeholder="Ingresa tu nombre de usuario" name="username" required>
                    <button type="submit" name="verificar_usuario">Verificar Usuario</button>
                </form>

            <?php else: ?>
                <h3>Usuario: <?php echo htmlspecialchars($username); ?></h3>
            <form method="post" action="">
                <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">

                <div>
                    <label for="pregunta_seguridad1">Pregunta de seguridad:</label>
                    <span><?php echo htmlspecialchars($pregunta_seguridad1); ?></span>
                </div><br>
                <label for="respuesta_seguridad1">Respuesta a la pregunta de seguridad:</label>
                <input type="password" placeholder="Ingresa la respuesta" name="respuesta_seguridad1" required>
            
                <label for="password">Nueva Contraseña:</label>
                <input type="password" placeholder="Ingresa la nueva contraseña" name="password" required>
            
                <button type="submit" name="restablecer">Restablecer Contraseña</button>
            </form>
            <?php endif; ?>

            <?php if ($mensaje): ?>
                <div><?php echo $mensaje;?></div>
            <?php endif; ?>
            <a href="../../index.php"> ¿Probar con la contraseña vieja?</a>

        </div>
    </div>
</body>
</html>
