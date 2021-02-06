<?php
include('classes/class_admin.php');

    $x  = new Admin();
    $id = $_GET['id'];
    $adminSet=$x->readById($id);
    foreach($adminSet as $value);
if(isset($_POST['submit']))

   {     $x->email               = $_POST['email'];
         $x->password            = $_POST['password'];
         $x->fullname            = $_POST['fullname'];
      

        if ($_FILES['fileimage']['name'] !=""){
                $x->image        = $_FILES['fileimage']['name'];
                $tmp_name        = $_FILES['fileimage']['tmp_name'];
                $path            = 'images/';
                move_uploaded_file($tmp_name,$path.$x->image);
            }
        else
            {
                $x->image        = $value['image'];
            }

       $x->update($id);
       header("location:manegarAdmin.php");   
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
                        <div class="card-header">Admin Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Admin</h3>
                            </div>
                            <hr>
                            <?php foreach($adminSet as $value) {?>
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
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='fileimage' src='images/{$value['image']}' width='90px'>" ?>
                                    <input name="fileimage" type="file" class="form-control cc-number identified visa">
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