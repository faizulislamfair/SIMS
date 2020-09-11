<?php
session_start();

if(!isset($_SESSION['user_login'])){
     header('location: login.php');
}


?>

<a href="logout.php">Logout</a>