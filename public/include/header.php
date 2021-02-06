<?php
  session_start();
  include_once("../../Admin/classes/class_search.php");

 
    ?>
     
<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

  <style>
  .iimag{

height: 245px;      }

.iimag1{
  height: 500px; 

}
#img4{
  width: 250px;
  height: 500px; 

}
#img9{
  width: 100%;
  height: 100% ; 
}

#img5{
  height: 77px;
}
.iimag3{
  width: 400px;
  height: 300px; 

}
#im77{
  width: 100% !important;
  height: 10% !important; 

}

  
  </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>00962782114847</span></li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <a href="javascript:void(0);">French</a>
                              <a href="javascript:void(0);">Germany</a>
                              <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.php">My Account</a></li>
                        <li><a href="shop-shopping-cart.php">Checkout</a></li>
                        <?php if(empty($_SESSION['email_customer'])){?>
                        <li><a href="login.php">Log In</a></li>
                        <?php }else{?>
                        <li><a href="logout.php">Logout</a></li>
                          <?php } ?>

                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index.php"><img src="assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
     <?php        $NumberItemsInCart = 0;

if(isset($_SESSION['cart'])){
             
         foreach ($_SESSION['cart'] as $k => $v) {
           $NumberItemsInCart++;
         }}
         ?>
  
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count"><?=$NumberItemsInCart?></a>
            <a href="javascript:void(0);" class="top-cart-info-value">$<?=$_SESSION['total']?></a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
          <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
          
          <?php
          include_once('../Admin/classes/class_productVendor.php');
          $x=new ProductVendor();

           if(isset($_SESSION['cart'])){
                        
                    foreach ($_SESSION['cart'] as $k => $v) {
                    
                   
                         $items=$x->readById($k);  // to read product when id = id come in session
                        foreach($items as $data){ // to show prdouct when id = id come in session
                        // }}} 
        
                     
        ?>
           
                <li>
                  <a href="#shop-item.php"><img src="../Admin/images/<?=$data['pro_image']?>" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x <?=$v?></span>
                  <strong><a href="#shop-item.php"><?=$data['pro_name']?></a></strong>
                  <em><?=$data['pro_price']?></em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
             
             
          
            <?php  }}}?>
            <div class="text-right">
                <a href="shop-shopping-cart.php" class="btn btn-primary">View Cart</a>
              </div>
            </ul>
            </div>
          </div>            
        </div>
       
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
          <?php 
          
             include_once('../Admin/classes/class_category.php');
             
               $category=new Category();
               $categores= $category->ReadCategory();
            
               foreach($categores as $category){
                 
          
          ?>
            <li class="dropdown">
              <a class="dropdown-toggle"  href="shop-product-list.php?id=<?=$category['cat_id'];?> 
">
                <?=$category['cat_name'];?> 
                
              </a>
              <?php } ?>
              <li class="dropdown dropdown100 nav-catalogue">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                New
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
              <?php
                         
                            $itemm= $x->prodcutNew();
                            foreach($itemm as $row){

              ?>
            
            
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="product-item">
                          <div class="pi-img-wrapper">
                            <a href="shop-item.html"><img  src="../Admin/images/<?=$row['pro_image'];?>" class="img-responsive iimag" alt="Berry Lace Dress"></a>
                          </div>
                          <h3><a href="shop-item.html"><?= $row['pro_name'];?></a></h3>
                          <div class="pi-price">$<?= $row['pro_price'];?></div>
                          <a href="shop-item.php?id=<?= $row['prodV_id'];?>" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </li>
              </ul>

            </li>
          

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" name="search" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" name="submit" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION --> 
      </div>
    </div>
    <!-- Header END -->
