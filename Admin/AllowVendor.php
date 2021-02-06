<?php
 include('classes/class_vendor.php');
  $x=new Vendor();
  $id=$_GET['id'];
  $x->status=1;
  $x->changestatus($id);
  header("location:Waitinglist.php");

  

 ?>