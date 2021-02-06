<?php
 include_once('include/DBconnection.php');
class Contact extends dbconnection{
  
    public $name;
	public $email;
	public $mobile;
	public $massege;
	


	public function create()
	{
		$query = "INSERT INTO cotactUs(name,email,mobile,massege)
				 VALUES('$this->fullname','$this->email','$this->mobile','$this->massege')";
		$this->performQuery($query);
	}
}
?>