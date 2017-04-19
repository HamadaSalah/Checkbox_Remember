<?php
	$myemail="HMS@gmail.com";
	$mypassword="123321";

	if(isset($_POST['login'])) {
		$email    = $_POST['mail'];
		$password = $_POST['pass'];
		#$check    = $_POST['check'];
		if($email==$myemail && $password==$mypassword) {
			if (isset($_POST['check'])) {
				setcookie('email', $email, time()+60*60*24);
				setcookie('password', $password, time()+60*60*24);
			}
			session_start();
			$_SESSION['email'] = $email;
			header('location: welcome.php');
		}
		else {
			echo 'Email Or Password Is Invalid <br/> Please Click Here To <a href="login.php">Try Again</a>';
		}
	}
	else {
		header("location: login.php");
	}
?>