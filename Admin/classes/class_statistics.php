<?php
 include_once('include/DBconnection.php'); 
  class statistic extends dbconnection
  { 
      public function numberUser(){

        $query = "SELECT * FROM customer";
        $num= $this->performQuery($query);
        return mysqli_num_rows($num);

      }

      public function numberVendor(){

        $query = "SELECT * FROM vendor";
        $num= $this->performQuery($query);
        return mysqli_num_rows($num);

      }

      public function VendorInWatingList(){

        $query = "SELECT * FROM vendor where status =0";
        $num= $this->performQuery($query);
        return mysqli_num_rows($num);

      }

      public function ProfileAdmin($id){

        $query  = "SELECT * FROM admin where admin_id = $id";
        $result =  $this->performQuery($query);
        return $this->fetchAll($result);

      }

  }

    ?>