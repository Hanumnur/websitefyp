<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Services

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Services

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th style="text-align: center;">Service ID</th>
<th style="text-align: center;">Service Title</th>
<th style="text-align: center;">Service Image</th>
<th style="text-align: center;">Service Price</th>
<th style="text-align: center;">Service Keywords</th>
<th style="text-align: center;">Date of Listing</th>
<th style="text-align: center;">Delete Service</th>
<th style="text-align: center;">Edit Service</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_service = "select * from services where status='service'";

$run_service = mysqli_query($con,$get_service);

while($row_service=mysqli_fetch_array($run_service)){

$service_id = $row_service['service_id'];

$service_title = $row_service['service_title'];

$service_image = $row_service['service_img1'];

$service_price = $row_service['service_price'];

$service_keywords = $row_service['service_keywords'];

$service_date = $row_service['date'];

$i++;

?>

<tr>

<td style="text-align: center;"><?php echo $i; ?></td>

<td style="text-align: center;"><?php echo $service_title; ?></td>

<td style="text-align: center;"><img src="service_images/<?php echo $service_image; ?>" width="60" height="60"></td>

<td style="text-align: center;">RM <?php echo $service_price; ?></td>



<td style="text-align: center;"> <?php echo $service_keywords; ?> </td>

<td style="text-align: center;"><?php echo $service_date; ?></td>

<td style="text-align: center;">

<a href="index.php?delete_service=<?php echo $service_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td style="text-align: center;">

<a href="index.php?edit_service=<?php echo $service_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>