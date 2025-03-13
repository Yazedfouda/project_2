<?php 
    session_start();
    include ("config.php");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $NAME=$_POST["username"];
    $EMAIL=$_POST["email"];
    $PASS=password_hash($_POST["password"],PASSWORD_DEFAULT);
        if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){
            die("البريد غير صالح");
        }
        try{

            $stmt=$con->prepare("INSERT INTO data (name , email , pass) VALUES (:name , :email , :pass)");
            
            $stmt->bindParam(":name" , $NAME ,PDO::PARAM_STR);
            $stmt->bindParam(":email" , $EMAIL ,PDO::PARAM_STR);
            $stmt->bindParam(":pass" , $PASS ,PDO::PARAM_STR);
            
            if($stmt->execute()){
                header("location: ../home.php");
            }
            else{
                echo "Error: لم يتم تنفيذ الاستعلام.";
            }
        }
        catch(PDOException $e){
            echo "خطاء في التسجيل" .$e->getMessage();
        }
        
    }