<!DOCTYPE html>


<?php

session_start();
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


  <div  class="hidden-lg " >
<br>
<br>
  
<?php
include("public/algobar.php");
  ?>
</div>
  

  

<!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">
     
     <!-- Sidebar starts-->
<?php


include("public/detailbox.php");

?>
   


<div class="hidden-lg" > 
     
 <?php

include("public/sidebar.php");

 ?>

</div>

<div class="hidden-xs hidden-md hidden-sm " > 
     
 <?php

include("public/sidebarlg.php");

 ?>


</div>




<!-- sidebar ends -->

<!-- Main product panel start -->

<div id="tag91" class="col-lg-9 ">

<div  class="hidden-xs " >
<?php
include("public/algobar.php");
  ?>
</div>




   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 20px 20px; ">

<hr>
<div style=" font-size: 25px;  font-family: 'Ubuntu', sans-serif; color: red; ">New Arrivals</div>
<hr>


      

      <?php newgetpro() ?>


   </div>

   <div id="pb1" class="panel-body" style=" padding: 0px 0px 20px 20px; ">

 <hr>
<div style=" font-size: 25px;  font-family: 'Ubuntu', sans-serif; color: red; ">Trending Now</div>
<hr>


      

      <?php trendgetpro() ?>   



  <hr>



    





   </div>

   

   </div>

    </div>




    <!-- Main product panel -->
       
</div>








</div>








</div>

<hr>
<div class="container">
TESTIMONIALS
</div>
<hr>
<?php

include("testimonial.php");

?>
<hr>




<!--Panel1 end-->  

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->




  <div style="float:left;  top: 100px; width:40;height:60; padding:6px; position: fixed; border-radius:8px;">

 
   <b style="color:black;">

   <br>
<a href="https://www.facebook.com/elecbits7" target="blank" class="tips" title="follow me on Facebook"><img src="images/facebook.png"> </a><br>
<br>
  <a href="https://twitter.com/elecbits16" target="blank" class="tips" title="follow me on Twitter"><img src="images/twitter.png"></a><br>


  </b>  

</div>


<?php
include("flt.php");
?>









</body>
</html>