<?php

include 'conect.php';

$myemail =filterRequest("email");
$Mycode =filterRequest("code");

$stm = $con->prepare("SELECT * FROM `users` WHERE `users_email` = '$myemail' AND `users_code` = '$Mycode'");
$stm->execute();
$count =$stm->rowCount();
if($count!=0){
    $data =array("users_approve"=>1);
    updateData('users',$data,"users_email= '$myemail'");
}else {
    echo json_encode(array("status"=>"fail"));
}
?>