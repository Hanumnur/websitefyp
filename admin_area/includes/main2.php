
 <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>

<header class="header">

<div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
         } 
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
          ?>
          </a>
</div>

    <nav class="navbar">
      <br>
        <a style="text-decoration:none;" href="index.php">Home</a>
        <a style="text-decoration:none;" href="admin_area/login.php">Seller</a>
        <a style="text-decoration:none;" href="#products">Products</a>
        <a style="text-decoration:none;" href="#categories">Categories</a>
        <a style="text-decoration:none;" href="#review">Hostel</a>
        <a style="text-decoration:none;" href="#blogs">My Account</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        
        <a  href="checkout.php"><div class="fas fa-user"></div></a>
        <a href="cart.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
        <?php items(); ?> items
  
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


 

</header>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- header section ends -->