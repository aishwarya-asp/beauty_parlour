<?php
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=2">
<title>Makeover | Appointment</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
   
  margin-bottom:0px;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:rgb(6, 108, 148);
  color:white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  margin-bottom: 16px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:rgb(6, 108, 148);
}

.container {
  color:rgb(6, 108, 148);
  border-radius: 5px;
  background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('bg2.jpg');
  padding: 200px;
}
</style>
</head>
<body>
<div class="container">
  <form action="action.php" method="POST">
    <div><h3><center>Appointment Form</center></h3></div>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="contactno">Contact Number</label>
    <input type="number" id="contactno" name="contactno" placeholder="Your Contact No..." required>

    <label for="time">Time</label>
    <select id="time" name="time">
      <option value="morning">10:30am-1:30pm</option>
      <option value="afternoon">2:00pm-5:00pm</option>
      <option value="evening">5:00pm-8:00pm</option>
    </select>

    <label for="Write Services">Services</label>
    <textarea id="services" name="services" placeholder="Write Services.." style="height:100px"></textarea>

    <input type="submit" value="Submit" name="Submit">
  </form>
</div>

</body>
</html>
