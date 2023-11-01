<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "meva2722";
$password = "4321";
$dbname = "vsu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vsu_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form action = \"delete_or_update.php\" method = \"post\">";
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
    echo "<br> evt_name:  " . $row["evt_name"]. " - Start Time: " . $row["start_time"]. " Location: " . $row["evt_location"]. "<br>";
    }
    echo "<br>";
    echo "<input type=\"submit\" value=\"Delete record\" name=\"delete\">";
    echo "<input type=\"submit\" value=\"Update record\" name=\"update\">";
    echo "</form>";

} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>