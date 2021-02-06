<?php
include('include/header.php');
include('classes/class_admin.php');

       $x                = new Admin();
       $result           = $x->readAll();
    if (isset($_POST['submit'])) {

        $x->image        = $_FILES['fileimage']['name'];
        $tmp_name        = $_FILES['fileimage']['tmp_name'];
        $path            = 'images/';
        move_uploaded_file($tmp_name,$path.$x->image);



        $x->email        = $_POST['email'];
        $x->password     = $_POST['password'];
        $x->fullname     = $_POST['fullname'];
          
        $x->create();

     echo '<meta http-equiv="refresh" content="0">';
 
}



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
                                <h3 class="text-center title-2">Create Admin</h3>
                            </div>
                            <hr>
                            <form action="manegarAdmin.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Full Name</label>
                                    <input name="fullname" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Email</label>
                                    <input name="email" type="text" class="form-control">
                                </div>

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Password</label>
                                    <input name="password" type="Password" class="form-control cc-name valid">
                             
                                </div>
                                

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image</label>
                                    <input name="fileimage" type="file" class="form-control cc-number identified visa">
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
                            <th class="column-title">Full Name</th>
                            <th class="column-title">Email</th>
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
                             echo "<td>{$value['admin_id']}</td>";
                             echo "<td>{$value['full_name']}</td>";
                             echo "<td>{$value['email']}</td>";
                             echo "<td><img src='images/{$value['image']}' width='100' height='100'></td>";
                             echo "<td><a href='updateAdmin.php?id={$value['admin_id']}' class='btn btn-round btn-primary'>Update</a></td>";
                             echo "<td><a href='deleteAdmin.php?id={$value['admin_id']}' class='btn btn-round btn-danger'>Delete</a></td>";
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