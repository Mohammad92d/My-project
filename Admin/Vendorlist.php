<?php


include_once('include/header.php');
include_once('classes/class_vendor.php');
 $x=new Vendor();
 $result=$x->showVendor();
  
?>


<div class="right_col" role="main" style="min-height: 3952.11px;">
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">

<div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Full Name</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">company_name</th>
                            <th class="column-title">mobile</th>
                            <th class="column-title">Address</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">Update</th>
                            <th class="column-title">Delete</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          foreach($result as $value)
                          {  echo "<tr>";
                             echo "<td>{$value['vendor_id']}</td>";
                             echo "<td>{$value['full_name']}</td>";
                             echo "<td>{$value['email']}</td>";
                             echo "<td>{$value['company_name']}</td>";
                             echo "<td>{$value['mobile']}</td>";
                             echo "<td>{$value['address']}</td>";
                             echo "<td><img src='images/{$value['image']}' width='100' height='100'></td>";
                             echo "<td><a href='updateVendorUsingAdmin.php?id={$value['vendor_id']}' class='btn btn-round btn-primary'>Update</a></td>";
                             echo "<td><a href='deleteVenorOutInSite.php?id={$value['vendor_id']}' class='btn btn-round btn-danger'>Delete</a></td>";
                             echo "</tr>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>

            </div>
      </div>

  </div>
</div>


</div>
<?php
include('include/footer.php');

?>










