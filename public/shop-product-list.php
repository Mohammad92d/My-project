<?php

include_once("include/header.php");
include_once('../Admin/classes/class_productVendor.php');

?>


    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
          <?php 
                     include_once('../Admin/classes/class_productVendor.php');
                     $proCat =new ProductVendor();
                     $id=$_GET['id'];

                     $showCatoginfo=$proCat->readByIdToFindCategoryName($id);
                     foreach($showCatoginfo as $more);
          
          ?>
        <h1><span><?=$more['cat_name']?></span> CATEGORY</h1>
        <em>Over 4000 Items are available here</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active"><?=$more['cat_name']?> category</li>
        </ul>
    
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
              <!-- PRODUCT ITEM START -->
              
              <?php 
                  include_once('../Admin/classes/class_productVendor.php');
                  $proCat =new ProductVendor();
                  $id=$_GET['id'];
                  $page=!empty($_GET['page'])?$_GET['page']:1;

                  $showCatog=$proCat->readByIdToShowAllProductAtCatogery($id,$page);
                  $count=(int)count($proCat->readByIdToShowAllProductAtCatogery($id))/4;

                  foreach($showCatog as $showCatogs){
                
              
              ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="../Admin/images/<?=$showCatogs['pro_image']?>" class="img-responsive iimag3" alt="Berry Lace Dress">
                    <div>
                      <a href="../Admin/images/<?=$showCatogs['pro_image']?>" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="#product-pop-up" onclick="setImage('../Admin/images/<?=$showCatogs['pro_image'];?>','<?=$showCatogs['pro_price'];?>','<?=$showCatogs['pro_name'];?>','<?=$showCatogs['pro_desc'];?>','shop-item.php?id=<?=$showCatogs['prodV_id']?>')" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.php"><?=$showCatogs['pro_name']?></a></h3>
                  <div class="pi-price">$<?=$showCatogs['pro_price']?></div>
                  <a href="shop-item.php?id=<?=$showCatogs['prodV_id']?>" class="btn btn-default add2cart">Add to cart</a>
                </div>
                </div>
                <?php }?>
              
              <!-- PRODUCT ITEM END -->
             
            </div>
            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <ul class="pagination pull-right">
                  <li><a class="<?=($page == 1)?"disable-links":''?>"  href="shop-product-list.php?id=<?=$id?>&page=<?=($page-1)?>">&laquo;</a></li>
                  <?php for($i=1;$i < $count+1;$i++){ ?>
                  <li><a href="shop-product-list.php?id=<?=$id?>&page=<?=$i?>"><?=$i?></a></li>
                  <?php  } ?>
                  
                  <li><a class="<?=($page > $count)?"disable-links":''?>" href="shop-product-list.php?id=<?=$id?>&page=<?=$page+1?>">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        
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
include_once("include/footer.php");




?>
<style>
a.disable-links {
    pointer-events: none;
}
</style>