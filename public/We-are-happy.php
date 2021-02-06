<?php
include_once("include/header.php");
include_once('../Admin/classes/class_order.php');

	session_start();
    if (!$_SESSION['cust_id']){
        header("location:login.php");

}



?>


<?php
  $x=new order();
 $data= $x->idOrderToShoustomer();
  foreach($data as $result);
if (isset($result['order_id'])) {?>
<div class="container py-5 d-flex justify-content-center">
<div class="row editwidth">
<div  class="bread-crumb col-12 flex-w py-5">
<div class="d-flex justify-content-center alert alert-success editwidth" role="alert">
<strong style="color:blue; text-wight:bold;"> <?= "Thank you. We are happy to visit us,"?></strong> 
</br> </br> 
</br> 

 <?= "Your Order Reference Number Is :" . $result['order_id'];?>
</div>

<?php  }else{?>

        <div class='d-flex justify-content-center alert alert-success editwidth' role='alert'>
          No Order
        </div>
</div>
</div>
</div>

<?php
}
?>