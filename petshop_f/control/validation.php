<?php
 include "../model/db.php";
$flag=0;
$json = file_get_contents('admin.json');
$array = json_decode($json, true);
if(!empty($array)){
foreach($array AS $index=>$json) {
        if($json['aid']==$_POST["aid"]){
        	$flag=1;
        	echo "Id exists";

        	break;
        }
    }}
if(empty($_POST["aid"])||empty($_POST["name"])||empty($_POST["password"])){
$flag=1;
echo "<br><span style='color:red;'>empty field not acceptable";	
}
if (preg_match('[@_!#$%^&*()<>?/|}{]', $_POST["aid"])!=0) {
$flag=1;
echo "<br><span style='color:red;'>Give proper id";

}
if (!ctype_alpha($_POST["name"])) {
$flag=1;
echo "<br><span style='color:red;'>Give proper name";

}
if (strlen($_POST["phone"])<11) {
$flag=1;
echo "<br><span style='color:red;'> Phone Number length should be more than 11";

}
if (strlen($_POST["password"])<4) {
$flag=1;
echo "<br>Password length should be more than 4";

}
if($flag==1){
	        echo '<br><a href="../view/registration.php">Try Again</a><br>';
	        echo '<a href="../view/home.php">Home</a><br>';
	        echo '<a href="../view/login.php">Login</a>';
}
if($flag==0){

	   $formdata = array(
	      'aid'=> $_POST["aid"],
	      'name'=> $_POST["name"],
	      'password'=>$_POST["password"],
	      'approve'=>1,
	   );
	  
       $existingdata = file_get_contents('admin.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata);	   
	   //write json data into data.json file
	   if(file_put_contents('admin.json', $jsondata)) {
	        echo "Account created <br>";
	        echo '<a href="../view/home.php">Home</a><br>';
	        echo '<a href="../view/login.php">Login</a>';
			//echo json_encode($formdata);
	    }
	   else {
	        echo "no data saved";
	   }
	}

?>
