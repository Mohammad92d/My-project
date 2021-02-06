<?php
 include('classes/class_admin.php');
   $x  = new Admin();
   $id = $_GET['id'];
   $x->delete($id);
header("location:manegarAdmin.php");
?>