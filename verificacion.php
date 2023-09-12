<?php
session_start();

$server = "localhost";
$username = "jimmy";
$password = "PHS8i5EeqGA7jYQw";
$database = "prueba";


$conexion = new mysqli($server, $username, $password, $database);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM test WHERE email='$email'";
$result = $conexion->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($pwd, $row['pwd'])) {
        $_SESSION['id'] = $row;
        header("Location: index.php");
        echo "Se ha iniciado sesión exitosamente";
    } else {
        echo "Contraseña incorrecta. <a href='iniciar_sesion.php'>Intentar de nuevo</a>";
    }
} else {
    echo "Usuario no encontrado. <a href='index.php'>Registrarse</a>";
}

// Cerrar la conexión
$conexion->close();
?>