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
        <span class="nero__bold">Items</span> AT KolejKu
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<br>
<br>


  <div id="content" class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->



<?php getProducts(); ?>


</div><!-- row Ends -->

</div><!-- container Ends -->



</div><!-- row Ends -->

<center><!-- center Starts -->

<ul class="pagination" ><!-- pagination Starts -->

<?php getPaginator(); ?>

</ul><!-- pagination Ends -->

</center><!-- center Ends -->






</div><!--- wait Ends -->





<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>






</body>

</html>
