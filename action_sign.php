<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$query = "INSERT INTO users(username,email,password,number,gender)";
$query .= " VALUES ('$username','$email','$password','$number','$gender')";
if($db_handle->connectDB()->query($query) === TRUE)
{
    $sql = "CREATE TABLE IF NOT EXISTS `cart_$username` (
        `id` int(8) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `code` varchar(255) NOT NULL,
        `image` text NOT NULL,
        `price` double(10,2) NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `product_code` (`code`)
      )";
    $db_handle->connectDB()->query($sql);
    header("Location:http://localhost/IP_ASB/login");
}else{
    echo "Not added";
}
?>