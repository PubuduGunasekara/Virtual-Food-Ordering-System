<?php
session_start();
$username = '1';
$password = '1';

/*if(isset($_SESSION['logged_in']) && $_SESSION['loggged_in'] == true)
{
	header("location: Mainpage.html");
}*/

if(isset($_POST['login']) && isset($_POST['password'])){
	if($_POST['login'] == $username && $_POST['password'] == $password){
		$_SESSION['logged_in'] = true;
		header("location: Mainpage.php");
	}
	else{
		$_SESSION['logged_in'] = false;
		header("location: index.php");
	}
}
?>