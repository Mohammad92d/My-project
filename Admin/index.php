<?php

include_once('include/header.php');

 include_once('classes/class_statistics.php');


   $numm               = new statistic();
   $numberUser         = $numm->numberUser();
   $numberVendor       = $numm->numberVendor();
   $numberVendorWating = $numm->VendorInWatingList();
   $profile            = $numm->ProfileAdmin($_SESSION['admin_id']);

   foreach($profile as $profiles);
  
?>

    <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count"><?=$numberUser?></div>
            </div>
          <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top red"><i class="fa fa-clock-o red"></i> Wating List </span>
              <div class="count red"><?=$numberVendorWating?></div>
            </div> 

             <div class="col-md-4 col-sm-4  tile_stats_count">
              <span class="count_top green"><i class="fa fa-user green"></i>  Total Vendor</span>
              <div class="count green"><?=$numberVendor?></div>

            </div>

            </div>
           
            </div>
            <div class="" role="main">

<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Admin  <small> report</small></h2>

        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <div class="col-md-3 col-sm-3  profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="img-responsive avatar-view" src="images/<?=$profiles['image']?>" width='100' height='100' alt="Avatar" title="Change the avatar">
            </div>
          </div>
          <h3>Admin</h3>
          
          <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> <?=$profiles['full_name']?>
            </li>
           

            <li class="m-top-xs">
              <i class="fa fa-external-link user-profile-icon"></i>
              <?=$profiles['email']?>
            </li>
          </ul>

          <a href="updateAdmin.php?id=<?=$profiles['admin_id'] ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
          <br>

         

        </div>

          <!-- end of user-activity-graph -->

       
        </div>
      </div>
    </div>
  </div>
</div>
</div>
          </div>

          

        
<?php
include_once('include/footer.php');

?>