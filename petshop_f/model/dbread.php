<?php 
include "dbconnect.php";
 function login($username,$password){
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM user WHERE username = ? and password = ? ");
    $sql->bind_param("ss",$username,$password);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;

}
function searchUser($username){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `user` WHERE username = ?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

function uApartmentInfo($id){
	$conn = connect();
    $sql = $conn->prepare("SELECT * FROM apartment_details where id = ?");
    $sql-> bind_param("s",$id);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
    $sql->close();
     $conn->close();
}
?>