<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once('include/DBconnection.php');



  class Category extends dbconnection {

   public $cat_name;
   public $cat_des;
   public $cat_image;

   public function createCategory()
   {
         $query="insert into category(cat_name,cat_des,cat_image)
                 values('$this->cat_name','$this->cat_des','$this->cat_image') ";
                 $this->performQuery($query);

   }

   public function ReadCategory()
   {
        $query  = "select * from category";
        $result = $this->performQuery($query);
        return $this->fetchAll($result);

   }
   public function viewCategoryINFupdate($id){

        $query  = "select * from category where cat_id= '$id' ";
        $result = $this->performQuery($query);
        $result = $this->performQuery($query);
        return $this->fetchAll($result);

}
   public function updatcategory($id){

    $query = "update category set cat_name    = '$this->cat_name',
                                  cat_des     = '$this->cat_des',
                                  cat_image   = '$this->cat_image'

    where cat_id = $id";

    $this->performQuery($query);
}
   public function deletecategory($id)
   {
       $query="delete from category where cat_id =$id";
       $this->performQuery($query);
   }


  }






?>