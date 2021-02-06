<?php 
include_once('include/DBconnection.php');
		  

class Admin extends dbconnection{

	public $admin_id;
	public $fullname;
	public $email;
	public $password;
	public $image;
	


	public function create()
	{
		$query = "INSERT INTO admin(full_name,email,password,image)
				 VALUES('$this->fullname','$this->email','$this->password','$this->image')";
		$this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){ 
		$query = "UPDATE admin SET full_name           = '$this->fullname',
								   email               = '$this->email',
								   password            = '$this->password',
								   image               = '$this->image'
								   WHERE admin_id= $id";
		$this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$this->performQuery($query);
	}

}

?>
