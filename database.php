<?php
$hostname = "localhost"; 
$dbUser = "root";
$dbPassword = "";
$dbName = "petadoptionlogin";

$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName); 
if (!$conn) {
    die("Registration failed"); 
}
?>
