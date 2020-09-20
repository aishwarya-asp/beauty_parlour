<?php
	session_start();
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'beautyparlour2020');
	
	if(isset($_POST['Submit']))
	{	
		  $firstname = $_POST['firstname'];
		  $lastname = $_POST['lastname'];
		  $contactno = $_POST['contactno'];
		  $time = $_POST['time'];
		  $services = $_POST['services'];
		  
		  $reg = "INSERT INTO `appointment`(`id`,`firstname`,`lastname`,`contactno`,`time`,`services`) VALUES ('','$firstname' , '$lastname' , '$contactno' , '$time' , '$services')";
		  $query = mysqli_query($con,$reg); 
	}	
	else
	{
		echo"Something went wrong";
	}
?>