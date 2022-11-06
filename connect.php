<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "gym_system";

// Create connection
$con = new mysqli($servername,$username,$password,$dbName);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected sdsdsd";
?>