<?php
$servername = "localhost";
$username = "root";  // Cambia esto si tu usuario es diferente
$password = "";      // Cambia esto si tienes una contraseña de MySQL
$dbname = "gsi";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
