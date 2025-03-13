<?php 
$dsn="mysql:host=localhost;dbname=login";
$user="root";
$pass="";

try{

    $con=new PDO($dsn,$user,$pass); //conect
    $con->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $a){

    echo"Faild" . $a->getMessage();
}