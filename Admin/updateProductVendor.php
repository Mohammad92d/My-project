<?php
include('classes/class_productVendor.php');
    $x            = new ProductVendor();
    $id           = $_GET['id'];
    $result       = $x->readByIdProudctToUpdate($id);
    $x->cat_name  = $_POST['cat'];
    $result1      = $x->readAllCatogery();
    $row          = $x->readIdCat();
    foreach ($result as $data);
    foreach($row as $test)
    {}


if(isset($_POST['submit']))

   {  

    if ($_FILES['pro_image']['name'] !=""){
        $x->image        = $_FILES['pro_image']['name'];
        $tmp_name        = $_FILES['pro_image']['tmp_name'];
        $path            = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image);
    }
    else
        {
            $x->image   = $data['pro_image'];
        }

    if ($_FILES['pro_image1']['name'] !=""){
        $x->image1      = $_FILES['pro_image1']['name'];
        $tmp_name1      = $_FILES['pro_image1']['tmp_name'];
        $path           = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image1);
    }
    else
        {
            $x->image1  = $data['pro_image1'];
        }
        
    if ($_FILES['pro_image2']['name'] !=""){
        $x->image2      = $_FILES['pro_image2']['name'];
        $tmp_name2      = $_FILES['pro_image2']['tmp_name'];
        $path           = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image2);
    }
    else
        {
            $x->image2       = $data['pro_image2'];
        }
        


      $x->name        = $_POST['pro_name'];
      $x->description = $_POST['pro_desc'];
      $x->price       = $_POST['pro_price'];
      $x->qty         = $_POST['pro_qty'];
      $x->cat_Id      = $test['cat_id'] ;

      $x->updateProduct($id);
     header("location:manegarProductVendor.php");
        

    }
    include("include/headerVendor.php");

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
                            <?php foreach ($result as $data){?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Name</label>
                                    <input name="pro_name" value="<?=$data['pro_name'];?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <input name="pro_desc" value="<?=$data['pro_desc'];?>" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Pricee</label>
                                    <input name="pro_price" value="<?=$data['pro_price'];?>"  type="text" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Quantity</label>
                                    <input name="pro_qty" value="<?=$data['qty'];?>" type="text" class="form-control">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-number" class="control-label mb-1">Category</label>
                                    <select name="cat" class="form-control">
                                    <?php foreach($result1 as $value){
                                    echo "<option> ".$value['cat_name']." </option>";
                                     }
                                    ?>
                                    </select>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <label for="cc-number" class="control-label mb-1">Image</label>

                                <div class="form-group">
                                    <?="<img name='pro_image' src='images/{$data['pro_image']}' width='90px'>" ?>
                                    <input name="pro_image" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='pro_image1' src='images/{$data['pro_image1']}' width='90px'>" ?>
                                    <input name="pro_image1" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1"></label>
                                    <?="<img name='pro_image2' src='images/{$data['pro_image2']}' width='90px'>" ?>
                                    <input name="pro_image2" type="file" class="form-control  cc-number identified visa">
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
include('include/footerVendor.php');

?>