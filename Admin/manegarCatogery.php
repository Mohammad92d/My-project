<?php 
include('include/header.php');
include('classes/class_category.php');

 $x=new Category();
 $result=$x->ReadCategory();

 if (isset($_POST['submit'])) {

          
        $x->cat_image = $_FILES['cat_image']['name'];
        $tmp_name     = $_FILES['cat_image']['tmp_name'];
        $path         = 'images/';
        move_uploaded_file($tmp_name,$path.$x->cat_image);
    
        $x->cat_name  = $_POST['cat_name'];
        $x->cat_des   = $_POST['cat_des'];

        $x->createCategory();
        echo '<meta http-equiv="refresh" content="0">';
  }


include('include/header_admin.php');


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
                                <h3 class="text-center title-2">Create Catogery</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Catogery Name</label>
                                    <input name="cat_name" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Catogery Description</label>
                                    <input name="cat_des" type="text" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input name="cat_image" type="file" class="form-control cc-number identified visa">
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
                            <th class="column-title"style="display: table-cell;"> ID </th>
                            <th class="column-title">Catogery Name</th>
                            <th class="column-title">Catogery Description</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">Update</th>
                            <th class="column-title" >Delete</th>


                            <!-- <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                            </th> -->
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          foreach($result as $value)
                          {  echo "<tr>";
                             echo "<td>{$value['cat_id']}</td>";
                             echo "<td>{$value['cat_name']}</td>";
                             echo "<td>{$value['cat_des']}</td>";
                             echo "<td><img src='images/{$value['cat_image']}' width='100' height='100'></td>";
                             echo "<td><a href='updateCatogery.php?id={$value['cat_id']}' class='btn btn-round btn-primary'>Update</a></td>";
                             echo "<td><a href='deleteCatogery.php?id={$value['cat_id']}' class='btn btn-round btn-danger'>Delete</a></td>";
                             echo "</tr>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>

			</div>



<?php
include('include/footer.php');

?>