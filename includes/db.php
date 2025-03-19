<?php
$host = "localhost";
$user = "root"; // Cambiar si usas otro usuario
$password = ""; // Tu contraseña si aplicable
$database = "crudphp"; // Nombre de la BD

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>

