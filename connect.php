<?php

$dns="mysql:host=localhost;dbname=electronics_shop";
$user = "root";
$pass ="";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", //FOR ARABIC
);

try {
    $con =new PDO($dns,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDo::ERRMODE_EXCEPTION);

   
   header("Access-Control-Allow-Origin: *");  
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
    include "fun.php";
    
    //checkAuthenticate();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>