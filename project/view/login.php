 <?php
 include('../controller/logincontroller.php')
	   ?>  
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
	<body background="cat.jpg">
<h1 style="background-color:WHITE;text-align:center">Welcome To Pet Shop</h1>
	<div class="login-div">
	 <fieldset>
        <legend align="center"><h1>Login</h1></legend>
	   
	   <form action="" method="post">
	       <table align="center">
		        <tr>
				     <td><span><b>Username<b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
			    </tr>
				<tr>
				     <td><span><b>Password</b></span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass" placeholder="Password">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
				<td><input type="submit" name="login" value="Login"></td>
				</tr>
		      </table>
			  </form>
			  <center><a style="text-decoration:none" href="registration.php" target="_blank" >Not registred yet? Sign up</a></center>
			  </fieldset>
	</div>
	
    </body>
</html>	
