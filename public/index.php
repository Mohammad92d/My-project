<?php

 include_once("include/header.php");
 include_once("../Admin/classes/class_productVendor.php");
 include_once("../Admin/classes/class_slider.php");
 $slider=new Slider();
 $imageSlider=   $slider->showSlider();
 foreach($imageSlider as $imageSliders);


 $ProductVendor=new ProductVendor();
 $products = $ProductVendor->readAll();

?>

 <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            Shop without  <br/><span class="color-red-v2">limits</span><br/> for you
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Everything you want <br/>
                            We have it</p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Unlimted
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                               Options
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Fully flexibility
                            </p>
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                            All seasons &amp; Alltimes
                            </span>
                            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                                eCommerce 
                            </p>
                            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                                Is Ready For You
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-seven">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                    The most <br/>
                                    wanted bijouterie
                                </h2>
                                <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
<div class="main">
<div class="container">
  <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
  <div class="row margin-bottom-40">
    <!-- BEGIN SALE PRODUCT -->
    <div class="col-md-12 sale-product">
      <h2>SALE PRODUCT</h2>
      <div class="owl-carousel owl-carousel5">
      <?php foreach($products as $product){

        ?>
        <div >
          <div class="product-item" >
            <div class="pi-img-wrapper">
              <img  src="../Admin/images/<?=$product['pro_image']?>" class="img-responsive iimag " alt="<?=$product['pro_name']?>">
              <div>
                <a href="../Admin/images/<?=$product['pro_image']?>" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" onclick="setImage('../Admin/images/<?=$product['pro_image'];?>','<?=$product['pro_price'];?>','<?=$product['pro_name'];?>','<?=$product['pro_desc'];?>','shop-item.php?id=<?=$product['prodV_id']?>')" class="btn btn-default fancybox-fast-view">View</a>
              </div>
            </div>
            <??>
            <h3><a href="shop-item.html"><?=$product['pro_name']?></a></h3>
            <div class="pi-price">$<?=$product['pro_price']?></div>
            <a href="shop-item.php?id=<?=$product['prodV_id']?>" class="btn btn-default add2cart">Add to cart</a>
            <div class="sticker sticker-sale"></div>
          </div>
        </div>
      <?php } ?>
      
      </div>
    </div>
    <!-- END SALE PRODUCT -->
  </div>
  <!-- END SALE PRODUCT & NEW ARRIVALS -->
  
  <!-- BEGIN SIDEBAR & CONTENT -->
  <div class="row margin-bottom-40 ">
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
          <div class="col-md-9 col-sm-8">
            <h2>New products</h2>
            <div class="owl-carousel owl-carousel3">
            <?php  foreach($itemm as $row){ ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="../Admin/images/<?=$row['pro_image'];?>" class="img-responsive iimag" alt="Berry Lace Dress">
                    <div>
                      <a href="../Admin/images/<?=$row['pro_image'];?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" onclick="setImage('../Admin/images/<?=$row['pro_image'];?>','<?=$row['pro_price'];?>','<?=$row['pro_name'];?>','<?=$row['pro_desc'];?>','shop-item.php?id=<?=$row['prodV_id']?>')" data-image="<?=$row['pro_image'];?>" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?=$row['pro_name'];?></a></h3>
                  <div class="pi-price">$<?=$row['pro_price'];?></div>
                  <a href="shop-item.php?id=<?=$row['prodV_id']?>" class="btn btn-default add2cart">Add to cart</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
       <?php }?>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

   <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
       
          <div class="col-md-6 two-items-bottom-items">
            <h2>More Product</h2>
            <div class="owl-carousel owl-carousel2">
            <?php 
          //to Show poduct random.
          $random= $ProductVendor->prodcutrandom();
           foreach($random as $randoms)
        
           {
        ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="../Admin/images/<?=$randoms['pro_image'];?>" class="img-responsive  iimag" alt="Berry Lace Dress">
                    <div>
                      <a href="../Admin/images/<?=$randoms['pro_image'];?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" onclick="setImage('../Admin/images/<?=$randoms['pro_image'];?>','<?=$randoms['pro_price'];?>','<?=$randoms['pro_name'];?>','<?=$randoms['pro_desc'];?>','shop-item.php?id=<?=$randoms['prodV_id']?>')" class="btn btn-default fancybox-fast-view product-pop-up-btn">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?=$randoms['pro_name']?></a></h3>
                  <div class="pi-price">$<?=$randoms['pro_price']?></div>
                  <a href="shop-item.php?id=<?=$randoms['prodV_id']?>" class="btn btn-default add2cart">Add to cart</a>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        
          <!-- END TWO PRODUCTS -->
          <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img id="im77" src="../Admin/images/<?=$imageSliders['image2_slider']?>" class="img-responsive " alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="assets/pages/img/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="assets/pages/img/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->
        </div>        
        <!-- END TWO PRODUCTS & PROMO -->
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
include_once("include/footer.php");




?>
<script>


</script>