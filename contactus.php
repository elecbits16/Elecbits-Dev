<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
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


 
<form class="cbp-mc-form" method="post" action=" " >

<br>

 <div  style="font-size: 24px; padding-left: 20px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">O</span>RDER A PROJECT</div> 



  <div class="col-lg-6">
    <label for="first_name">Name</label>
    <input type="text" id="first_name" name="first_name" required/>
    
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required/>
    
    
        
    
  </div>
  <div class="col-lg-6">
  
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone"  required/>
    <label for="phone">Project Title </label>
    <input type="text" id="phone" name="pt" required/>

  </div>
  <div class="col-lg-12">
    <label for="affiliations"> Short Description</label>
    <textarea id="affiliations" name="affiliations" required/></textarea>
   </div>   
    
  </div>
 
 <div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="update" value="Send your data" />
  
  </div>
</form>
</div>
<br>

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
   $pt = $_POST['pt'];
   $affiliations = $_POST['affiliations'];


   $msg = "$fname,  $email,  $phone, $pt , $affiliations ";

   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Info@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "New Addition", $msg, $from) && mail("elecbits16@gmail.com", "New Addition", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>









</body>
</html>