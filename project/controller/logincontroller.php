<?php 

		$nameErr = $passworderr = $emailErr = $genderErr = "" ;
    	$Password = $Username =  $Email = $gender "";

    	
	    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Username"])) {
    $nameErr = "Name is required";
  } else {
    $Username = test_input($_POST["Username"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    		

			if(empty($_POST["password"]))
    		{
    		$passworderr = "*Insert password";
    		} 
    		else
    		{
    			$password = ($_POST["password"]);
    			if(strlen($password)<8) 
    			{
           		 $passworderr = "Your Password Must Contain At Least 8 Characters!";
       			}
       			elseif (!preg_match("/[@,#,$,%]/",$password)) 
       			{
       				$passworderr = "*Minimum One Special Character";
       				
       			}
    		}



		}


	 ?>
