<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$email = $_POST['email'];
$password = $_POST['password'];
$result = $db_handle->runQuery("SELECT * FROM `users` where email='$email'");
if (!empty($result)) {
        foreach($result as $key=>$value){
            $password1 = $result[$key]["password"];
            $number = $result[$key]["number"];
            $username = $result[$key]["username"];
           
        }
}else{
    ?><h1>Wrong Email</h1><?php
    exit();
}
if($password1!=$password){
    ?><h1>Wrong Password</h1><?php 
}
else{
    $_SESSION['loggedin'] = true;
    $_SESSION["username"] = $username;
    $_SESSION["cart"] = "cart_$username";
    $_SESSION["number"] = $number;
    $_SESSION["email"] = $email;
    header("Location:http://localhost/IP_ASB/home");
}
?>