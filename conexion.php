<?php
$server = "localhost";
$username = "jimmy";
$password = "PHS8i5EeqGA7jYQw";
$database = "prueba";


$conexion = new mysqli($server, $username, $password, $database);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO test (nombre, email, pwd) VALUES ('$nombre', '$email', '$pwd')";

if ($conexion->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conexion->error;
}


$conexion->close();
?>