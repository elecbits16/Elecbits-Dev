<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");

 if (!isset($_SESSION['customer_email'])) {
        
        echo "<script>window.open('login.php','_self')</script>";

        
      }
else






?>





<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />

     <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <meta name="theme-color" content="#0070FF">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#0070FF">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0070FF">

<link rel="icon" href="images/transymbol.png" type="image/png" sizes="16x16">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles/css/custom.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 
  
  <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <meta name="viewport"> 
   
    <title>Elecbits-Checkout</title>
    
    <link rel="stylesheet" type="text/css" href="styles/css/table.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/placeorder/css/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/placeorder/css/component.css" />
    <script src="styles/placeorder/js/modernizr.custom.js"></script>
  </head>
  <body>


  <?php


$user= $_SESSION['customer_email'];

$get_customer = "SELECT * FROM customers WHERE customer_email='$user'";

$run_get_customer=mysql_query( $get_customer , $con);

while ($row_customer = mysql_fetch_array($run_get_customer)) {

$c_id = $row_customer['customer_id'];

$name = $row_customer['customer_name'];

$email = $row_customer['customer_email'];

$pass = $row_customer['customer_pass'];

$country = $row_customer['customer_country'];

$city= $row_customer['customer_city'];

$address = $row_customer['customer_address'];

$contact = $row_customer['customer_contact'];

$croll = $row_customer['custom_roll'];

$cuniv = $row_customer['custom_univ'];

$cres = $row_customer['custom_result'];

$oc =  $row_customer['offer_cat'];



?>





    <div class="container">
      <header>
        <a href="index.php" ><span  style="text-decoration:none;" ><img src="images/logo1.png"> </span></a>
        <h3> CHECKOUT FORM</h3>
        
      </header> 
      <div class="main">
        <div id="cbp-contentslider" class="cbp-contentslider">
          <ul>
            <li id="slide1">
                <h3 style= "color:black;">     <img src="images/sc.png"> BILLING ADDRESS</h3>  
              <div>
                <div >
                <br>
                              


                <br>

                 <form class="form-horizontal"  method="post" action="" >

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="c_name"  value="<?php echo $name; ?>" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact:</label>
      <div class="col-sm-10">
        <input type="tel" name="c_contact" class="form-control" value="<?php echo $contact; ?>" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address</label>
      <div class="col-sm-10">
        <textarea name="c_address" rows="4" cols="50" style="float: left;  width: 100%;  height: auto;" required/><?php echo $address; ?> </textarea>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="update"  type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
  </form>

 


                  
                </div>
              </div>
            </li>
            <li id="slide2">
              <h3 style= "color:black;">   <img src="images/checklist.png">&nbspORDER SUMMARY</h3>
              <div>
                <div >
                   <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="mutlipart/form-data" > 
  
  
   

    <?php

    $total = 0;
    $single_price=0; 
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysql_query( $sel_price, $con );

   while ($p_price = mysql_fetch_array($run_price)) {

        $pxq =  $p_price['pxq'];

       $pro_id = $p_price['p_id'];

       $qty2 = $p_price['qty'];

       $single_price = $p_price['uv'];

       $pro_price = "SELECT * FROM products WHERE product_id='$pro_id' ";

       $run_pro_price = mysql_query( $pro_price, $con );

       while ($pp_price=mysql_fetch_array($run_pro_price)) {
           
           $product_price =  array($pp_price['product_price']);

           $product_title = $pp_price['product_title'];

           $product_image = $pp_price['product_image'];

           $pro_cat1 = $pp_price['product_cat1'];

           $pro_cat2 = $pp_price['product_cat2'];
           $pro_cat3 = $pp_price['product_cat3'];
           $pro_cat4 = $pp_price['product_cat4'];
          
          $pro_high = $pp_price['product_high'];

          $test[] = $single_price;

          foreach ($test as $key => $txn) {
             
            
            
       $pxq_price = "UPDATE cart SET pxq = '$txn' WHERE p_id='$pro_id' and ip_add= '$ip' ";
            
       $run_pxq_price = mysql_query(   $pxq_price, $con   );
       
}
                  
             

    ?>

  
  
  <div class="panel panel-default hidden-xs" >
    
    <div class="panel-body">
      
      <div class="col-lg-12 col-xs-12" style="border-style: solid;  border-color: grey ; padding: 5px 5px 5px 5px ; ">

      <div class= "col-lg-2 col-xs-12"  style="border-style: solid;  border-color: #D0D3D4 ; padding: 20px 20px 30px 10px ; "  >
         
        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="90" height = "90" />
        
      </div>

      <div class= "col-lg-8 col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 20px 10px 20px ; " >

       <strong style="font-size:25px;"><?php echo $product_title; ?></strong>
         
      <div style="font-size:13px"><?php echo $pro_cat1; ?>,<?php echo $pro_cat2; ?>,  <?php echo $pro_cat3; ?> and  <?php echo $pro_cat4; ?> </div>

       <br>

      
        
        <strong style="font-size:25px;">₹ <?php echo $single_price; ?></strong>   <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>
        
      </div>
       <div class= "col-lg-2 col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >
       

        
       
      

    </div>
       
       

        
      
     </div>
   
          

       
</div>
</div>

  

  <div class="panel panel-default hidden-lg">
    
    <div class="panel-body">
      
      <div class="col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; ">

     

      <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       <strong style="font-size:12px;" class="word-break: break-word; " ><?php echo $product_title; ?></strong> 
       
        <br><strong style="font-size:15px;">₹ <?php echo $single_price; ?></strong> 
       
      </div>
       <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       
         <button type="submit"  name="delete_cart[]" style="padding : 7px 7px 7px 7px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>

        
      </div>
     </div>
   
          

       
</div>
</div>

     
       
      
     
       
       

     
     

      <?php 
  global $con;



  $ip = getIp();
      
      if (isset($_POST['delete_cart'])) {

        foreach ($_POST['delete_cart'] as $remove_id) {
          
          $delete_product ="DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add='$ip'";

          $drop_table = " ALTER TABLE cart DROP id ";

          $add_table=  "ALTER TABLE cart ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ";

         

          $run_delete = mysql_query( $delete_product, $con );
          $run_drop = mysql_query( $drop_table, $con );
          $run_add_table = mysql_query( $add_table, $con );

          if (($run_delete)&&($run_drop)&&($run_add_table)) {
            
            echo "<script>window.open('cart.php','_self')</script>";
          }


        }

        
      }



      

     ?>
  
      
     

             
      
  
  
  

  
      

    
  <?php

 
   } } 

  
  

 ?>


<?php

$ip = getIp();

        $get_item = "SELECT * FROM cart WHERE ip_add='$ip'";

        $run_item = mysql_query( $get_item, $con );

        $count_item = mysql_num_rows($run_item);

        $t = $count_item;

    $l = $t-1;
 $total_value=0;
     
       
for ($j=0; $j < $t ; $j++) { 

 
  $total_value += $test[$j];
  
}
     


     
?>       
        
     
    
      

<div class="panel panel-default" >
    
   
<div style="padding: 20px 20px 20px 20px; float: right; ">

<h3>  Sub Total: ₹

<?php

echo $total_value; 

?>

  </h3>
  
 
     
     <br>
     <br>

     

    

 

</div>
</div>

  </form>





                </div>
              </div>
            </li>
            <li id="slide3">
              <h3 style= "color:black;"><img src="images/discount.png">&nbspOFFERS</h3>
              <div>
                <div >
                  <br>
                  <br>
              
                            
                                              <form class="form-horizontal"  method="post" action="" >


      <label   class="col-sm-12" >We'll count your number of backlogs and give discount accordingly. </label>
      
      
         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Offers</button>

         <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Offers</h4>
        </div>
        <div class="modal-body">


  <table style="font-family: 'Muli', sans-serif;" align="center">

  <thead>

    <tr>
      <th style="color:#ffffff;font-size:18px;text-align:center;background-color: #535882"> Our Offers &#x2714;</th>
      <th style="text-align:center;background-color: #E8E7E7;font-size:18px; ">Backlogs/Percentage</th>
   
    </tr>
  </thead>
  <tbody style="">
    <tr style="">
      <td>Discount of 5 % on the total bill.<br>
      <span style="font-size:12px;">
      </span>
      </td>
      <td style="font-size: 18px; ">Category-1<br>(If you have 1-3 Backlogs.)</td>
     
    </tr>
    <tr>
      <td>Discount of 7.5 % on the total bill.<br>
      <span style="font-size:12px;">
     
      </span>
      </td>
      <td style="font-size: 18px; ">Category-2<br>(If you have more than 3 Backlogs.)</td>
     
    </tr>
    <tr>
      <td>Discount of 10 % on the total bill.<br>
      <span style="font-size:12px;">
      
      </span>
      </td>
      <td style="font-size: 18px; ">Category-3<br>(If you have a year back.)</td>
   
    </tr>
    <tr>
      <td>Discount of 12.5 % on the total bill.</td>
      <td style="font-size: 18px; ">Category-4<br>(If you got your first backlog in 5th, 6th, 7th and 8th Semester.)</td>
     
    </tr>


     <tr>
      <td>Discount of 3.5 % on the total bill.</td>
      <td style="font-size: 18px; ">Category-5<br>(If your aggregate percentage is less than 60.)</td>
    
    </tr>
     <tr>
      <td>Discount of 2.5 % on the total bill.</td>
      <td style="font-size: 18px; ">Category-6<br>(If your aggregate percentage is less than 65.)</td>
      
    </tr>
     <tr>
    <td>Discount of 4.5 % on the total bill.</td>
      <td style="font-size: 18px; ">Category-7<br>(If your aggregate percentage is more than 75.)</td>
     
    </tr>

    

    <!-- <tr>
      <td>Readymade project<br>
      <span style="font-size:12px;">
      Ready to use fully working project duly tested. Just plug in and it works.</span>
      </td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/nhi.png"></td>
      <td><img src="images/nhi.png"></td>
    </tr>-->






  </tbody>
</table>



        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      
      
         
      
      
      
      
      
      
    <div class="form-group">
    
    <br>


      <label class="control-label col-sm-6" >Do you have any backlog ? (5 % discount after verification) </label>
      <div class="col-sm-6">
        <input type="checkbox" id="yourBox" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"   >Roll No:</label>
      <div class="col-sm-10">
        <input type="text" name="c_roll" class="form-control" id="yourText" value="<?php echo $croll; ?>" disabled />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"   >Offer category:</label>
      <div class="col-sm-10">
        <select id="yourText3" name="offcat" disabled />
        <option><?php echo $oc;?></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"  >University:</label>
      <div class="col-sm-10">
        <input type="text" name="c_univ" class="form-control" id="yourText1" value="<?php echo $cuniv; ?>" disabled />
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Results link</label>
      <div class="col-sm-10">
        <input type="url" name="c_link" class="form-control" id="yourText2"  value="<?php echo $cres; ?>" disabled />
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="disc"  type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </form>
  

 



<?php

if (isset($_POST['disc'])) {

  $cusom_id = $c_id;
  
$roll = $_POST['c_roll'];
$univ= $_POST['c_univ'];
$link = $_POST['c_link'];
$ofc = $_POST['offcat'];


 $update_backlog="UPDATE customers SET custom_roll='$roll', custom_univ = '$univ' , custom_result ='$link', offer_cat='$ofc' WHERE customer_id ='$c_id'  ";


$run_bb= mysql_query( $update_backlog, $con );



if ($run_bb) {
  echo "<script>alert('Your amount has been reduced')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  

 
}

$tv = $total_value - ($total_value * (0.05));
echo $tv; 

}




?>




  
 
     
     <br>
     <br>

     

    

 




    <script>
                                
                                document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
     document.getElementById('yourText1').disabled = !this.checked;
       document.getElementById('yourText2').disabled = !this.checked;
        document.getElementById('yourText3').disabled = !this.checked;
};
                              </script>

 

























                </div>
              </div>
            </li>
            <li id="slide4">
              <h3 style= "color:black;"><img src="images/gm.png">&nbspPAY</h3>
              <div>


<br>
<br>
                      


<div  style=" font-family: 'Muli', sans-serif;  padding: 0px 0px 10px 0px";>
  

 
  <form action="  "  method="post" enctype="mutlipart/form-data" > 
  
  
    
   
    <tr align="center">
      <td> <input type="email"  name = "c_mail" placeholder ="Enter your email" required/> </td>
    </tr>



    <tr align="center">
      <td> <input type="submit"  name="c_order" value = "Confirm Your Order"> </td>
    </tr>


     

</form>





   </div>

  






<?php
if (isset($_POST['c_order'])) {

  $em = $_POST['c_mail'];

  $user_email = $_SESSION['customer_email'];

  if($total_value==0){

    echo "<script>alert('Your cart is empty !')</script>";
  echo "<script>window.open('cart.php','_self')</script>";   


  }

  else

  if($em == $user_email){
  




$ip =getIp();



$sel_cart = "SELECT * FROM cart WHERE ip_add='$ip' ";

$run_cart_add = mysql_query( $sel_cart, $con );


while ($row_cart = mysql_fetch_array($run_cart_add)){

  $p_id = $row_cart['p_id'];
  $qty = $row_cart['qty'];
  $pxq = $row_cart['pxq'];
  
 echo $p_id. $pxq ;



$sel_order = "INSERT  INTO orders (p_id, c_id , qty, pxq) VALUES ('$p_id','$user_email','$qty', '$pxq')";

$run_order = mysql_query( $sel_order, $con );

echo $ip . $p_id;

$delete_cart = "DELETE  FROM cart WHERE  ip_add = '$ip' and p_id ='$p_id'";

$run_delete_cart = mysql_query( $delete_cart, $con );

echo "Error: 1"  . "<br>" . mysql_error($con);

  



}

echo "<script>alert('Order placed !')</script>";
  echo "<script>window.open('account.php?my_orders','_self')</script>";   

}
else

{
  echo "<script>alert('Wrong Email !')</script>";
}


}





?>

 
  


















              <div class="panel panel-default" >
    
   
                           <div style="padding: 20px 20px 20px 20px; float: right; ">

                       <h3>  Sub Total: ₹ 

                         <?php

                      echo $total_value; 

                        ?>

                           </h3>
  
 
     
     <br>
     <br>

     

    

 

</div>
</div>




              </div>
            </li>
            <li id="slide5">
              
            </li>
          </ul>
          <nav>
            <a href="#slide1" ><span><img src="images/sc.png">&nbsp Address</span></a>
            <a href="#slide2" ><span><img src="images/checklist.png">&nbsp &nbspSummary</span></a>
            <a href="#slide3" ><span><img src="images/discount.png">&nbspDiscounts</span></a>
            <a href="#slide4" ><span><img src="images/gm.png">&nbspPayments</span></a>
            
          </nav>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="styles/placeorder/js/jquery.cbpContentSlider.min.js"></script>
    <script>
      $(function() {
        /*
        - how to call the plugin:
        $( selector ).cbpContentSlider( [options] );
        - options:
        {
          // default transition speed (ms)
          speed : 500,
          // default transition easing
          easing : 'ease-in-out',
          // current item's index
          current : 0
        }
        - destroy:
        $( selector ).cbpContentSlider( 'destroy' );
        */

        $( '#cbp-contentslider' ).cbpContentSlider();
      });
    </script>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php

include("public/footer.php");

?>
















  </body>
</html>


  <?php
if (isset($_POST['update'])) {


  $ip= getIp();
$customer_id = $c_id;
  

  $c_name= $_POST['c_name'];


 
  

  $c_contact= $_POST['c_contact'];

  $c_address= $_POST['c_address'];



$update_c= "UPDATE customers SET customer_name='$c_name',   customer_contact='$c_contact', customer_address='$c_address' WHERE customer_id ='$customer_id'  ";


$run_c= mysql_query( $update_c, $con );



if ($run_c) {
  echo "<script>alert('Your account is updated')</script>";
  

  echo "<script>window.open('checkout.php','_self')</script>";
}


}


?> 

















<?php

}

?>




