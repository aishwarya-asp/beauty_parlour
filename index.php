<?php
	session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <title>makeover | Index</title>
        <link rel="stylesheet" type="text/css" href="style_index.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="row clearfix">
                    <img src="logo.png" class="logo">
                    <ul class="main-nav animated slideInDown" id="check-class">
                        <li ><a class="fa fa-home" href="index.php">HOME</a></li>
                        <li ><a class="fa fa-user-o" href="aboutus.html">ABOUT US</a></li>
                        <li ><a class="fa fa-mobile" href="contact.php">CONTACT</a></li>
                        <li ><a class="fa fa-sign-in" href="login_and_registration.php">LOGIN</a></li>
                    </ul>
                    <a href="#" class="mobile-icon" id="check-class" onclick="slideshow()"><i class="fa fa-bars"></i></a>
                </div>
            </nav>
            <div class="main-content-header">
                <h2>WELCOME TO MAKEOVER PARLOUR</h2>
                <a href="appointment.php" class="btn-btn1">MAKE AN APPOINTMENT</a>
		<a href="login_and_registration.php" class="btn-btn2">LOGIN AND REGISTRATION</a>
            </div>
        </header>
        <script>
            function slideshow()
                {
                 var x = document.getElementById('check-class');
                 if(x.style.display === "none")
                 {
                    x.style.display="block";
                 }
                 else
                 {
                     x.style.display="none";
                 }
                }
        </script>
    </body>
</html>