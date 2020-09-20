<?php
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Makeover | Contact</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 16px;
  margin-top: 6px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(6, 108, 148);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:rgb(6, 108, 148);
}

.container {
  color:rgb(6, 108, 148);
  border-radius: 5px;
  background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('bg.jpg');
  padding: 200px;
}
</style>
</head>
<body>
<div class="container">
  <form action="contactaction.php" method="POST">
    <div><h3><center>Contact Form</center></h3></div>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="contactno">Contact Number</label>
    <input type="number" id="contactno" name="contactno" placeholder="Your Contact No..." required>

    <label for="area">Area</label>
    <select id="area" name="area">
      <option value="Shivne">Shivne</option>
      <option value="Karvenagar">Karvenagar</option>
      <option value="Uttamnagar">Uttamnagar</option>
    </select>

    <label for="Write Something">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Something.." style="height:100px"></textarea>

    <input type="submit" value="Submit" name="Submit">
  </form>
</div>

</body>
</html>
