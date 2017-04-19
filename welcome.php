<?php
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])){
	echo "Welcome " . $_COOKIE['email'];
	echo "Click <a href='logout.php'>Here</a> To Logout";
}
else {
	session_start();
	echo "Welcome " . $_SESSION['email'];
}
?>