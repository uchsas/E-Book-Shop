<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{

header("Location: view/login.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMIN</title>
</head>
<body>
	<h1>Admin page</h1><br><br>
<h1>logged in</h1>
	<a href="../control/logout.php">logout</a>

</body>
</html>