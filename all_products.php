<!DOCTYPE html>
<?php
include("functions/functions.php");

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
 
  
  <?php

include("public/algobar.php");

  ?>
     <!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">

     <!-- Sidebar begins-->
     
 

<!-- Sidebar begins-->
<!-- Main product panel start -->


<div  class="col-lg-12 ">

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">
    
   <?php
   
   $get_pro = "SELECT * FROM products ";

   $run_pro = mysqli_query($con, $get_pro);

   while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      echo "
      <div class = col-lg-4  col-xs-6>
      <div class='panel panel-default'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details.php?pro_id=$pro_id'>
      
      <h4 style='font-family: cursive ';>$pro_title </h4>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹  $pro_price</p>

      <a href='all_products.php?add_cart=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>

      

      





      ";

    }

    ?>

   </div>

   </div>

    </div>


    <!-- Main product panel -->
       
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