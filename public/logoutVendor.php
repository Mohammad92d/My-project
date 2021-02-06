<?php
	session_start();
	if (isset($_SESSION['email_Vendor'])) 
	{
		unset($_SESSION['email_Vendor']);
		header("location:login.php");
	}else{
		header("location:../Admin/index-vendor.php");
	}
?>