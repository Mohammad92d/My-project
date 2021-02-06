<?php
	session_start();
	if (isset($_SESSION['email_customer'])) 
	{
		unset($_SESSION['email_customer']);
		header("location:login.php");
	}else{
		header("location:index.php");
	}
?>