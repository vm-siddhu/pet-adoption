<?php

$host = "sql204.infinityfree.com";     
$user = "if0_41447937";         
$password = "nuwUWLREJj";          
$database = "if0_41447937_petadoption";


$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>