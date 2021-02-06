<?php
include_once('include/DBconnection.php');	
	class loginCustomer extends dbconnection{
		public $email;
		public $password;

		public function VerifyLoginCustomer(){
			$query  = "SELECT * FROM customer WHERE cust_email = '$this->email' AND cust_password = '$this->password' ";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
	}



?>