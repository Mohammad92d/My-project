<?php
 include('classes/class_category.php');

   $x  = new Category();
   $id = $_GET['id'];
   $x->deletecategory($id);
header("location:manegarCatogery.php");
?>