<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");


?>


  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Be the part of</span> KolejKu
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->





<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center><!-- center Starts -->

<h2> Register A New Account </h2>



</center><!-- center Ends -->

</div><!-- box-header Ends -->

<form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Name</label>

<input type="text" class="form-control" name="c_name" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Username</label>

<input type="text" class="form-control" name="c_username" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Student ID</label>

<input type="text" class="form-control" name="c_studId" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Phone Number</label>

<input type="text" class="form-control" name="c_phoneNum" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Faculty</label>

<input type="text" class="form-control" name="c_fac" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Semester</label>

<input type="text" class="form-control" name="c_sem" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Program Code</label>

<input type="text" class="form-control" name="c_progCode" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Student Email</label>

<input type="text" class="form-control" name="c_studEmail" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Password </label>

<div class="input-group"><!-- input-group Starts -->

<span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick1"> </i>

<i class="fa fa-times cross1"> </i>

</span><!-- input-group-addon Ends -->

<input type="password" class="form-control" id="pass" name="c_pass" required>

<span class="input-group-addon"><!-- input-group-addon Starts -->

<div id="meter_wrapper"><!-- meter_wrapper Starts -->

<span id="pass_type"> </span>

<div id="meter"> </div>

</div><!-- meter_wrapper Ends -->

</span><!-- input-group-addon Ends -->

</div><!-- input-group Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label> Confirm Password </label>

<div class="input-group"><!-- input-group Starts -->

<span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick2"> </i>

<i class="fa fa-times cross2"> </i>

</span><!-- input-group-addon Ends -->

<input type="password" class="form-control confirm" id="con_pass" required>

</div><!-- input-group Ends -->

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label> Customer Image </label>

<input type="file" class="form-control" name="c_image" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Hostel's Name</label>

<input type="text" class="form-control" name="c_hostelName" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Room Number</label>

<input type="text" class="form-control" name="c_roomNum" required>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Block Number</label>

<input type="text" class="form-control" name="c_blockNum" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<center>



</center>

</div><!-- form-group Ends -->


<div class="text-center"><!-- text-center Starts -->

<!-- <button type="submit" name="register" class="btn btn-primary"> -->
<button type="submit" name="register" class="btn btn-primary">

<i class="fa fa-user-md"></i> Register

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});

</script>

<script>

$(document).ready(function(){

$("#pass").keyup(function(){

check_pass();

});

});

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}

</script>

</body>

</html>

<?php

if(isset($_POST['register'])){


$c_name = $_POST['c_name'];
$c_username = $_POST['c_username'];
$c_studId = $_POST['c_studId'];

$c_phoneNum = $_POST['c_phoneNum'];
$c_fac = $_POST['c_fac'];

$c_sem = $_POST['c_sem'];
$c_progCode = $_POST['c_progCode'];
$c_studEmail = $_POST['c_studEmail'];
$c_pass = $_POST['c_pass'];
$c_hostelName = $_POST['c_hostelName'];
$c_roomNum = $_POST['c_roomNum'];
$c_blockNum = $_POST['c_blockNum'];
$con_pass = $_POST['con_pass'];


$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];


move_uploaded_file($c_image_tmp,"customer2/cust_pic/$c_image");

$get_email = "select * from customer2 where cust_studEmail='$c_studEmail'";

$run_email = mysqli_query($con,$get_email);

$check_email = mysqli_num_rows($run_email);

if($check_email == 1){

echo "<script>alert('This email is already registered, try another one')</script>";

exit();

}

$customer_confirm_code = mt_rand();

$subject = "Email Confirmation Message";

$from = "nurfaghoh@gmail.com";

$message = "

<h2>
Email Confirmation By Faghoh $c_name
</h2>

<a href='localhost/ecom_store/customer/my_account.php?$customer_confirm_code'>

Click Here To Confirm Email

</a>

";

$headers = "From: $from \r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_studEmail,$subject,$message,$headers);

$insert_customer = "insert into customer2 (cust_name, cust_username, cust_studId, cust_phoneNum, faculty, semester, prog_code, cust_studEmail, cust_password, cust_pic, cust_ip,cust_confirmCode, hostelName, roomNum, blockNum) values ('$c_name', '$c_username', '$c_studId', '$c_phoneNum', '$c_fac', '$c_sem', '$c_progCode', '$c_studEmail', '$c_pass', '$c_image','$customer_confirm_code','$c_ip', '$c_hostelName', '$c_roomNum', '$c_blockNum')";


$run_customer = mysqli_query($con,$insert_customer);

$sel_cart = "select * from cart where ip_add='$c_ip'";

$run_cart = mysqli_query($con,$sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart>0){

$_SESSION['cust_studEmail']=$c_studEmail;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}else{

$_SESSION['cust_studEmail']=$c_studEmail;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";


}



echo "<script>alert('Please Select Captcha, Try Again')</script>";

}




?>
