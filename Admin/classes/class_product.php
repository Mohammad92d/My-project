<?php
 include_once('include/DBconnection.php'); 
  class Product extends dbconnection
  { 
      public $name;
      public $description;
      public $price;
      public $image;
      public $cat_Id;
      public $qty;
      public $cat_name;
      

  public function createProduct()

   {
              
   $query = "insert into products(pro_name,pro_desc,pro_price,pro_image,cat_id,qty)
   values('$this->name','$this->description','$this->price','$this->image','$this->cat_Id','$this->qty') ";

     $this->performQuery($query);

   }
 public function updateProduct(){

    $query = "update products set   pro_name            = '$this->name',
                                    pro_desc            = '$this->description',
                                    pro_price           = '$this->price',
                                    pro_image           = '$this->image',
                                    qty                 = '$this->qty'

            where pro_id = {$_GET['id']}";
           $this->performQuery($query);
    }
    
  public function delete($id){
        $query = "DELETE FROM products WHERE pro_id = $id";
        $this->performQuery($query);
    }
  public function ReadTwoTable()
     {
    $query = "select products.pro_id,products.pro_name,products.pro_desc,
    products.pro_price,products.pro_image,products.qty,category.cat_id,
    category.cat_name  from products inner join category ON products.cat_id=category.cat_id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);

    }
  public function readIdCat(){

    $query  = "select cat_id from category where cat_name ='$this->cat_name'";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
     }
  public function readAllCatogery(){
    $query  = "SELECT * FROM category";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
     }

  public function readAll(){
    $query  = "SELECT * FROM products";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);
     }
  public function readById($id){
    $query  = "SELECT * FROM products WHERE pro_id = $id";
    $result = $this->performQuery($query);
    return $this->fetchAll($result);	
     }


}

?>

  