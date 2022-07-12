<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Add Services</title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Add Services

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Add Services

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Title </label>

<div class="col-md-6" >

<input type="text" name="service_title" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service's Url </label>

<div class="col-md-6" >

<input type="text" name="service_url" class="form-control" required >

<br>

<p style="font-size:15px; font-weight:bold;">

Service's Url Example : proof-reading

</p>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Hostel </label>

<div class="col-md-6" >

<select class="form-control" name="manufacturer1"><!-- select manufacturer Starts -->

<option> Select a Hostel </option>

<?php

$get_manufacturer = "select * from manufacturers";
$run_manufacturer = mysqli_query($con,$get_manufacturer);
while($row_manufacturer= mysqli_fetch_array($run_manufacturer)){
$manufacturer_id = $row_manufacturer['manufacturer_id'];
$manufacturer_title = $row_manufacturer['manufacturer_title'];

echo "<option value='$manufacturer_id'>
$manufacturer_title
</option>";

}

?>

</select><!-- select manufacturer Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Service Category </label>

<div class="col-md-6" >

<select name="service_cat" class="form-control" >

<option> Select Service Category </option>


<?php

$get_p_cats = "select * from service_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

echo "<option value='$p_cat_id' >$p_cat_title</option>";

}


?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Faculty </label>

<div class="col-md-6" >


<select name="cat" class="form-control" >

<option> Select A Faculty </option>

<?php

$get_cat = "select * from categories ";

$run_cat = mysqli_query($con,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

echo "<option value='$cat_id'>$cat_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Image 1 </label>

<div class="col-md-6" >

<input type="file" name="service_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Image 2 </label>

<div class="col-md-6" >

<input type="file" name="service_img2" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Image 3 </label>

<div class="col-md-6" >

<input type="file" name="Service_img3" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Price </label>

<div class="col-md-6" >

<input type="text" name="service_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Sale Price </label>

<div class="col-md-6" >

<input type="text" name="ssp_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Keywords </label>

<div class="col-md-6" >

<input type="text" name="service_keywords" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Service Description </a>

</li>

<li>

<a data-toggle="tab" href="#features">Service Features </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Youtube Video </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="service_desc" class="form-control" rows="15" id="service_desc">


</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="service_features" class="form-control" rows="15" id="service_features">


</textarea>

</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="service_video" class="form-control" rows="15">


</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Service Label </label>

<div class="col-md-6" >

<input type="text" name="service_label" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Add Item" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['submit'])){

$service_title = $_POST['service_title'];
$service_cat = $_POST['service_cat'];
$cat = $_POST['cat'];
$manufacturer_id = $_POST['manufacturer'];
$service_price = $_POST['service_price'];
$service_desc = $_POST['service_desc'];
$service_keywords = $_POST['service_keywords'];

$ssp_price = $_POST['ssp_price'];

$service_label = $_POST['service_label'];

$service_url = $_POST['service_url'];

$service_features = $_POST['service_features'];

$service_video = $_POST['service_video'];

$status = "service";

$service_img1 = $_FILES['service_img1']['name'];
$service_img2 = $_FILES['service_img2']['name'];
$service_img3 = $_FILES['service_img3']['name'];

$temp_name1 = $_FILES['service_img1']['tmp_name'];
$temp_name2 = $_FILES['service_img2']['tmp_name'];
$temp_name3 = $_FILES['service_img3']['tmp_name'];

move_uploaded_file($temp_name1,"service_images/$service_img1");
move_uploaded_file($temp_name2,"service_images/$service_img2");
move_uploaded_file($temp_name3,"service_images/$service_img3");

$insert_service = "insert into services (s_cat_id,cat_id,manufacturer_id,date,service_title,service_url,service_img1,service_img2,service_img3,service_price,service_ssp_price,service_desc,service_features,service_video,service_keywords,service_label,status) values ('$service_cat','$cat','$manufacturer_id',NOW(),'$service_title','$service_url','$service_img1','$service_img2','$service_img3','$service_price','$psp_price','$service_desc','$service_features','$service_video','$service_keywords','$service_label','$status')";

$run_service = mysqli_query($con,$insert_service);

if($run_service){

echo "<script>alert('service has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_services','_self')</script>";

}

}

?>

<?php } ?>
