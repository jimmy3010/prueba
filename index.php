<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="tarjeta">
        <h2>Crear cuenta</h2>
        
        <form method="post" action="conexion.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br><br>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="pwd">Contraseña:</label>
            <input type="password" name="pwd" id="pwd" required><br><br>
            
            <input type="submit" class="boton" value="Registrarse">
        </form>
        
        <p>¿Ya tienes una cuenta? <a href="iniciar_sesion.php">Iniciar Sesión</a></p>
    </div>
</body>

</html>