<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");



?>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 style="font-family: 'Fredoka One', cursive; font-size:50px;">KolejKu</h3>
        <p>From students to students</p>
        <a href="shop.php" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->


  <!-- Cover -->
  <main>
   
    <!-- Main -->
    <div class="wrapper">
            
    <h1 class="heading"> special <span>for you</span> </h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- footer section starts  -->

<section class="footer2">

<div class="box-container">

    <div class="box">
        <h3 style="font-family: 'Fredoka One', cursive; font-size:30px;"> KolejKu <i class="fas fa-shopping-basket"></i> </h3>
        <p>From Students To Students</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +60 17-4595742 </a>
        <a href="#" class="links"> <i class="fas fa-user"></i> CS2516A </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> nurfaghoh@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Kolej Melati, UiTM Shah Alam </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="admin_area/login.php" class="links"> <i class="fas fa-arrow-right"></i> seller </a>
        <a href="shop.php" class="links"> <i class="fas fa-arrow-right"></i> products </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> hostel </a>
        <a href="customer/my_account.php?my_orders" class="links"> <i class="fas fa-arrow-right"></i> my account </a>
    </div>

 

</div>

<div class="credit">  &copy; 2022 <span>KolejKu</span>&trade; |  Developed By Farah Hanum | all rights reserved </div>

</section>

<!-- footer section ends -->


</body>

</html>
