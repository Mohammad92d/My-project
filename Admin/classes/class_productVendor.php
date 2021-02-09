<?php
include_once('include/DBconnection.php');
class ProductVendor extends dbconnection
{
  public $name;
  public $description;
  public $price;
  public $image;
  public $image1;
  public $image2;
  public $cat_Id;
  public $qty;
  public $cat_name;
  public $vendor_id;


  public function createProductVendor()

  {

    $query = "insert into productVendor(pro_name,pro_desc,pro_price,pro_image,pro_image1,pro_image2,cat_id,qty,vendor_id)
   values('$this->name','$this->description','$this->price','$this->image','$this->image1','$this->image2','$this->cat_Id','$this->qty','$this->vendor_id') ";

    $this->performQuery($query);
  }
  public function readAll()
  {
    $query  = "SELECT * FROM productVendor";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }
  public function updateProduct()
  {

    $query = "update productVendor set   pro_name            = '$this->name',
                                         pro_desc            = '$this->description',
                                         pro_price           = '$this->price',
                                         pro_image           = '$this->image',
                                         pro_image1          = '$this->image1',
                                         pro_image2          = '$this->image2',
                                         qty                 = '$this->qty',
                                         cat_Id              = '$this->cat_Id'

            where prodV_id = {$_GET['id']}";
    $this->performQuery($query);
  }

  public function delete($id)
  {
    $query = "DELETE FROM productVendor WHERE prodV_id = $id";
    $this->performQuery($query);
  }

  public function readIdCat()
  {

    $query  = "select cat_id from category where cat_name ='$this->cat_name'";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }
  public function readAllCatogery()
  {
    $query  = "SELECT * FROM category";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function readById($id)
  {
    $query  = "SELECT * FROM productVendor WHERE prodV_id = $id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function readByIdProudct($id)
  {
    $query = "SELECT * FROM productVendor WHERE vendor_id = $id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }
  public function readByIdProudctToUpdate($id)
  {
    $query = "SELECT * FROM productVendor WHERE prodV_id = $id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function readByIdToFindCategoryName($id)
  {
    $query = "SELECT * FROM category WHERE cat_id = $id ";
  
      
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function readByIdToShowAllProductAtCatogery($id,$page=null)
  {
    $query = "SELECT * FROM productVendor WHERE cat_id = $id ";
      if($page){
        $offset = ($page - 1) * 4;
      $query .=" LIMIT 4 OFFSET $offset;";

    }
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function readByIdToFindVendorName($id)
  {
    $query = "SELECT * FROM vendor WHERE vendor_id = $id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function prodcutNew()
  { // select proudct between this condition
    $query = "SELECT * FROM productVendor WHERE prodV_id BETWEEN 20 AND 40";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function prodcutrandom()
  { // select proudct random
    $query = "SELECT * FROM productVendor ORDER BY RAND()
  LIMIT 5;";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }

  public function prodcutrandom2()
  { // select proudct random
    $query = "SELECT * FROM productVendor ORDER BY RAND()
  LIMIT 10;";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
  }
}
