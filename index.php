// --- Función de conexión MySQL con SSL ---
function getMySqlConnection() {
    $host = "10.175.0.4";
    $user = "jbase";
    $pass = "Aliceyeloy2473";
    $db   = "main";
    $port = 3306;
 
    $con = mysqli_init();
    mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL);
    mysqli_real_connect(
        $con,
        $host,
        $user,
        $pass,
        $db,
        $port,
        NULL,
        MYSQLI_CLIENT_SSL
    );
 
    if (mysqli_connect_errno()) {
        die("<div class='message error'>❌ Error MySQL (SSL): " . mysqli_connect_error() . "</div>");
    }
    return $con;
}
 