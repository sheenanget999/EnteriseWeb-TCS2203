<?php
session_start();
unset($_SESSION['auth_user_id']);
unset($_SESSION['authuser_name']);
$_SESSION['status'] = "Logged out Successfully";
header("Location: Home.php"); 
exit();
?>