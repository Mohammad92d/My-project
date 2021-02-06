<?php
session_start();
include_once("include/header.php");
include_once('../Admin/classes/class_customer.php');
$cust_information=new Customer();
$idme=$_SESSION['cust_id'];

$inf= $cust_information-> viewacustomerINFupdate($idme);

foreach($inf as $info);


?>

<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">My Account Page</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->

          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
           <?php 
                if(isset($_SESSION['cust_id']))
                { 
           ?>
          <div class="col-md-9 col-sm-7">
            <h1 class="text-center text-primary">My Account Page</h1>
            <div class="content-page ">
              <ul class="list-unstyled">
                <li><strong class="text-info">Name : </strong> <?=$info['cust_name']?></li>
                <li><strong class="text-info">Email : </strong><?=$info['cust_email']?></a></li>
                <li><strong class="text-info">Mobile : </strong><?=$info['cust_mobile']?></a></li>
                <li><strong class="text-info"> Address : </strong><?=$info['cust_address']?></a></li>
              </ul>
              <a href="updateinformation.php?id=<?=$idme?>"><button  class="btn btn-success btn-lg float-right" type="submit" name="submit">Update</button></a> 

            </div>
          </div>
          <?php }
          else {

            header("gdfgdg");
          }
          ?>

          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
            </div>
        </div>
    </div>
    <!-- END BRANDS -->

   
    <?php
include_once("include/footer.php");




?>
