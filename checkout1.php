<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");

?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  <?php
  include("public/link.php");
  ?>
</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->

<?php 

include("public/topbar.php");

?>


<!--Top bar end-->

<!--Logo bar start-->

<?php 

include("public/logobar.php");

?>

<!--Logo bar end-->

<!--Menu bar start-->

<?php

include("public/menubar.php");

?>
<!-- Menu bar end--> 


   <div class="body" >
  <div class="container">

<!--Panel1 algo bar start--> 
  
  

<!--Panel1 algo bar end-->

     
    
    <!-- Sidebar starts-->




   <?php carts(); ?>

    

 
<div class="col-lg-12">


      <?php

      if (!isset($_SESSION['customer_email'])) {
        
        echo "<script>window.open('public/customer_login.php','_self')</script>";

        
      }

      else{


        include("customer/payment.php");


      }

      

      ?>




  
















</div>

</div>

 

<!-- sidebar end -->

<!-- Main panel start-->


    <!-- Main panel end-->
       
</div>

</div>
    
  
</div>
 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->










</body>
</html>