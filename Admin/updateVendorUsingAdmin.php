<?php
include('classes/class_vendor.php');

    $x  = new Vendor();
    $id = $_GET['id'];
    $result=$x->readById($id);

if(isset($_POST['submit']))

   {     $x->email               = $_POST['email'];
         $x->name                = $_POST['fullname'];
         $x->password            = $_POST['password'];
         $x->company_name        = $_POST['company_name'];
         $x->address             = $_POST['address'];
         $x->mobile              = $_POST['mobile'];

      

        if ($_FILES['image']['name'] !=""){
                $x->image        = $_FILES['image']['name'];
                $tmp_name        = $_FILES['image']['tmp_name'];
                $path            = 'images/';
                move_uploaded_file($tmp_name,$path.$x->image);
            }
        else
            {
                $x->image        = $value['image'];
            }

       $x->updateVendor($id);
       header("location:Vendorlist.php");   
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
                        <div class="card-header">Vendor Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Vendor</h3>
                            </div>
                            <hr>
                            <?php foreach($result as $value) {?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input name="fullname" value="<?=$value['full_name'];?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email</label>
                                    <input name="email" type="text" value="<?=$value['email'];?>" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input name="password" type="Password" value="<?=$value['password'];?>" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Company Name</label>
                                    <input name="company_name" type="text" value="<?=$value['company_name'];?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Mobile</label>
                                    <input name="mobile" type="text" value="<?=$value['mobile'];?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Address</label>
                                    <input name="address" type="text" value="<?=$value['address'];?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='fileimage' src='images/{$value['image']}' width='90px'>" ?>
                                    <input name="image" type="file" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                               

                                <?php }?>
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
include('include/footer.php');

?>


