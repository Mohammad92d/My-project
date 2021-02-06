<?php
 include_once('classes/class_productVendor.php');
   $x  = new ProductVendor();
   $id = $_GET['id'];
   $x->delete($id);
header("location:manegarProductVendor.php");
?>