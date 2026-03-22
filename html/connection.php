<?php
$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$user = "35wvKbyfpupw6hZ.root";
$pass = "JWdACyXeiZ6cN029";
$db   = "test";

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port)) {
    die("Connection failed: " . mysqli_connect_error());
}

?>