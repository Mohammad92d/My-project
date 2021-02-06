<?php
include_once('include/DBconnection.php');
class Vendor extends dbconnection{

    public $name;
    public $email;
    public $password;
    public $company_name;
    public $mobile;
    public $address;
    public $image;
    public $status;

    
    
     public function createVendor()
     
     {
         $query = "INSERT INTO vendor(full_name,email,password,company_name,mobile,address,image,status)
                   values('$this->name','$this->email','$this->password','$this->company_name','$this->mobile','$this->address','$this->image','$this->status') ";
                   $this->performQuery($query);
     }
     public function updateVendor($id){ 
		$query = "UPDATE vendor SET full_name           = '$this->name',
								    email               = '$this->email',
								    password            = '$this->password',
                                    company_name        = '$this->company_name',
                                    mobile              = '$this->mobile',
                                    address             = '$this->address',
								    image               = '$this->image'
								    WHERE vendor_id= $id";
		$this->performQuery($query);
	}
     
     public function showVendor()
     {
        $query  ="select * from vendor";
        $result = $this->performQuery($query);
        return $this->fetchAll($result);
        
     }
     public function viewaVendorINFupdate($id){

        $query  = "select * from vendor where vendor_id= '$id' ";
        $result = $this->performQuery($query);
        $result = $this->performQuery($query);
        return $this->fetchAll($result);

    }
    public function changestatus($id){

            $query = "UPDATE vendor SET status  ='$this->status'
                                       WHERE vendor_id= $id";
            $this->performQuery($query);
        }

 
    public function showVendorStat()
    {
       $query  ="select * from vendor where status ='0'";
       $result = $this->performQuery($query);
       return $this->fetchAll($result);
       
    }
    public function deleteVendor($id)
    {  
        $query="delete from vendor where vendor_id=$id";
        $this->performQuery($query);

    }

    public function readById($id){
		$query  = "SELECT * FROM vendor WHERE vendor_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
}
 
?>