<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits | Need a project</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  
   <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
  <?php
  include("public/link.php");
  ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  


  



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

<div class="content">

<div class="container">
 


<br>

 <div  style="font-size: 20px; padding: 0px 0px 0px 20px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">E</span>LECBITS EXTRA</div> 



<hr>
<div class="col-lg-12">
<div class="col-lg-8">
<p style="font-weight: 600; text-align: justify;"> Final year is always been a time to show your multitasking skills. From projects to presentation, a whole lot more goes on just classes. Placements become a daily routine and taking out time of other important work become quite tough.
<br> Elecbits understands you and hence we provide an EXTRA effort to reduce your work load as much as possible. Get all the relevant topics and material right below.  </p>
<br>

</div>

<div class="col-lg-4">

     <div class="row text-center">
             <div class="col-md-12 col-sm-12 hero-feature">
                <div class="thumbnail">
                

      <ul class="nav nav-pills nav-stacked">
        <li><a href="#section1">AMCAT/COCUBES</a></li>
        <li><a href="#section2">TRAINING REPORTS</a></li>
        <li><a href="#section3">SEMINAR PRESENTATION</a></li>
        <li><a href="#section4">NOTES</a></li>
      </ul>
                    </div>
                </div>
            
</div>

</div>

</div>
<div id="section1" >
<strong style="color:#0070FF;">AMCAT/COCUBES SAMPLE PAPERS</strong><br>

<hr>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Syllabus</a></li>
    <li><a data-toggle="tab" href="#menu1">English</a></li>
    <li><a data-toggle="tab" href="#menu2">Quant</a></li>
    <li><a data-toggle="tab" href="#menu3">Logical</a></li>
    <li><a data-toggle="tab" href="#menu4">Subject</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Syllabus</h3>
      <p>Test Structure</p>
      <p>Syllabus</p>

    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>English</h3>
      <p>English_test1</p>
      <p>English_test2</p>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Quant</h3>
      <p>Quant_test1</p>
      <p>Quant_test2</p>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Logical Reasoning</h3>
      <p>Logical_Reasoning_test1</p>
      <p>Logical_Reasoning_test2</p>

    </div>
     <div id="menu4" class="tab-pane fade">
      <h3>Subject</h3>
      <p>Electronics</p>
    </div>
  </div>
</div>

<hr>
<div id="section2" >

<strong style="color:#0070FF;" >TRAINING REPORT AND PRESENTATIONS</strong><br>

<hr>

<p>We'll update this section soon..!!</p>
  

</div>

<hr>

<div id="section3" >

<strong style="color:#0070FF;">SEMINAR REPORT AND PRESENTATIONS</strong><br>

<hr>

<p>We'll update this section soon..!!</p>
  

</div>

<hr>

<div id="section4" >
<strong style="color:#0070FF;">NOTES</strong><br>

<hr>


<p>We'll update this section soon..!!</p>
  

</div>
<hr>

<br>
<br>
<div class="col-lg-4">
  
</div>
<div class="col-lg-4">
 
     <a href="contactus.php">   <div class="info-box bg-red" >
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Contact Us</span>
              <span class="info-box-number">Got any queries ?</span>

           
                
                  <span class="progress-description">
                    We are here to help.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
</div class="col-lg-4">
  
</div>
<div>
  
</div>


</div>





 </div></div>

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->
<?php

if (isset($_POST['update'])) {

  $fname = $_POST['first_name'];  
  $email = $_POST['email'];  
  $phone = $_POST['phone'];

  $range = $_POST['range'];
  $loc = $_POST['country'];
   $date = $_POST['ddate'];

   $pt = $_POST['pt'];
   $affiliations = $_POST['affiliations'];


   $msg = "$fname,  $email,  $phone, $pt , $affiliations, $range, $loc, $date ";

   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Info_Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Project", $msg, $from) && mail("elecbits16@gmail.com", "Project", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>









</body>
</html>