<?php
include('include/header.php');
include('classes/class_customer.php');


$x               = new Customer();
$result          = $x->showcustomer();
if(isset($_POST['submit']))

{
    $x->name     = $_POST['cust_name'];
    $x->email    = $_POST['cust_email'];
    $x->password = $_POST['cust_password'];
    $x->mobile   = $_POST['cust_mobile'];
    $x->address  = $_POST['cust_address'];
    
    $x->createCustomer();
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
                        <div class="card-header">Customer Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Customer</h3>
                            </div>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Customer Name</label>
                                    <input name="cust_name" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Email</label>
                                    <input name="cust_email" type="text" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Customer password</label>
                                    <input name="cust_password" type="password" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Mobile</label>
                                    <input name="cust_mobile" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Address</label>
                                    <input name="cust_address" type="text" class="form-control">
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
                            <th class="column-title">Name</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Mobile</th>
                            <th class="column-title">Address</th>
                            <th class="column-title">Update</th>
                            <th class="column-title" >Delete</th>
                            </th> 
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          foreach($result as $value)
                          {  echo "<tr>";
                             echo "<td>{$value['cust_id']}</td>";
                             echo "<td>{$value['cust_name']}</td>";
                             echo "<td>{$value['cust_email']}</td>";
                             echo "<td>{$value['cust_mobile']}</td>";
                             echo "<td>{$value['cust_address']}</td>";
                             echo "<td><a href='updateCustomer.php?id={$value['cust_id']}' class='btn btn-round btn-primary'>Update</a></td>";
                             echo "<td><a href='deleteCustomer.php?id={$value['cust_id']}' class='btn btn-round btn-danger'>Delete</a></td>";
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