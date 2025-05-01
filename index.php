<?php
$host = 'basededatosflexible1.mysql.database.azure.com';
$user = 'jbase';
$password = 'Aliceyeloy2473';
$database = 'rubricadb'; // <--- nombre correcto de tu base de datos

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "✅ Conexión exitosa a la base de datos.";
$conn->close();
?>

