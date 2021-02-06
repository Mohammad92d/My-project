<?php
session_start();
include_once("include/headerVendor.php");
include_once('classes/class_productVendor.php');
$x=new ProductVendor();
$x->cat_name= $_POST['cat'];
$result=$x->readAllCatogery();
$row =$x->readIdCat();
foreach($row as $test);

if(isset($_POST['submit']))

{ 
  
    $x->name          = $_POST['pro_name'];
    $x->description   = $_POST['pro_desc'];
    $x->price         = $_POST['pro_price'];

    $x->image         = $_FILES['pro_image']['name'];
    $tmp_name         = $_FILES['pro_image']['tmp_name'];

    $x->image1        = $_FILES['pro_image1']['name'];
    $tmp_name1         = $_FILES['pro_image1']['tmp_name'];

    $x->image2        = $_FILES['pro_image2']['name'];
    $tmp_name2         = $_FILES['pro_image2']['tmp_name'];

    $path             = 'images/';
   
    move_uploaded_file($tmp_name,$path.$x->image);
    move_uploaded_file($tmp_name1,$path.$x->image1);
    move_uploaded_file($tmp_name2,$path.$x->image2);

    $x->qty           = $_POST['pro_qty'];
    $x->cat_Id        = $test['cat_id'] ;
    $x->vendor_id     = $_SESSION['vendor_id'];
    $x->createProductVendor();
    echo '<meta http-equiv="refresh" content="0">';}


?>


<div class="right_col " role="main" style="min-height: 3952.11px;">
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Product Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Product</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Name</label>
                                    <input name="pro_name" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <input name="pro_desc" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Pricee</label>
                                    <input name="pro_price" type="text" class="form-control cc-name valid">
                             
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Quantity</label>
                                    <input name="pro_qty" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-number" class="control-label mb-1">Category</label>
                                    <select name="cat" class="form-control">
                                    <?php foreach($result as $value){
                                    echo "<option> ".$value['cat_name']." </option>";
                                     }
                                    ?>
                                    </select>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input name="pro_image" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input name="pro_image1" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input name="pro_image2" type="file" class="form-control  cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                

                                <div>
                                    <button id="payment-button" name="submit" type="submit" class="btn btn-lg  btn-success btn-block">
                                        <i class="fas fa-save"></i>&nbsp;
                                        <span id="payment-button-amount">Save</span>
                                    </button>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </br>
<div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"> ID </th>
                            <th class="column-title">name</th>
                            <th class="column-title">Description</th>
                            <th class="column-title">Pricee</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">Image1</th>
                            <th class="column-title">Image2</th>
                            <th class="column-title">Quantity</th>
                            <th class="column-title">Update</th>
                            <th class="column-title">Delete</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            
                           $Show= $x->readByIdProudct($_SESSION['vendor_id']);
                          foreach($Show as $value)

                          {  echo "<tr>";
                             echo "<td>{$value['prodV_id']}</td>";
                             echo "<td>{$value['pro_name']}</td>";
                             echo "<td>{$value['pro_desc']}</td>";
                             echo "<td>{$value['pro_price']}</td>";
                             echo "<td><img src='images/{$value['pro_image']}' width='100' height='100'></td>";
                             echo "<td><img src='images/{$value['pro_image1']}' width='100' height='100'></td>";
                             echo "<td><img src='images/{$value['pro_image2']}' width='100' height='100'></td>";
                             echo "<td>{$value['qty']}</td>";
                             echo "<td><a href='updateProductVendor.php?id={$value['prodV_id']}' class='btn btn-round btn-primary'>Update</a></td>";
                             echo "<td><a href='deleteProductVendor.php?id={$value['prodV_id']}' class='btn btn-round btn-danger'>Delete</a></td>";
                             echo "</tr>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>

			</div>

<?php
include("include/footerVendor.php");
?>



