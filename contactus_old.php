<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits | Contact Us</title>
   <meta name="description" content="If you have corporate or press enquiries, or are just curious about something, write to us at elecbits16@gmail.com">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
  <link rel="stylesheet" type="text/css" href="styles/css/contact.css">
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
   <div class="hidden-lg">
<br>
<br>
<hr>
</div>
   <div class="container">
   
     <div  style="font-size: 20px; padding: 0px 0px 0px 0px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">C</span>ONTACT US</div> 
     <hr>



   </div>

<div class="content">

<form class="cbp-mc-form" method="post" action=" " >
 
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div style="text-align:center">
        
        
          <h3    style="padding-bottom: 24px;" >Drop us a line, we love to hear from you!</h3>


            <div class="hidden-lg">         
             <iframe  height="315" src="https://www.youtube.com/embed/v3Q-hDO-Ljs" frameborder="0" allowfullscreen></iframe>
             </div>
          <div class="hidden-xs">
          <iframe width="535" height="315" src="https://www.youtube.com/embed/v3Q-hDO-Ljs" frameborder="0" allowfullscreen></iframe>
          </div>

          <div style="padding:16px;"><b>For any corporate or press enquiries</b><br>
            If you have corporate or press enquiries, or are just curious about something, write to us at elecbits16@gmail.com
             <div  >
  
   <h2>E-mail</h2>
   <p style="color:#10689a">elecbits16@gmail.com</p>

   

   <h2>Phone</h2>
   <p style="color:#10689a">+91-9911806843</p>
   

   <h2>Location</h2>
   <p style="color:#10689a">New Delhi</p>
   
  </div>
  </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-style-5">
            
              <fieldset>
                <legend><span class="number">1</span> Personal Details</legend>
                <input type="text"  name="first_name" placeholder="Your Name *" required/>
                <input type="email" name="email" placeholder="Your Email *" required/>
                <input type="number"  name="phone" placeholder="Your Mobile Number *" required/>
                <input type="text"  name="colg" placeholder="Your College *" required/>
                <label for="job">Semester *</label>
                <select id="job"     name="sem">

                  <option >1</option>
                  <option >2</option>
                  <option >3</option>
                  <option >4</option>
                  <option >5</option>
                  <option >6</option>
                  <option >7</option>
                  <option >8</option>


                </select>

                <textarea name="affiliations" placeholder="Your queries" required/></textarea>


              </fieldset>

              <input type="submit" value="Send Message"  name="update" />
           
          </div>

        </div>
      </div> 
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
  $colg = $_POST['colg'];
  $sem = $_POST['sem'];
  $phone = $_POST['phone'];
   $affiliations = $_POST['affiliations'];


   $msg = "$fname, $lname, $email, $colg, $sem, $phone, $affiliations ";

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