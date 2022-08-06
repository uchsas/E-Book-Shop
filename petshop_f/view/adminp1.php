<?php
$servername="localhost";
$username="root";
$password="";
$dbname="petshop";
$conn=new mysqli($servername,$userid,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from admin";
	$result=$conn->query($q);
	
	$output='<table border="1" width=100%><tr><th>ID</th><th>Email</th></tr><th>number</th></tr><th>name</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["id"]}</td><td>{$row["email"]}</td></tr>"<tr><td>{$row["name"]}</td><td>{$row["email"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "O results";
	
	
}
$conn->close();
echo $output;
?>
