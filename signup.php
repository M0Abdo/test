<?php
include "connect.php";

$username=filterRequest("username");
$email =filterRequest("email");
$pass =filterRequest("pass");
$verficode =rand(1000,9999);


$stmt=$con->prepare("INSERT INTO users ( users_name, users_email, users_pass,users_code) VALUES (?,?,?,?)");
$stmt->execute(array($username,$email,$pass,$verficode));

$count=$stmt->rowCount();

if($count!=0){
    echo json_encode(array("status"=>"success"));
}else {
    echo json_encode(array("status"=>"fail"));
}
//SendEmail($email,"Verfiy Code Ecommerce",$verficode);
/*
when conect seriver 
*/
?>