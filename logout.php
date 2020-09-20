<?php
	session_start();
	session_destroy();

	header('location:login_and_registration.php')
?>