<?php
 include('classes/class_vendor.php');
   $x  = new Vendor();
   $id = $_GET['id'];
   $x->deleteVendor($id);
header("location:Vendorlist.php");
?>