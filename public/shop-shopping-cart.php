<?php
session_start();
include_once('../Admin/classes/class_order.php');
include_once('../Admin/classes/class_productVendor.php');

 $x=new ProductVendor();
 $m=new order();
if (isset($_SESSION['cart'])) {

if(isset($_POST['submit'])){
   if(isset($_SESSION['email_customer'])){
    $m->date 		  = date('Y-m-d H:i:s');
    $m->cust_id  	= $_SESSION['cust_id'];
    $lastID       = $m->create();
  /////////////////////
  foreach ($_SESSION['cart'] as $k => $v){
    $priceOneItem=$x->readById($k);
    foreach($priceOneItem as $priceOneItems);
    $m->order_id  = $lastID;
    $m->pro_id    = $k;
    $m->quantity  = $v;
    $m->total     = $priceOneItems['pro_price']*$v;
    $m->createOrderDetails();
  }
    unset($_SESSION['cart']);
    unset($_SESSION['total']);
    header("location: We-are-happy.php");
}
else {header("location:login.php");}
}
}
if(isset($_POST['submit1'])){
  header("location:index.php");
}
include_once("include/header.php");
?>

<form method="post" action="">
    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Shopping cart</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>
                   <th class="goods-page-image">Name</th>
                    <th class="goods-page-image">Image</th>
                    <th class="goods-page-description">Description</th>
                    <th class="goods-page-quantity">Quantity</th>
                    <th class="goods-page-price">Unit price</th>
                    <th class="goods-page-total" colspan="2">Total</th>
                  </tr>
                  <tr>
                  <?php
                    $total = 0;
                    if(isset($_SESSION['cart'])){
                        
                    foreach ($_SESSION['cart'] as $k => $v) {
                        
                         $items=$x->readById($k);  // to read product when id = id come in session
                        foreach($items as $data){  // to show prdouct when id = id come in session
                       
                    ?>
                     <td class="goods-page-name">
                      <!-- <h3><a href="javascript:;">Cool green dress with red bell</a></h3> -->
                      <strong><?=$data['pro_name'];?></strong> 
                      <!-- <em>More info is here</em> -->
                    </td>
                    <td class="goods-page-image">
                      <a href="javascript:;">
                          <img src="../Admin/images/<?=$data['pro_image']?>" alt="Berry Lace Dress"></a>
                    </td>
                   
                    <td class="goods-page-description">
                      <!-- <h3><a href="javascript:;">Cool green dress with red bell</a></h3> -->
                      <strong><?=$data['pro_desc'];?></strong> 
                      <!-- <em>More info is here</em> -->
                    </td>
                  
                    <td class="goods-page-quantity">
                      <div class="product-quantity">
                          <label><?=$v?></label>
                      </div>
                    </td>
                    <td class="goods-page-price">
                      <strong><span>$</span><?=$data['pro_price']?></strong>
                    </td>
                    <td class="goods-page-total">
                      <strong><span>$</span><?= $subtotal =$data['pro_price'] * $v ?></strong>
                    </td>
                    <td class="del-goods-col">
                      <a class="del-goods" href="deleteitems-in-cart.php?id=<?=$k?>">&nbsp;</a>
                    </td>
                  </tr>
                  <?php $_SESSION['total']= $total=$subtotal+$total; }} }?>

                </table>

                </div>

                <div class="shopping-total">
                  <ul>
                  
                    <li class="shopping-total-price">
                      <em>Total</em>
                      <strong class="price"><span>$</span><?= $_SESSION['total'];?></strong>
                    </li>
                  </ul>
                </div>

              </div>
              <button class="btn btn-default" name="submit1" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button>
              <button class="btn btn-primary" name="submit"  type="submit">Checkout <i class="fa fa-check"></i></button>
            </div>
          </div>
          </form>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Most popular products</h2>
            <div class="owl-carousel owl-carousel4">
            <?php 
              $most=   $x->prodcutrandom2();
              foreach($most as $mosts)
              {
        ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="../Admin/images/<?=$mosts['pro_image']?>" class="img-responsive iimag" alt="Berry Lace Dress">
                    <div>
                      <a href="../Admin/images/<?=$mosts['pro_image']?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?=$mosts['pro_name']?></a></h3>
                  <div class="pi-price">$<?=$mosts['pro_price']?></div>
                  <a href="shop-item.php?id=<?=$mosts['prodV_id']?>" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
       
    
              <?php }?>
     
      
      
        
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>

    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-truck"></i>
            <div>
              <h2>Free shipping</h2>
              <em>Express delivery withing 3 days</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-gift"></i>
            <div>
              <h2>Daily Gifts</h2>
              <em>3 Gifts daily for lucky customers</em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="fa fa-phone"></i>
            <div>
              <h2>477 505 8877</h2>
              <em>24/7 customer care available</em>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

    <?php
    include("include/footer.php");
?>