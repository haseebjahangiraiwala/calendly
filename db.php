<?php
$host = "localhost";
$user = "uulevslgtrnau";
$pass = "ld4dy42tkorz";
$dbname = "dbntijkh14askz";
 
$conn = new mysqli($host, $user, $pass, $dbname);
 
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
