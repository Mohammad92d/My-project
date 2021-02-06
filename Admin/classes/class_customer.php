<?php
 include_once('include/DBconnection.php');
class Customer extends dbconnection{

    public $name;
    public $email;
    public $password;
    public $mobile;
    public $address;
    
    
     public function createCustomer()
     
     {
         $query = "INSERT INTO customer(cust_name,cust_email,cust_password,cust_mobile,cust_address)
                   values('$this->name','$this->email','$this->password','$this->mobile','$this->address') ";
                $this->performQuery($query);
     }

     
     public function showcustomer()
     {
        $query  ="select * from customer";
        $result = $this->performQuery($query);
        return $this->fetchAll($result);
        
     }
     public function viewacustomerINFupdate($id){

        $query  = "select * from customer where cust_id= '$id' ";
        $result = $this->performQuery($query);
        $result = $this->performQuery($query);
        return $this->fetchAll($result);

    }
    public function updatecustomer($id)
    {
         $query="update customer set cust_name     ='$this->name',
                                     cust_email    ='$this->email',
                                     cust_password ='$this->password',
                                     cust_mobile   ='$this->mobile',
                                     cust_address  ='$this->address'
          where cust_id=$id";

          $this->performQuery($query);
    }

    public function deleteCustomer($id)
    {  
        $query="delete from customer where cust_id=$id";
        $this->performQuery($query);

    }
}
 
?>