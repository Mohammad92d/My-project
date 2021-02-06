<?php
 include('classes/class_product.php');
   $x  = new Product();
   $id = $_GET['id'];
   $x->delete($id);
header("location:manegarProduct.php");
?>