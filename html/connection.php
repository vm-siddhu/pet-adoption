<?php
$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$user = "35wvKbyfpupw6hZ.root";
$pass = "JWdACyXeiZ6cN029";
$db   = "test"; // Make sure this matches the DB name you created (e.g., 'petadoption')

$conn = mysqli_init();

// 1. Prepare the SSL connection
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// 2. Connect using the MYSQLI_CLIENT_SSL flag (This fixes your error)
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

// Success!
?>