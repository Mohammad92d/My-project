<?php
include('classes/class_customer.php');

    $x               = new Customer();
    $id              = $_GET['id'];
    $result          = $x->viewacustomerINFupdate($id);
 if(isset($_POST['submit']))
    {
        $x->name     = $_POST['cust_name'];
        $x->email    = $_POST['cust_email'];
        $x->password = $_POST['cust_password'];
        $x->mobile   = $_POST['cust_mobile'];
        $x->address  = $_POST['cust_address'];

         $x->updatecustomer($id);

         header("location:manegarCustomer.php");

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
                        <div class="card-header">Customer Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Customer</h3>
                            </div>
                            <hr>
                            <?php foreach($result as $value) {?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Customer Name</label>
                                    <input name="cust_name" value="<?=$value['cust_name'];?>" type="text" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Email</label>
                                    <input name="cust_email" value="<?=$value['cust_email'];?>"  type="text" class="form-control">
                                </div>

                                
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Customer password</label>
                                    <input name="cust_password" value="<?=$value['cust_password'];?>" type="password" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Mobile</label>
                                    <input name="cust_mobile"  value="<?=$value['cust_mobile'];?>" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Customer Address</label>
                                    <input name="cust_address" value="<?=$value['cust_address'];?>" type="text" class="form-control">
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
