<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {

if (empty($_POST['aid']) || empty($_POST['password'])) {
echo "id or Password is invalid";
}
else
{


$flag=0;
$json = file_get_contents('../control/admin.json');
$array = json_decode($json, true);
foreach($array AS $index=>$json) {
        if($json['aid']==$_POST["aid"]&&$json['password']==$_POST["password"]){
         
            $_SESSION["aid"] = $_POST['aid'];
        
         header("location: ../view/admin.php");
      
           //echo '<br><a href="../view/registration.php">Try Again</a><br>';
           //echo '<a href="../view/home.php">Home</a><br>';
           //echo '<a href="../view/login.php">Login</a>';
          $flag=1;
         break;
        }
    }
    if($flag==0){
      echo "wrong id or password";
    }
   }
 
}



?>
