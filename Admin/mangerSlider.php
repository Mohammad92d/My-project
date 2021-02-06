
<?php
include('classes/class_slider.php');
  $x=new Slider();
  $readSlider=$x->showSlider();
  foreach($readSlider as $readSliders);
if(isset($_POST['submit']))

   {  
       
    if ($_FILES['image1_slider']['name'] !=""){
        $x->image1_slider        = $_FILES['image1_slider']['name'];
        $tmp_name1               = $_FILES['image1_slider']['tmp_name'];
        $path                    = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image1_slider);
    }
   
    else
        {
            $x->image1_slider   = $readSliders['image1_slider'];
        }
     
 
    if ($_FILES['image2_slider']['name'] !=""){
        $x->image2_slider        = $_FILES['image2_slider']['name'];
        $tmp_name2               = $_FILES['image2_slider']['tmp_name'];
        $path                    = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image2_slider);
    }
    else
        {
            $x->image2_slider  = $readSliders['image2_slider'];
        }
        
    if ($_FILES['image3_slider']['name'] !=""){
        $x->image3_slider        = $_FILES['image3_slider']['name'];
        $tmp_name3               = $_FILES['image3_slider']['tmp_name'];
        $path                    = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image3_slider);
    }
    else
        {
            $x->image3_slider       = $readSliders['image3_slider'];
        }

        if ($_FILES['image4_slider']['name'] !=""){
            $x->image4_slider        = $_FILES['image4_slider']['name'];
            $tmp_name4               = $_FILES['image4_slider']['tmp_name'];
            $path                    = 'images/';
            move_uploaded_file($tmp_name,$path.$x->image4_slider);
        }
        else
            {
                $x->image4_slider       = $readSliders['image4_slider'];
            }
   

      $x->updateSlider();
     header("location:mangerSlider.php");
        

    }
    include("include/header.php");

?>

<div class="right_col" role="main" style="min-height: 3952.11px;">
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Slider Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Slider</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                             
                                <label for="cc-number" class="control-label mb-1">Image</label>
                              
                                <div class="form-group">
                                <?="<img name='pro_image' src='images/{$readSliders['image1_slider']}' width='90px'>" ?>
                                    <input name="image1_slider"   type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    

                                </div>
                                <div class="form-group">
                                <?="<img name='pro_image' src='images/{$readSliders['image2_slider']}' width='90px'>" ?>

                                    <input name="image2_slider" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                <?="<img name='pro_image' src='images/{$readSliders['image3_slider']}' width='90px'>" ?>

                                    <input name="image3_slider" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                <?="<img name='pro_image' src='images/{$readSliders['image4_slider']}' width='90px'>" ?>

                                    <input name="image4_slider" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg  btn-success btn-block">
                                        <i class="fas fa-save"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                    </button>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
include('include/footerVendor.php');

?>





