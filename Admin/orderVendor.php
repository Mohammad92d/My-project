<?php
session_start();
include_once("include/headerVendor.php");
include_once('classes/class_order.php');
$order = new order();
$VendorOrder =     $order->readIdOrderByVendor($_SESSION['vendor_id']);
?>
<div class="right_col " role="main" style="min-height: 3952.11px;">
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
<div class="col-md-12 col-sm-12  ">
     
                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">ID Order </th>
                            <th class="column-title">ID Product </th>
                            <th class="column-title">custmer Mobile </th>
                            <th class="column-title">Date </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">UNIT PRICE</th>
                            <th class="column-title">Total </th>
                        
                         
                          </tr>
                        </thead>

                        <tbody>
                           <?php
                           foreach($VendorOrder as $VendorOrders)
                           {
                           ?>
                           <tr>
                           <th class="column-title"><?=$VendorOrders['order_id']?></th>
                            <th class="column-title"><?=$VendorOrders['prodV_id']?></th>
                            <th class="column-title"><?=$VendorOrders['cust_mobile']?></th>
                            <th class="column-title"><?=$VendorOrders['order_data']?></th>
                            <th class="column-title"><?=$VendorOrders['qty']?></th>
                            <th class="column-title"><?=$VendorOrders['total']/$VendorOrders['qty']?></th>
                            <th class="column-title"><?=$VendorOrders['total']?></th>
                            </tr>
                         <?php }?>
                        </tbody>
                      </table>
                    </div>		
                  </div>
</div>
            </div>
        </div>
    </div>
</div>

</div>
</div>


<?php
include("include/footerVendor.php");
?>

