<?php
include('../Admin/classes/class_customer.php');

$x              = new Customer();
$id_customer    = $_GET['id'];
$result         = $x->viewacustomerINFupdate($id_customer);
if(isset($_POST['submit1']))
{

    header("location:shop-account.php");
}

if(isset($_POST['submit']))
{   if ($_POST["cust_password"] === $_POST["confirm_password"]) {

    $x->name     = $_POST['cust_name'];
    $x->email    = $_POST['cust_email'];
    $x->password = $_POST['cust_password'];
    $x->mobile   = $_POST['cust_mobile'];
    $x->address  = $_POST['cust_address'];
    $x->updatecustomer($id_customer);
    header("location:shop-account.php"); }
 else {
           $error="Password not match"; }}

?>
   

<html>
	<head>
		<meta charset="utf-8">
		<title>Update Informations</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="innerrr">
             <?php foreach($result as $value);?> 

 		<form action="" method="POST"  enctype="multipart/form-data">
                    <h3>Update Informations</h3>
                    <?php
 if (isset($error)) {?>
     <div class="alertError" role="alert">
         <?=$error?>
     </div>
   
 <?php }?>
		
						<div class="form-wrapper">
							<label for="">Name</label>
							<input type="text" required value="<?=$value['cust_name'];?>" name="cust_name" class="form-control">
						</div>
				    
						<div class="form-wrapper">
							<label for="">Email</label>
							<input type="email" required value="<?=$value['cust_email'];?>" name="cust_email" class="form-control">
						</div>
					
						<div class="form-group">

					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" required value="<?=$value['cust_password'];?>"name="cust_password" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password"required value="<?=$value['cust_password'];?>"name="confirm_password" class="form-control">
					</div>
						</div>
					<div class="form-group">
					<div class="form-wrapper">
						<label for="">Mobile</label>
						<input type="phone" required value="<?=$value['cust_mobile'];?>"  name="cust_mobile" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">address</label>
						<input type="text" required value="<?=$value['cust_address'];?>"   name="cust_address" class="form-control">
					</div>
					</div>
					<div class="form-group">
		
                    <button name="submit1" type="submit" >Back</button></a>

					<button name="submit" type="submit">Update</button>
					</div>
                </form>

			</div>
		</div>
		
	</body>
</html>
<script>
	$("#company_data").hide();
	$("input[type='radio'][name='trade']").on('change',function(){
		if(this.value == 'vendor' ){
			$("#company_data").show();
			$("#name_c").attr("required","required");
			$("#image_c").attr("required","required");

		}
		else{
			$("#company_data").hide();
			$("#name_c").removeAttr('required');
			$("#image_c").removeAttr('required');


		}


	});


</script>

