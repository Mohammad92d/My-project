<?php
if(isset($_POST['submit'])){
 if(!empty($_POST))
 
 {
    if($_POST['trade'] == 'customer'){
        include("../Admin/classes/class_customer.php");

        $model = new Customer();
        $model->name     = $_POST['name'];
        $model->email    = $_POST['email'];
        $model->password = $_POST['password'];
        $model->mobile   = $_POST['phone'];
        $model->address  = $_POST['address'];
        $model->createCustomer();
        header("location:login.php");


	}
	else if($_POST['trade'] == 'vendor'){
        include("../Admin/classes/class_vendor.php");

        $model = new Vendor();

        $model->name         = $_POST['name'];
		$model->email        = $_POST['email'];
        $model->password     = $_POST['password'];
        $model->mobile       = $_POST['phone'];
		$model->address      = $_POST['address'];
		$model->company_name = $_POST['company_name'];
		$model->image        = $_FILES['image']['name'];
        $tmp_name            = $_FILES['image']['tmp_name'];
        $path                = 'images/';
        move_uploaded_file($tmp_name,$path.$model->image);
        $model->status       = 0;
		
        $model->createVendor();
        header("location:login.php");

    }
}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <style>
		   .error_form {
			font-size: 15px;
			font-family: Arial;
			color: #FF0052;
				}
	   </style>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="Registrar.php" id="registration_form" method="POST"  enctype="multipart/form-data">
					<h3>Registration</h3>
						<div class="form-wrapper">
							<label for="">Name</label>
							<input type="text" name="name" id="form_username" class="form-control">
							<span class="error_form" id="username_error_message"></span>
						</div>
				    
						<div class="form-wrapper">
							<label for="">Email</label>
							<input type="email" name="email" id="form_email" class="form-control">
							<span class="error_form" id="email_error_message"></span>
						</div>
						<div class="form-group">
                                <div class="input-group">
                                    <div class="p-t-10">
									<label  class=""> Select Trade Role : </label>
                                        <label  class="radio-container">Customer
                                            <input required type="radio"  name="trade" value="customer">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Vendor
                                            <input type="radio" name="trade" value="vendor"> 
                                            <span class="checkmark"></span>
										</label>
										
                                    </div>
                                </div>
							</div>

							</br>
						<div class="form-group">

					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" required name="password" id="form_password" class="form-control">
						<span class="error_form" id="password_error_message"></span>
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" required name="password_confirm" id="form_retype_password" class="form-control">
						<span class="error_form" id="retype_password_error_message"></span>
					</div>
						</div>
					<div class="form-group">
					<div class="form-wrapper">
						<label for="">Mobile</label>
						<input type="phone" required name="phone" id="form_mobile" class="form-control">
						<span class="error_form" id="mobile_error_message"></span>

					</div>
					<div class="form-wrapper">
						<label for="">address</label>
						<input type="text" required name="address" class="form-control">
					</div>
					</div>
					<div class="form-group">
					<div class="form-group" id="company_data">
					<div class="form-wrapper ">
						<label for="">Image</label>
						<input type="file" name="image" id="image_c" class="form-control">
					</div>
					<div class="form-wrapper ">
						<label for="">Company Name</label>
						<input type="text" required name="company_name" id="name_c" class="form-control">
					</div>
					</div>
				
					</div>
					<div class="form-group">
						
					<a href="login.php">I have account</a>
					<!-- <a href="login.php" class="btn-danger">GO</a> -->


					<button name="submit" type="submit">Register Now</button>
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
    //// validation Jq for regester
	$(function() {

$("#username_error_message").hide();
$("#password_error_message").hide();
$("#retype_password_error_message").hide();
$("#email_error_message").hide();
$("#mobile_error_message").hide();

var error_username = false;
var error_password = false;
var error_retype_password = false;
var error_email = false;
var error_mobile = false;

$("#form_username").focusout(function() {

	check_username();
	
});

$("#form_password").focusout(function() {

	check_password();
	
});

$("#form_mobile").focusout(function() {

check_mobile();

});

$("#form_retype_password").focusout(function() {

	check_retype_password();
	
});

$("#form_email").focusout(function() {

	check_email();
	
});

function check_username() {

	var username_length = $("#form_username").val().length;
	
	if(username_length < 5 || username_length > 20) {
		$("#username_error_message").html("Should be between 5-20 characters");
		$("#username_error_message").show();
		error_username = true;
	} else {
		$("#username_error_message").hide();
	}

}

function check_password() {

	var password_length = $("#form_password").val().length;
	
	if(password_length < 8) {
		$("#password_error_message").html("At least 8 characters");
		$("#password_error_message").show();
		error_password = true;
	} else {
		$("#password_error_message").hide();
	}

}

function check_retype_password() {

	var password = $("#form_password").val();
	var retype_password = $("#form_retype_password").val();
	
	if(password !=  retype_password) {
		$("#retype_password_error_message").html("Passwords don't match");
		$("#retype_password_error_message").show();
		error_retype_password = true;
	} else {
		$("#retype_password_error_message").hide();
	}

}

function check_email() {

	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

	if(pattern.test($("#form_email").val())) {
		$("#email_error_message").hide();
	} else {
		$("#email_error_message").html("Invalid email address");
		$("#email_error_message").show();
		error_email = true;
	}

}

function check_mobile(){

	var mobile_length = $("#form_mobile").val().length;

	if(mobile_length < 10 || mobile_length >10  ) {
		$("#mobile_error_message").html("The number must be 10 digits");
		$("#mobile_error_message").show();
		error_mobile = true;
	} else {
		$("#mobile_error_message").hide();
		
}
}
$("#registration_form").submit(function() {
										
	error_username = false;
	error_password = false;
	error_retype_password = false;
	error_email = false;
	error_mobile = false;
										
	check_username();
	check_password();
	check_retype_password();
	check_email();
	check_mobile();
	
	if(error_username == false && error_password == false && error_retype_password == false && error_email == false && error_mobile ==false) {
		return true;
	} else {
		return false;	
	}

});

});


</script>