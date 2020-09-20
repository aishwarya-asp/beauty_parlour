<?php
	session_start();
	

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'beautyparlour2020');
	
	$name = $_POST['User'];
	$password = $_POST['Password'];
	
	$s = "select * from userregistration where name = '$name'";


	$result = mysqli_query($con , $s);

	$num = mysqli_num_rows($result); 

	if ($num ==1)
		{
		 echo"Username Already Taken";
		}
	else
		{
		 header('location:login_and_registration.php');
		 $reg ="insert into userregistration(name , password) values('$name','$password')";
		 mysqli_query($con,$reg);
		 echo"Registration Sucessful";
		}
?>