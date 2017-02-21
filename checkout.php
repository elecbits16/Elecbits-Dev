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

     <div class="panel panel-default">

     <div id="pb1" class="panel-body" style=" padding: 100px 0px 100px 20px; ">
    
    <!-- Sidebar starts-->

 <div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   

<?php

      if (!isset($_SESSION['customer_email'])) {
        
      ?>

<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px;  ">    CATEGORIES  </div> 
<div id="allp"><p style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="all_products.php"   >ALL PROJECTS</a></p></div>


<?php 

echo getcats();

     
   }

      else{

       

                 ?>
 

<div  style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px; "><a href="customer/my_account.php" style="text-decoration:none; color:black;"  >DELIVERY DETAILS</a></div>

<?php 

include("public/left_bar.php");

}

?>





</div>
</div>

<!-- sidebar end -->

<!-- Main panel start-->
<div id="tag91" class="col-lg-9 ">


   <?php carts(); ?>

    

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">



      <?php

      if (!isset($_SESSION['customer_email'])) {
        
        include("public/customer_login.php");

        
      }

      else{


        include("customer/payment.php");


      }

      

      ?>



   </div>

   </div>

    </div>

    <!-- Main panel end-->
       
</div>

</div>
    
  

 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->










</body>
</html>