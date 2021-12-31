<?php

$servername = "173.254.104.205";
$username = "mayurapa_dinujaya";
$password = "Mayurapada.2003";
$dbname = "mayurapa_quiz_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>