<?php
session_start();

$password = 'nsbmfood';

/*if(isset($_SESSION['logged_in']) && $_SESSION['loggged_in'] == true)
{
	header("location: Mainpage.html");
}*/

if( isset($_POST['password'])){
	if( $_POST['password'] == $password){
		$_SESSION['logged_in'] = true;
		header("location: index2.php");
	}
	else{
		$_SESSION['logged_in'] = false;
		echo '<script type="text/javascript">alert("code not matched. Please try again");window.location.assign("code.php");</script>';
	}
}
?>