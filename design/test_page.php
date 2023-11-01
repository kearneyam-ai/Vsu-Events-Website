<?php
    echo "Entered into VSU Event DB" . "<br>";
    echo "<br>";

    $evt_name = $_POST['evt_name'];
    $evt_desc = $_POST['evt_desc'];
    $evt_organizer = $_POST['evt_organizer'];
    $evt_location = $_POST['evt_location'];
    $evt_date = $_POST['evt_date'];
    $max_participant = $_POST['max_participant'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $evt_duration = $_POST['evt_duration'];
    
    echo 'Event Name: ' . $evt_name . "<br>";
    echo "<br>";
    echo 'Event Description:  ' . $evt_desc . "<br>";
    echo "<br>";
    echo 'Event Organizer: ' .  $evt_organizer . "<br>";
    echo "<br>";
    echo 'Event Location: ' . $evt_location . "<br>";
    echo "<br>";
    echo 'Event Date: ' . $evt_date . "<br>";
    echo "<br>";
    echo 'Max Participants: ' . $max_participant . "<br>";
    echo "<br>";
    echo 'Start Time: ' . $start_time . "<br>";
    echo "<br>";
    echo 'End Time: ' . $end_time . "<br>";
    echo "<br>";
    echo 'Event Duration (Hours): ' . $evt_duration . "<br>";

    // include 'connect.php'

?>
