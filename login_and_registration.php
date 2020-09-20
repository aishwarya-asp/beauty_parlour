<html>
<head>
 	<title>makeover | Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="login_registration.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
  	<div class="col-md-6">
		<h2>Login here</h2>
 			<form class="login-left" action="validation.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" placeholder="Username" name="User" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" placeholder="Password" name="Password" class="form-control" required>
				</div>
				<button type="Submit" class="btn btn-primary">Login</button>
	
			</form>
	</div>
	<div class="col-md-6">
		<h2>Register here</h2>
 			<form class="login-right"action="registration.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" placeholder="Username" name="User" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" placeholder="Password" name="Password" class="form-control" required>
				</div>
				<button type="Submit" class="btn btn-primary">Register</button>
	
			</form>
	</div>
	</div>
	</div>
</body>
</html>