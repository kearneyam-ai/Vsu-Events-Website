<?php

if (isset($_POST['delete'])) {
    # Delete record-button was clicked
    $_record = $_POST['vsu_events'];
    echo '<h1>Deleting record '.$_record.' from database </h1>';

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

    // sql to delete a record
    $sql = "DELETE FROM vsu_events WHERE event_name = '$_record'";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 style = \"color:green\">Record deleted successfully</h2>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    include 'display.php';

    //No need to close connection. It closes after running display.php
    //$conn->close();

}
elseif (isset($_POST['update'])) {
    # Update record-button was clicked
    $_record = $_POST['vsu_events'];
    echo '<h1>Updating record '.$_record.' from database </h1>';
}

?>