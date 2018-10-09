<?php
session_start();
require_once("C:/wamp64/www/IP_ASB/db/dbcontroller.php");
$db_handle = new DBController();
$code=$_POST["code"];
$id=$_POST["id"];
$result = $db_handle->runQuery("Delete from {$_SESSION["cart"]} where code='$code' and id=$id ");
header("Location:http://localhost/IP_ASB/cart_list");

?>