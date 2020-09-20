<?php
	session_start();

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'beautyparlour2020');
	
	$name = $_POST['User'];
	$password = $_POST['Password'];
	
	$s = "select * from userregistration where name = '$name' && password = '$password'";


	$result = mysqli_query($con , $s);

	$num = mysqli_num_rows($result); 

	if ($num ==1)
		{
		 header('location:index.php');
		}
	else
		{
		 echo"USERNAME or PASSWORD is incorrect";
		 header('location:login.php');
		}
?>