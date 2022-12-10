<?php
session_start();

$servername = "localhost";
$username = "site";
$password = "123123";
$dbname = "site";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>

