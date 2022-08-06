<?php
$adminid=$_POST['aid'];

$adminpassword=$_POST['apassword'];
$adminphonenumber=$_POST['aphone'];
$adminname=$_POST['aname'];



$conn = new mysqli('localhost','root','','admin');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(aid, apassword, aphone,aname) values (?, ?, ?, ?, ?, ?)");
    $stmt-> bind_param("sssssi", $adminname, $adminname, $adminpassword, $adminphonenumber);
    $stmt-> execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>