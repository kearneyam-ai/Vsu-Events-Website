<?php
$servername = "localhost";
$username = "meva2722";
$password = "4321";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "hello world";

echo "<h3 style = \"color:blue;\">Connected Successfully! </h3>";

?>
