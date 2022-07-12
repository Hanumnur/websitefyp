
<center>

<h1>Do You Reaaly Want To Delete Your Account!</h1>

<form action="" method="post">

<input class="btn btn-danger" type="submit" name="yes" value="Yes, I want to delete">

<input class="btn btn-primary" type="submit" name="no" value="No, I Don,t want to delete">

</form>

</center>

<?php

$c_studEmail = $_SESSION['cust_studEmail'];

if(isset($_POST['yes'])){

$delete_customer = "delete from customer2 where cust_studEmail='$c_studEmail'";

$run_delete = mysqli_query($con,$delete_customer);

if($run_delete){

session_destroy();

echo "<script>alert('Your Account Has Been Deleted!')</script>";

echo "<script>window.open('../index.php','_self')</script>";

}

}

if(isset($_POST['no'])){

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>