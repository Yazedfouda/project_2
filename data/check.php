<?php 
session_start();
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $EMAIL=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $PASS=$_POST['password'];
        try{

            //تجهيز الاستعلام
            $stmt=$con->prepare("SELECT id , pass FROM data WHERE email= :email");
            $stmt->execute(['email' => $EMAIL]);
        $user=$stmt->fetch(PDO::FETCH_ASSOC);
        
        if($user && password_verify($PASS,$user['pass'])){
            
            $_SESSION['id']=$user['id'];
            $_SESSION['email']=$EMAIL;
            
            header("location: ../home.php");
            exit;
        }
        else{
            echo "<script>alert(' البريد الإلكتروني أو كلمة المرور غير صحيحة!'); window.location.href='../login.php';</script>";
        }
    }
    catch(PDOException $a){
        echo "Faild" . $a->getMessage();
    }
    }