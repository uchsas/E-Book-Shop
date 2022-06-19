<html>
<head>
</head>
<body>
<body background="pet.jpg">
<html>
    <head>
	<title>Registration</title>
	
	     <style>
	            .regi-div
				{
					
				border:1px solid black;
				margin:auto;
				width:20%;
				margin-top:17%;
				
				}
				
 		 </style>
	</head>
	<body>
	<div class="regi-div">
	 <fieldset>
        <legend align="center"><h1>Registration</h1></legend>
	   
  <center>
  <h3>Register Here</h3>
  <form action="" method="post">
  	       <table align="center">

      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user" placeholder="Enter name Here"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="user_pass" placeholder="Enter Password Here"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="mail" placeholder="Enter Email Here"></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
          <input type="radio" name="gender"> Male
          <input type="radio" name="gender"> Female
          <input type="radio" name="gender"> Others
          </td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td>
            <select name="country_code">
              <option value="+254">+088</option>
              <option value="+255">+255</option>
              
            </select>
            <input type="phone" name="mob_digits" placeholder="01******">
          </td>
        </tr>
        <tr>
           <td><input type="submit" name="submit" value="submit"></td>
           <td><p>Already a user? <a href="login.php">Login Here</a></p></td>
        </tr>
      </table>
  </form>
  
  </center>
</body>
</html>