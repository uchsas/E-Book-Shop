  <?php
 include('../controller/logincontroller.php')
	   ?> 

<html>
<head>
<style>

</style>
	<title>Login</title>
	
</head>
<body>
<body background="cat.jpg">
<h1 style="background-color:WHITE;text-align:center">Welcome To Pet Shop</h1>


<html>
    <head>
	<title>Log in</title>
	
	     <style>
	            .login-div
				{
					background-color: yellow;
				border:1px solid black;
				margin:auto;
				width:20%;
				margin-top:17%;
				
				}
				
 		 </style>
	</head>
	<body>
	<div class="login-div">
	 <fieldset>
        <legend align="center"><h1>Login</h1></legend>
	   
	   <form action="" method="post">
	       <table align="center">
		        <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user" placeholder="Enter name Here"></td>
				<span class="error"><?php echo $Usernameerr;?></span>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="user_pass" placeholder="Enter Password Here"></td>
        				<span class="error"><?php echo $passworderr;?></span>

		</tr>
        
        
      </table>
				<tr>
				<td><input type="submit" name="login" value="Login"><a href="homepage.php"></td>
				</tr>
		      </table>
			  </form>
			  <center><a style="text-decoration:none" href="registration.php" target="_blank" >Not registred yet? Sign up</a></center>
			  </fieldset>
	</div>
	
    </body>
</html>	
