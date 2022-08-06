<?php
session_start();
if(!empty($_SESSION["aid"])) 
{
header("Location: admin.php"); // Redirecting To Home Page
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="login.css">
</head>
<body>
<form align="center" action="../model/adminlcheck.php" method="post">

  <div class="container">
			<div class="header">
				<h3>Login</h3>
			</div>
			<form class="form" id="form" method="post" action="next.php">
				<div class="form-control" id="form-control">
					<label>Username:</label>
					<input type="text" id="uname" name="uname" placeholder="User name">
					
					<small>Error message</small>
				</div>
				<br>
				<div class="form-control1" id="form-control1">
					<label>Password:</label>
					<input type="password" id="pass" name="pass" placeholder="Password">
					
					<small>Error message</small>
				</div>
				
				<button type="submit">Login</button>
			</form>
		</div>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>