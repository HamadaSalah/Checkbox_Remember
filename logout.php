<?php
	session_start();
	session_destroy();
	$email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
	setcookie('email', $email, time()-1);
	setcookie('password', $password, time()-1);
	header("location: login.php");
?>