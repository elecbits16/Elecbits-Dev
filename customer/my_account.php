<?php

session_start();
include("../functions/functions.php");

if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('../checkout.php','_self')</script>";

}

else{



?>

<!DOCTYPE html>
<?php



?>

<html>
<head>  <!-- Links of sheet -->
  <title>Elecbits</title>
  <meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles/custom.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->

<div class="container-fluid" style="font-family: 'Montserrat', sans-serif; font-size: 12px;   background-color: #ECECEB; padding:10px 0px 0px 0px; margin: 0px 0px 
0px 0px;">

<!-- Top bar start -->
<div id="topbar">
  <div class="nav navbar-nav" style=" float: right;  padding: 0px 40px 10px 40px; margin: 0px 0px 0px 0px; ">

  <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspOffers</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-heart" style="vertical-align: text-top; padding-right:10px;"></span>&nbspBlog</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-phone-alt" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspCustomer Service</a> 
    <a href="#" style="padding-left: 20px; "><span  id="g2" class="glyphicon glyphicon-thumbs-up" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspPartner Us</a> 
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-envelope" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspContact Us</a> 
  
   
    </div>
 </div> 

</div>

<!--Top bar end-->

	

<!--Logo bar start-->
<div id="logobar" >
<div class="container">
    <div id="tag61"  class="col-lg-6">
          <a href="../index.php">  <img src="../images/logo.png" width="250" style="padding: 20px 0px 20px 10px; "></a>


     
     <form method="get" action="results.php"  enctype="multipart/form-data"  style=" float: right; padding-top: 20px; " >
     <input type="text" name="user_query" placeholder="Search a  product" />
     <input type="submit" name="search" value="search">
       
     </form>
     
    </div>
    <div id="tag61"  class="col-lg-6">
    
      <div class="nav navbar-nav" style=" float: right;   ">
     <div id="navibar">


    <?php
     if (!isset($_SESSION['customer_email'])) {

       echo "<p style='padding-left: 10px; ''><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px; '> </span>Hi Guest</p>" ; 

      
     }
     else
     {

      $c_email =  $_SESSION['customer_email'];

      global $con;
      $name_query="SELECT * FROM customers WHERE customer_email='$c_email'";

      $run_name_query = mysqli_query($con, $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['customer_name'];
     


      echo "<p style='padding-left: 10px; ''><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px; '> </span>Hi $customer_name</p>";      

    }

     }

    ?>
    
    <a href="../cart.php" style="padding:50px 0px 0px 10px; ">&nbspCart :<?php total_items(); ?></a> 
    <?php
     if (!isset($_SESSION['customer_email'])) {

      echo "<a href='../checkout.php' style='padding:50px 0px 0px 10px; '>Login</a> ";
     }
     else
     {

       echo "<a href='logout.php' style='padding:50px 0px 0px 10px; '>logout</a> ";

     }

    ?>
    <a class="btn btn-social-icon btn-facebook" href="#" >   <span class="fa fa-facebook-square fa-2x" style="color:#3B5998;"></span></a>
    <a class="btn btn-social-icon btn-google"  href="#" >   <span class="fa fa-google fa-2x" style="color:#DD4B39"></span></a>
    </div>   
   </div>   
</div>
</div>
</div>
<!--Logo bar end-->

<!--Menu bar start-->
<div id="menubar" >
<div id="cf1" class="container-fluid">
 <div id="tag124"  class="col-lg-12">
    <div id="navibar2">
      <div class="nav navbar-nav" style=" float: left; padding: 0px 0px 0px 110px;   ">
     

   
     <a  href="#" style="padding-left: 20px; "> Websites </a>
    <a  href="#" style="padding-left: 20px; "> Photography</a>
    <a  href="#" style="padding-left: 20px; "> Video Editing</a>
    <a  href="#" style="padding-left: 20px; "> Circuits</a>
    <a  href="#" style="padding-left: 20px; "> Resell</a>
    <a  href="#" style="padding-left: 20px; ">Partner Us</a>
    <a  href="#" style="padding-left: 20px; ">E-Kits</a>
    <a  href="#" style="padding-left: 20px; ">Softwares</a>


  </div>
  </div>
  </div>
  </div> 
   <!-- Menu bar end--> 

<!--Panel1--> 
  <div class="body" >
  <div class="container">
  
  <div class="panel panel-default">
 
    <div id="pb1" class="panel-body" style=" padding: 50px 0px 0px 20px; ">
    
    
     <div class="tag126" class="col-lg-12 bg-primary">
     
 <div class="sidebar">

<div id="tag31" class="col-lg-3" style=" padding: 0px 10px 10px 10px ; "> 
   


<div style=" text-align: center; color: white ; background-color:#0070FF; padding: 10px 0px 10px 0px ; font-size: 18px;  "> My Account </div> 



<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?my_orders" style=" color: black; ">My orders</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?edit_account" style=" color: black; ">Edit Profile</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?change_pass" style=" color: black; ">Change Password</a></div>
<div style=" text-align: center;  background-color: #99ff99; padding: 10px 0px 10px 0px ; font-size: 16px;"><a href="my_account.php?delete_account" style=" color: black; ">Delete  Account</a></div>


 





</div>
</div>
<div id="tag91" class="col-lg-9 ">


   <?php carts(); ?>

   <?php getcatprocount()?> 

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">


    


<?php

if (!isset($_GET['my_orders'])) {

  if (!isset($_GET['edit_account'])) {

    if (!isset($_GET['change_pass'])) {

      if (!isset($_GET['delete_account'])) {
        
      }
    }
  }
}

 ?>

<?php

if (isset($_GET['edit_account'])) {
  
  include("edit_account.php");
}

if (isset($_GET['change_pass'])) {
  
  include("change_pass.php");
}

if (isset($_GET['delete_account'])) {
  
  include("delete_account.php");
}

if (isset($_GET['my_orders'])) {
  
  include("my_orders.php");
}




?>




   </div>

   </div>

    </div>
       
</div>
    
  
</div>
</div>
</div>
</div>
<!--Panel1 end-->  

<!--footer start-->

<div class="container-fluid" style="font-family: 'Montserrat', sans-serif; font-size: 12px;   background-color: #0070FF; padding:10px 0px 0px 0px; margin: 0px 0px 
0px 0px;">

<!-- footer start -->
<div id="footbar">
  <div class="nav navbar-nav" style=" float: left;  padding: 0px 40px 10px 40px; margin: 0px 0px 0px 0px; ">

  <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspTerms & Condition</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-heart" style="vertical-align: text-top; padding-right:10px;"></span>&nbspPrivacy policy</a>
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-phone-alt" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspCustomer Service</a> 
    <a href="#" style="padding-left: 20px; "><span  id="g2" class="glyphicon glyphicon-thumbs-up" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspPartner Us</a> 
    <a href="#" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-envelope" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspContact Us</a> 
  
   
    </div>
 </div> 

</div> 

<!--footer end-->

</div>








</body>
</html>


<?php }  ?>