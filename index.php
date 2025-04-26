<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Función de conexión MySQL con SSL
function getMySqlConnection() {
    $host = "10.175.0.4";  // Asegúrate de que esta IP sea accesible
    $user = "jbase";
    $pass = "Aliceyeloy2473";
    $db   = "main";
    $port = 3306;

    $con = mysqli_connect($host, $user, $pass, $db, $port);

    if (!$con) {
        die("<div class='message error'>❌ Error MySQL (SSL): " . mysqli_connect_error() . "</div>");
    }
    return $con;
}

// Llamada a la función
$conn = getMySqlConnection();
echo "Conexión exitosa!";
?>

 