<?php
session_start();
 include_once("../Admin/classes/class_productVendor.php");
   $id=$_GET['id'];
   $x=new ProductVendor();

   $product_id=$x->readById($id);  // reqest to row to show data for this product
   foreach($product_id as $info);  // to show one field at product
   $name_prodId=$x->readByIdToFindCategoryName($info['cat_id']); // to find catogery name for this id product
   foreach($name_prodId as $Ncat); //to show one field at catogery
 
    
    

   if (isset($_POST['submit'])) {

    if($_POST['num_prodect']<$info['qty']) {
   
    $_SESSION['cart'][$id] = $_POST['num_prodect'];
    header("location:shop-shopping-cart.php");
}
else {$error="Quantity not available";}
}
  
include_once("include/header.php");

?>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href=""><?=$Ncat['cat_name'];?></a></li>
            <li class="active"><?=$info['pro_name'];?></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
            <?php foreach($categores as $category){
            ?>
              <li class="list-group-item clearfix"><a href="shop-product-list.php?id=<?=$category['cat_id']?>"><i class="fa fa-angle-right"></i>  <?=$category['cat_name'];?> </a></li>
<?php }?>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <?php
									if (isset($error)) {
										echo"
										<div  class='alert alert-danger col-md-6 ;' role='alert'>
										 	$error !
										</div>
										";
									}
								?>
         <form action="" method="post">
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="../Admin/images/<?=$info['pro_image']?>" alt="Cool green dress with red bell" class="img-responsive iimag1" data-BigImg src="../Admin/images/<?=$info['pro_image']?>" >
                  </div>
                  <div class="product-other-images">
                    <a id="img9" href="../Admin/images/<?=$info['pro_image'] ?>" class="fancybox-button " rel="photos-lib"><img id="img5" alt="Berry Lace Dress" src="../Admin/images/<?=$info['pro_image']?>"></a>
                    <a id="img9" href="../Admin/images/<?=$info['pro_image1']?>" class="fancybox-button " rel="photos-lib"><img id="img5" alt="Berry Lace Dress" src="../Admin/images/<?=$info['pro_image1']?>"></a>
                    <a id="img9" href="../Admin/images/<?=$info['pro_image2']?>" class="fancybox-button " rel="photos-lib"><img id="img5" alt="Berry Lace Dress" src="../Admin/images/<?=$info['pro_image2']?>"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?=$info['pro_name'];?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span><?=$info['pro_price'];?></strong>
                      <!-- <em>$<span>62.00</span></em> -->
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p><?=$info['pro_desc'];?>.</p>
                  </div>
                  <div class="description">
                  <?php $Nvendor=$x->readByIdToFindVendorName($info['vendor_id']); // to fine vendor name for this product
                      foreach($Nvendor as $name_v); // to show one field at vendor
                  ?>
                    <p><strong>Vendor By : </strong><?=$name_v['full_name'];?>.</p>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" name='num_prodect' type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Add to cart </button>
                  </div>
                
                  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                    <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                    <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                  </ul>
                </div>
                </form>
               

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
          </div>
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
                      <a href="#product-pop-up" onclick="setImage('../Admin/images/<?=$mosts['pro_image'];?>','<?=$mosts['pro_price'];?>','<?=$mosts['pro_name'];?>','<?=$mosts['pro_desc'];?>','shop-item.php?id=<?=$mosts['prodV_id']?>')" class="btn btn-default fancybox-fast-view">View</a>
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
              <h2>0092782114847</h2>
              <em>24/7 customer care available</em>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
    <!-- END STEPS -->
    <?php
    include("include/footer.php");
?>