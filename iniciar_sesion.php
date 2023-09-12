<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="tarjeta">
        <h2>Iniciar sesión</h2>

        <form method="post" action="verificacion.php">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="pwd">Contraseña:</label>
            <input type="password" name="pwd" id="pwd" required><br><br>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <p>¿No tienes una cuenta? <a href="index.php">Crear Cuenta</a></p>
    </div>
</body>

</html>