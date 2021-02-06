<?php
include('classes/class_category.php');

  $x             = new Category();
  $id            = $_GET['id'];
  $result        = $x->viewCategoryINFupdate($id);
  foreach($result as $value)

if(isset($_POST['submit']))
{ 
   if ($_FILES['cat_image']['name'] !=""){
   $x->cat_image  = $_FILES['cat_image']['name'];
   $tmp_name      = $_FILES['cat_image']['tmp_name'];
   $path          = 'images/';
   move_uploaded_file($tmp_name,$path.$x->cat_image);
}
    else
        {
            $x->cat_image        = $value['cat_image'];
        }
    $x->cat_name  = $_POST['cat_name'];
    $x->cat_des   = $_POST['cat_des'];
   $x->updatcategory($id);
   header("location:manegarCatogery.php");   
}

include('include/header.php');





?>



<div class="right_col" role="main" style="min-height: 3952.11px;">
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Catogery Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Catogery</h3>
                            </div>
                            <hr>
                            <?php foreach($result as $value) { ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Catogery Name</label>
                                    <input name="cat_name" value="<?=$value['cat_name'];?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Catogery Description</label>
                                    <input name="cat_des" value="<?=$value['cat_des'];?>"type="text" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='fileimage' src='images/{$value['cat_image']}' width='90px'>" ?>
                                    <input name="cat_image" type="file" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <?php }?>
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
include('include/footer.php');

?>