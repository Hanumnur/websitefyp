<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Sign In</h1>

<p class="lead" >Please enter the required details</p>


</center>


</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Student Email</label>

<input type="text" class="form-control" name="c_studEmail" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Password</label>

<input type="password" class="form-control" name="c_pass" required >



</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Log in


</button>
<h4 align="center">

<a href="forgot_pass.php" style="color:red;font-size: 16px;  text-decoration: none;"> Forgot Password </a>

</h4>
<br>
</div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<p>Don't have an account?</p>
<br>
<h4 align="center">

<a href="customer_register.php" style="color:red;font-size: 16px;  text-decoration: none;"> Sign Up </a>

</h4>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php

if(isset($_POST['login'])){

$cust_studEmail = $_POST['c_studEmail'];

$cust_pass = $_POST['c_pass'];

$select_customer = "select * from customer2 where cust_studEmail='$cust_studEmail' AND cust_password='$cust_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('password or email is wrong')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['cust_studEmail']=$cust_studEmail;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

}
else {

$_SESSION['cust_studEmail']=$cust_studEmail;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('index.php','_self')</script>";

} 


}

?>