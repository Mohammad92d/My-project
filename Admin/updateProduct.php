<?php
include('classes/class_product.php');

    $x  = new Product();
    $id = $_GET['id'];
    $result=$x->readById($id);

if(isset($_POST['submit']))

   {  
      $x->image       = $_FILES['pro_image']['name'];
      $tmp_name       = $_FILES['pro_image']['tmp_name'];
      $path           = 'images/';
      move_uploaded_file($tmp_name,$path.$x->image);


      $x->name        = $_POST['pro_name'];
      $x->description = $_POST['pro_desc'];
      $x->price       = $_POST['pro_price'];
      $x->qty         = $_POST['pro_qty'];
      $x->updateProduct($id);
     header("location:manegarProduct.php");
        

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
                        <div class="card-header">Product Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Product</h3>
                            </div>
                            <hr>
                            <?php foreach ($result as $value){?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Name</label>
                                    <input name="pro_name" value="<?=$value['pro_name'];?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <input name="pro_desc" value="<?=$value['pro_desc'];?>" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Pricee</label>
                                    <input name="pro_price" value="<?=$value['pro_price'];?>"  type="text" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Quantity</label>
                                    <input name="pro_qty" value="<?=$value['qty'];?>" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='pro_image' src='images/{$value['pro_image']}' width='90px'>" ?>

                                    <input name="pro_image" type="file" class="form-control  cc-number identified visa">
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