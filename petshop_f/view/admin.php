<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{

header("Location: adminl.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMIN</title>
</head>
<body>
<body background="bird.jpg">
	<h1 align="center" style="background-color:Gray;">Welcome to the Admin page</h1><br>

	<a  style="background-color:white;" href="../control/logout.php">logout</a><br><br>
	<a  style="background-color:white;" href="adminp.php">Admin Profile</a>

</body>
</html>