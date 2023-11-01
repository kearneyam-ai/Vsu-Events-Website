<?php

include 'connect.php';

$servername = "localhost";
$username = "meva2722";
$password = "4321";
$dbname = "vsu_db";


$user_name = $_POST["username"];
$admin_password = $_POST["password"];

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
/*
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT evt_location FROM vsu_events";
$result = $conn->query($sql);

// echo $sql;

while($row = mysqli_fetch_array($result)) {
  echo $row['evt_location']."<br><br>";// Print a single column data
  echo "<input type=\"radio\" id=\"".$row["evt_location"]. "\" name=\"evt_location\" value=\"". $row["evt_location"]. "\">";
  
}



echo "<h3 style = \"color:blue;\">Connected Successfully! </h3>";
// $conn->close();
*/

?>