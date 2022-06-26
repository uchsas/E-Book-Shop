<?php
session_start();
if(!empty($_SESSION["aid"])) 
{
header("Location: admin.php"); // Redirecting To Home Page
}


?>
<!DOCTYPE html>
<html>
<body>


<body background="cat.jpg">
<form align="center" action="../model/adminlcheck.php" method="post">
    <h2>Admin Login</h2>
	<input type="text" name="aid" placeholder="Enter your ID" >
    <input type="password" name="password" placeholder="Enter your password" >
    <input name="submit" type="submit" value="LOGIN">

<br><a href="registration.php">Register</a><br>
<a href='../index.php'>home</a>
<br>
<?//php echo $error; ?>
</form>
</body>
</html>