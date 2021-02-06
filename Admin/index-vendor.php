<?php
include_once("include/headerVendor.php");
include_once("classes/class_vendor.php");

$vender_inf = new Vendor();
$dataVendor = $vender_inf->readById($_SESSION['vendor_id'] );
foreach($dataVendor as $dataVendors);



?>
    
<?php
include("include/footerVendor.php");
?>



