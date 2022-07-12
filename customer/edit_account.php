<?php

$customer_session = $_SESSION['cust_studEmail'];

$get_customer = "select * from customer2 where cust_studEmail='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$cust_id = $row_customer['cust_id'];

$cust_name = $row_customer['cust_name'];

$cust_studEmail = $row_customer['cust_studEmail'];

$cust_phoneNum = $row_customer['cust_phoneNum'];

$cust_pic = $row_customer['cust_pic'];

?>

<h1 align="center" > Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Name: </label>

<input type="text" name="c_name" class="form-control" required value="<?php echo $cust_name; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Student Email: </label>

<input type="text" name="c_studEmail" class="form-control" required value="<?php echo $cust_studEmail; ?>">


</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label> Phone Number: </label>

<input type="text" name="c_phoneNum" class="form-control" required value="<?php echo $cust_phoneNum; ?>">


</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label> Customer Image: </label>

<input type="file" name="c_image" class="form-control"  ><br>

<img src="customer_images/<?php echo $cust_pic; ?>" width="100" height="100" class="img-responsive" >


</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Update Now

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $cust_id;

$c_name = $_POST['c_name'];

$c_studEmail = $_POST['c_studEmail'];

$cust_phoneNum = $_POST['c_phoneNum'];

$gambo = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$gambo");

$update_customer = "update customer2 set cust_name='$c_name',cust_studEmail='$c_studEmail',cust_phoneNum='$c_phoneNum', cust_pic='$gambo' where cust_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>