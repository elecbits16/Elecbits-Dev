<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
  <script type="text/javascript">    
   angular.module('firstApplication', ['ngMaterial']);
 </script>
 <!-- Links of sheet -->
 <title>Elecbits | Feedback Form</title>
 <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="styles/css/feedback.css">
 <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
 <?php
 include("public/link.php");
 ?>


 <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body ng-app="firstApplication" ng-cloak>

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

  <div class="content">

    <div class="container">

      <form class="cbp-mc-form" method="post" action=" " >

        <br>

        <div  style="font-size: 20px; padding: 0px 0px 0px 20px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">P</span>ROVIDE YOUR FEEDBACK</div> 


        <p>

          <!-- <p style="font-weight: 600;"> We would love to hear your thoughts, concerns or problems so we can improve.</p> -->
          <div class="container">

           
              <div class="col-lg-6 col-xs-12">
                <md-input-container class="md-block">
                  <!-- Use floating placeholder instead of label -->
                  <md-icon md-svg-src="img/icons/ic_email_24px.svg" class="name"></md-icon>
                  <input class="feedbackInput" ng-model="user.name"  name="n1" placeholder="Name" ng-required="true">
                </md-input-container>

                <md-input-container class="md-block">
                  <!-- Use floating placeholder instead of label -->
                  <md-icon md-svg-src="img/icons/ic_email_24px.svg" class="number"></md-icon>
                  <input class="feedbackInput"  ng-model="user.number" name="pn"  placeholder="Phone number" ng-required="true">
                </md-input-container>

                <md-input-container class="md-block">
                  <!-- Use floating placeholder instead of label -->
                  <md-icon md-svg-src="img/icons/ic_email_24px.svg" class="email"></md-icon>
                  <input class="feedbackInput"  ng-model="user.email"  name="ema" type="email" placeholder="Email (required)" ng-required="true">
                </md-input-container>

              <!--     <md-input-container md-icon-float class="md-block">
                  <md-icon md-svg-src="img/icons/ic_phone_24px.svg"></md-icon>
                  <input class="feedbackInput"  ng-model="phone" type="text" name="pt" placeholder="Project Title">
                  <div style="margin-top: 75px;">
                    <p>How likely are you to recommend Elecbits to your friends?</p>
                  </md-input-container>
                  <md-slider-container flex="">
                 <md-slider  flex class="md-primary" md-discrete ng-model="rating1"  step="1" min="1" max="5" aria-label="rating">
                    </md-slider></md-slider-container> -->
                  </div>
                
                <div class="col-lg-6">
                  <md-input-container class="md-block">
                    <!-- Use floating placeholder instead of label -->
                    <md-icon md-svg-src="img/icons/ic_email_24px.svg" class="email"></md-icon>
                    <input class="feedbackInput"  ng-model="college" type="text" placeholder="College" name="coll" ng-required="true">
                  </md-input-container>
                  <div style="margin-left: 39px;">
                    <p>How did you get to know about Elecbits?</p>
                    <select name="know" >
                      <option style="list-style:none" ><md-checkbox>Friend</md-checkbox></li>
                      <option style="list-style:none"><md-checkbox>Facebook</md-checkbox></li>
                      <option style="list-style:none"><md-checkbox>Through the Co-Founders themselves</md-checkbox></li>
                      <option style="list-style:none"><md-checkbox>Other source</md-checkbox></li>
                    </select>
                  </div>
                    <div  style="margin-top: 35px;">
                    <p style="margin-left: 39px;">Rate our services out of 10</p>
                  <md-slider-container flex="">
                      <input style="margin-left: 39px;
                      width: 94%;"flex class="md-primary" md-discrete ng-model="rating2" name="rating2" step="1" min="1" max="5" aria-label="rating">
                    </input></md-slider-container> 
                  </div>



                </div>
              </div>

            </div>

















          </div>
          <br>

          <div style="text-align: center; ">
           <button style="    color: white; " class="btn-primary" name="update" >SUBMIT</button>
         </div>

       </form>
     </div>

     <br>






     <div class="container">
      <hr>
      <br>
      <strong>WHY YOU SHOULD BUY IT FROM US ?</strong><br>

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










      <hr>
      <br>
      <br>


    </div>


    <!--footer start-->
    <?php

    include("public/footer.php");

    ?>


    <!--footer end-->
    <?php

    if (isset($_POST['update'])) {

    $fname = $_POST['n1'];  

    $phone = $_POST['pn'];

    $pt = $_POST['ema'];
    $affiliations = $_POST['rating2'];


    echo "$fname,    $phone, $pt , $affiliations, ";

    $message = "Thanks for your esteemed feedback, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Info_Elecbits@elecbits.in";

    if(filter_var($pt, FILTER_VALIDATE_EMAIL)){

    if( mail("saurav.rav67@gmail.com", "Project", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "Thanks for your feedback", $message , $from) ) 
    {  
    echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
  }  

}

}

?>









</body>

</html>