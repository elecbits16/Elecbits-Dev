<!DOCTYPE html>
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  


    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>



    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link rel="stylesheet" type="text/css" href="service_box/spm/css/default.css" />
    <link rel="stylesheet" type="text/css" href="service_box/spm/css/component.css" />
    <script src="service_box/spm/js/modernizr.custom.js"></script>
  </head>


 <meta name="description" content="We provide more than 14 services that could make things easier for you at an amazing pace.">
  <title>Elecbits - Service Request</title>
  <?php
  include("public/link.php");
  ?>

 <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>


</head>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");



?>

 


<html>

<body >
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
<div class="container">

<div class="hidden-lg" >
<?php

include ("service_box/bottom.php");


?>
<br>
<br>
</div>


<div class="col-lg-12">
<div class="hidden-xs col-lg-3" >
  
<table>
  <tr>
    <th>Choose a service</th>
   
  </tr>
  <tr>
    <td><img src="images/services/readymade.png" width="15" height="15"> <a href="services.php?readymade" style="color: black;">&nbsp Readymade Project </a> </td>
   
  </tr>
  <tr>
    <td> <img src="images/services/diy.png" width="15" height="15"><a href="services.php?diy" style="color: black;">&nbsp DIY Projects </a> </td>
  
  </tr>
  <tr>
    <td> <img src="images/services/buy_c.png" width="15" height="15"><a href="services.php?buy_components" style="color: black;"> &nbsp Buy Components</a> </td>
   
  </tr>
  <tr>
    <td> <img src="images/services/rent.png" width="15" height="15"><a href="services.php?rent_project" style="color: black;">&nbsp Rent Projects</a></td>
   
  </tr>
  <tr>
    <td> <img src="images/services/manufacture.png" width="15" height="15"><a href="services.php?manufacture_project" style="color: black;"> &nbsp Manufacture Project </a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/sell_p.png" width="15" height="15"><a href="services.php?sell_project" style="color: black;"> &nbsp Sell a project</a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/circuit.png" width="15" height="15"><a href="services.php?circuit_designing" style="color: black;">&nbsp  Circuit Designing </a></td>
   
  </tr>

<tr>
    <td><img src="images/services/documentation.png" width="15" height="15"><a href="services.php?documentation_project" style="color: black;"> &nbsp  Documentation of Projects </a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/starter.png" width="15" height="15"><a href="services.php?need_starter_kit" style="color: black;">&nbsp Need a starter Kit</a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/software.png" width="15" height="15"> <a href="services.php?software_project" style="color: black;"> &nbsp Software projects </a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/web.png" width="15" height="15"><a href="services.php?web_project" style="color: black;"> &nbsp Web Projects</a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/industrial_p.png" width="15" height="15"> <a href="services.php?industrial_projects" style="color: black;"> &nbsp Industrial Prototypes </a></td>
   
  </tr>
  <tr>
    <td><img src="images/services/android_p.png" width="15" height="15"><a href="services.php?android_projects" style="color: black;">&nbsp  Android Projects </a></td>
   
  </tr>

   <tr>
    <td><img src="images/services/custom.png" width="15" height="15"><a href="services.php?custom_order" style="color: black;">&nbsp Custom Orders </a></td>
   
  </tr>

</table>








</div>




<div class="col-lg-9">
<?php








 if (isset($_GET['readymade'])) {
     

     include ("service_box/readymade.php");


   }


    if (isset($_GET['diy'])) {
     

     include ("service_box/diy.php");


   }


     if (isset($_GET['buy_components'])) {
     

     include ("service_box/buy_components.php");


   }

     if (isset($_GET['rent_project'])) {
     

     include ("service_box/rent_project.php");


   }

    if (isset($_GET['manufacture_project'])) {
     

     include ("service_box/manufacture_project.php");


   }

if (isset($_GET['sell_project'])) {
     

     include ("service_box/sell_project.php");


   }


   if (isset($_GET['circuit_designing'])) {
     

     include ("service_box/circuit_designing.php");


   }


   if (isset($_GET['documentation_project'])) {
     

     include ("service_box/documentation_project.php");


   }

      if (isset($_GET['need_starter_kit'])) {
     

     include ("service_box/need_starter_kit.php");


   }

      if (isset($_GET['software_project'])) {
     

     include ("service_box/software_project.php");


   }
      if (isset($_GET['web_project'])) {
     

     include ("service_box/web_project.php");


   }

       if (isset($_GET['industrial_projects'])) {
     

     include ("service_box/industrial_projects.php");


   }

      if (isset($_GET['android_projects'])) {
     

     include ("service_box/android_projects.php");


   }

       if (isset($_GET['custom_order'])) {
     

     include ("service_box/custom_order.php");


   }



?>
</div>

</div>














</div>



<div class="container">
<br>
<hr>
<br>
 <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
            
                <div class="thumbnail">
                <br>
                    <img src="images/np1.png" alt="">
                    <div class="caption">
                        <h3>SAVE TIME</h3>
                        <p style="text-align: justify;">No need to travel all around the city for electronics components and projects, Just click and order.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np2.png" alt="">
                    <div class="caption">
                        <h3 >FREE SHIPPING</h3>
                        <p style="text-align: justify;">We provide free home delivery. Just select your project or order a customized version on the comfort of a click.</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 col1-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np3.png" alt="">
                    <div class="caption">
                        <h3>CASH ON DELIVERY</h3>
                        <p style="text-align: justify;">Easy payments at your door. We believe in our customers and provide payment option after their complete satisfaction. </p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np4.png" alt="">
                    <div class="caption">
                        <h3>EASY RETURNS</h3>
                        <p style="text-align: justify;"> We provide the best quality available in the market, If still you're not satified we will return as soon as possible.</p>
                       
                    </div>
                </div>
            </div>

  </div> 


</div>

<br>
<br>
<br>






<!--footer start-->
<?php

include("public/footer.php");

?>


  
<script src="service_box/spm/js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        menuTop = document.getElementById( 'cbp-spmenu-s3' ),
        menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
        showLeft = document.getElementById( 'showLeft' ),
        showRight = document.getElementById( 'showRight' ),
        showTop = document.getElementById( 'showTop' ),
        showBottom = document.getElementById( 'showBottom' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;

      
      showBottom.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuBottom, 'cbp-spmenu-open' );
        disableOther( 'showBottom' );
      };
    
      function disableOther( button ) {

          if( button !== 'showBottom' ) {
          classie.toggle( showBottom, 'disabled' );
        }
        
      }
    </script>


<!--footer end-->





</body>


</html>

<!-- 1. Readymade project
2. DIY project
3. Buy Components
4. Manufacture a project ( Coding and other segment )
5. Rent a project
6. Sell a project. ( We'll buy a project if the condition is good )
7. Circuit designing
8. Documentation of projects.
9. Need a starter kit
10. Software projects
11. Web projects
12. Industrial prototypes
13. Custom order/Other services.
14. Android development -->








