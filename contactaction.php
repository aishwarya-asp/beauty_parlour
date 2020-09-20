<?php
	session_start();
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'beautyparlour2020');
	
	if(isset($_POST['Submit']))
	{	
		  $firstname = $_POST['firstname'];
		  $lastname = $_POST['lastname'];
		  $contactno = $_POST['contactno'];
		  $area = $_POST['area'];
		  $subject = $_POST['subject'];
		  
		  $reg = "INSERT INTO `contact`(`id`,`firstname`, `lastname`, `contactno`,`area`,`subject`) VALUES ('', '$firstname' , '$lastname' , '$contactno' , '$area' , '$subject')";
		  $q=mysqli_query($con , $reg);
		  
	}	
	else
	{
		echo"Something went wrong";
	}
?>