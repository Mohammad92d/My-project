<?php
include_once('include/DBconnection.php');	
	class login extends dbconnection{
		public $email;
		public $password;

		public function VerifyLogin(){
			$query  = "SELECT * FROM vendor WHERE email = '$this->email' AND password = '$this->password' ";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
	}



?>