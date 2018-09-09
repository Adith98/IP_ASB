<?php
Session_start();
Session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);
header("Location:http://localhost/IP_ASB/home");
?>