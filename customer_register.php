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
<<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 

<!--Panel1--> 
  <div class="body" >
  <div class="container">

  <!--  panel algo bar -->
  
   <?php
include("public/algobar.php");
  ?>

<!--Panel1 algo bar end--> 
     <div class="tag126" class="col-lg-12 bg-primary">
   
   <!-- Sidebar start -->  
 <?php

include("public/sidebar.php");

 ?>

<!-- sidebar ends -->

<!-- Main panel 1 -->
<div id="tag91" class="col-lg-9 ">



   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">


  <form action="customer_register.php " method="post" enctype="multipart/formdata"> 

   <table align="center" >
     
     <tr>
       <td><h2>CREATE AN ACCOUNT</h2> </td>
     </tr>

     <tr>
       <td align="center" > Customer Name:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_name"  required/> </td>
     </tr>
      <tr>
       <td align="center" > Customer Email:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_email" required/> </td>
     </tr>
      <tr>
       <td align="center"> Customer Password:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="password" name="c_pass" required/> </td>
     </tr>
     <tr>
       <td align="center" > Customer country:</td>
       <td style="padding: 10px 10px 10px 10px ; ">

       <select name="c_country">
         <option>Select a country</option>
         <option>India</option>
       </select>

        </td>
     </tr>

     <tr>
       <td align="center" > Customer city:</td>
       <td style="padding: 10px 10px 10px 10px ; ">

       <select name="c_city">
         <option>Select a city</option>
         <option>Delhi</option>
       </select>

        </td>
     </tr>
     <tr>
       <td align="center" > Customer contact:</td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="text" name="c_contact" required/> </td>
     </tr>
     <tr>
       <td align="center" > Customer Addres:</td>
       <td style="padding: 10px 10px 10px 10px ; "><textarea cols="20" rows="10" name="c_address" required></textarea> </td>
     </tr>
     <tr>

     
       <td align="center" > </td>
       <td style="padding: 10px 10px 10px 10px ; "><input type="submit" name="register" value="Create account" required/> </td>
     </tr>


   </table>




   </form>



   </div>

   </div>

    </div>
       
</div>
    
  
</div>
</div>

<!-- Main Panel1 end-->  



<div class="container-fluid" style="font-family: 'Montserrat', sans-serif; font-size: 12px;   background-color: #0070FF; padding:10px 0px 0px 0px; margin: 0px 0px 
0px 0px;">

   <?php
if (isset($_POST['register'])) {


  $ip= getIp();

  $c_name= $_POST['c_name'];


  $c_email= $_POST['c_email'];

  $c_pass= $_POST['c_pass'];

  $c_country= $_POST['c_country'];

  $c_city= $_POST['c_city'];

  $c_contact= $_POST['c_contact'];

  $c_address= $_POST['c_address'];



 $insert_c ="INSERT INTO customers (customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_address, customer_contact) VALUES ('$ip', '$c_name','$c_email','$c_pass', '$c_country','$c_city','$c_address','$c_contact')";


$run_c= mysqli_query($con, $insert_c);

$sel_cart ="SELECT * FROM cart WHERE ip_add='$ip'";

$run_cart= mysqli_query($con, $sel_cart);

$check_cart = mysqli_num_rows($run_cart);



if ($check_cart == 0) {

  $_SESSION['customer_email']= $c_email;

echo "<script>alert('Account has been successfully created')</script>";
echo "<script>window.open('customer/my_account.php','_self')</script>";
  
  }

  else
  {
    $_SESSION['customer_email']= $c_email;

echo "<script>alert('Account has been successfully created')</script>";
echo "<script>window.open('checkout.php','_self')</script>";
  }
  
}


?>


<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->






</body>
</html>

