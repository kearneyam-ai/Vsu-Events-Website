<!-- <!DOCTYPE html>  -->
<!DOCTYPE html>
<html> 

<body>
<head>
  
  <h2>HTML Forms</h2> 
<style>
body{
  color: orange;
}

h2{
  color:white;
  background-color: orange;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif'
  </article>;
}
</style>
</head>
<style>
  body{
    background-color: navy;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif'
  }

  label{
    color: orange;
    font-size: 20px;
  }

  input{
    background-color: lightgray;
    text-align: center;
  }

</style>

<form action="insert.php" method="post">
<!-- <form> -->

  <label for="evt_name">Event name:</label><br> 
  <input type="text" id="evt_name" name="evt_name" placeholder="Homecoming Game"><br> 

  <label for="evt_date">Event Date:</label><br>
  <input type="date" id="evt_date" name="evt_date" placeholder="Example: mm/dd/yyyy"><br>

  <label for="start_time">Start Time: </label><br>
  <input type="time" id="start_time" name="start_time"><br>

  <label for="end_time">End Time: </label><br>
  <input type="time" id="end_time" name="end_time"><br>

  <label for="evt_desc">Event Description:</label><br> 
  <input type="text" id="evt_desc" name="evt_desc" placeholder="Example: Football game"><br> 

  <label for="evt_organizer">Event Organizer:</label><br>
  <input type="text" id="evt_organizer" name="evt_organizer" placeholder="Example: T.A.B"><br>

  <label for="max_participant">Max Participants: </label><br>
  <input type="number" id="max_participant" name="max_participant" step="25"><br>

  <label for="evt_location">Event Location:</label><br>
  <input type="text" id="evt_location" name="evt_location" placeholder="Example: Rogers Stadium"><br>

  <label for="evt_duration">Event Duration (Hours) </label><br>
  <input type="number" id="evt_duration" name="evt_duration" step="1" min="1" max="24"><br>

  
  
  <br><input type="submit" value="Submit"> 

</form>  

<h1>HI MARCUS!!!!</h1>

  

<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>  -->

  

</body> 

</html>