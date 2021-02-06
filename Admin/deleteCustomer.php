<?php
include('classes/class_customer.php');
$x  = new Customer();
$id = $_GET['id'];
$x->deleteCustomer($id);
header("location:manegarCustomer.php");

?>