<?php

	session_start();

		if (isset($_POST['submit'])){
				 if($_POST['trade'] == 'vendor'){
							include_once("../Admin/classes/class_loginVendor.php");
							$x = new login();
							$x->email      = $_POST['email'];
			             	$x->password   = $_POST['password'];

			             	$log= $x->VerifyLogin();

							if ($log){
								$_SESSION['email_Vendor']       = $x->email;
								$_SESSION['status']             =$log[0]['status'];
								$_SESSION['vendor_id']          = $log[0]['vendor_id'];
								$_SESSION['fullname']           = $log[0]['full_name'];
								$_SESSION['imageVendor']        = $log[0]['image'];

								if($_SESSION['status'] == 1){
									header("location:../Admin/index-vendor.php");
								}
								else {header("location:Thank.php");}
	
				         	    
				}else{
					$error = "User Not Found";
				}
}
					else if($_POST['trade'] == 'customer'){
						include_once("../Admin/classes/class_loginCustomer.php");
						$x = new loginCustomer();
						$x->email      = $_POST['email'];
						$x->password   = $_POST['password'];

						$log= $x->VerifyLoginCustomer();
						if ($log){
							$_SESSION['email_customer']       = $x->email;
							$_SESSION['cust_id']              =$log[0]['cust_id'];
							


						 header("location:index.php");    
			}else{
				$error = "User Not Found";
			}
					}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="" method="post" enctype="">
				<h3>Login</h3>

									</br>
									<div class="form-group">
                                <div class="input-group">
                                    <div class="p-t-10">
									<label class=""> Select Trade Role : </label>
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
						<div class="form-wrapper">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control">
						</div>

					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
                    <button type="submit" name="submit">Login</button>

                    </div>
                   <a href="Registrar.php">Join Now</a>
				</form>
			</div>
		</div>
		
	</body>
</html>
