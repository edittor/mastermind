<?php

// add your own database credentials

$servername = "sample";
$username = "sample";
$password = "sample";
$dbname = "sample";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
