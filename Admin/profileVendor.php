<?php
include_once("include/headerVendor.php");
include_once("classes/class_vendor.php");

$vender_inf = new Vendor();
$dataVendor = $vender_inf->readById($_SESSION['vendor_id'] );
foreach($dataVendor as $dataVendors);




?>
    <div class="right_col" role="main">

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Vendor  <small> report</small></h2>
        
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: block;">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/<?=$dataVendors['image']?>" width='100' height='100' alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?=$dataVendors['full_name']?></h3>
                      
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?=$dataVendors['address']?>
                        </li>
                        
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?=$dataVendors['company_name']?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <?=$dataVendors['email']?>
                        </li>
                      </ul>

                      <a href="UpdateVendorprofile.php?id=<?=$dataVendors['vendor_id'] ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br>

                     

                    </div>

                      <!-- end of user-activity-graph -->

                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
include("include/footerVendor.php");
?>



