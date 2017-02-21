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

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits | Need a project</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
   <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="styles/css/table.css">
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

<!--Logo bar end-->

<!--Menu bar start-->

   <!-- Menu bar end--> 

<div class="content">

<div class="container">

<div  style="font-size: 20px; padding: 0px 0px 0px 0px;" > <img src="images/logo.png" width="170" height="30" ></div> 
<br>
<hr>
  <div><strong>&nbspORDER SUMMARY</strong></div>
  <hr>
              <div>
                <div >
                   <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="mutlipart/form-data" > 
  
  
   

    <?php

    $total = 0;
    $single_price=0; 
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while ($p_price = mysqli_fetch_array($run_price)) {

        $xq = $p_price['xq'];
         
       $pro_id = $p_price['p_id'];

       $qty2 = $p_price['qty'];

       $uv = $p_price['uv'];

       $pro_price = "SELECT * FROM products WHERE product_id='$pro_id' ";

       $run_pro_price = mysqli_query($con, $pro_price);

       while ($pp_price=mysqli_fetch_array($run_pro_price)) {
           
           $product_price =  array($pp_price['product_price']);

           $product_title = $pp_price['product_title'];

           $product_image = $pp_price['product_image'];

           $pro_cat1 = $pp_price['product_cat1'];

           $pro_cat2 = $pp_price['product_cat2'];
           $pro_cat3 = $pp_price['product_cat3'];
           $pro_cat4 = $pp_price['product_cat4'];
          
          $pro_high = $pp_price['product_high'];

          
                  
             

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

      
        
        <strong style="font-size:25px;">₹ <?php echo $xq; ?>(<?php  echo $qty2 ?>)</strong>   <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>
        
      </div>
       <div class= "col-lg-2 col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >
       

        
       
      

    </div>
       
       

        
      
     </div>
   
          

       
</div>
</div>

  

  <div class="panel panel-default hidden-lg">
    
    <div class="panel-body">
      
      <div class="col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; ">

      <div class= "col-xs-4"   style="border-style: solid;  border-color: #D0D3D4 ; padding: 7px 7px 7px 7px ; " >

        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="80" height = "80" />
        
      </div>

      <div class= "col-xs-8" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       <strong style="font-size:15px;" class="word-break: break-word; " ><?php echo $product_title; ?></strong> 
       
        &nbsp<strong style="font-size:20px;">₹ <?php echo $xq; ?>(<?php  echo $qty2 ?>)</strong> 
       
      </div>
       <div class= "col-xs-8" style="border-style: solid;  border-color: white ; padding: 0px 10px 0px 10px ; " >

       
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

         

          $run_delete = mysqli_query($con, $delete_product);
          $run_drop = mysqli_query($con, $drop_table);
          $run_add_table = mysqli_query($con, $add_table);

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

        $get_item = "SELECT SUM(xq) from cart WHERE ip_add='$ip' ";

        $result = mysqli_query($con, $get_item);

        
      while($row = mysqli_fetch_array($result))

      {
  $res_total= $row['SUM(xq)'];
  



     
?>       
        
     
    
      

<div class="panel panel-default" >
    
   
<div style=" float: right; ">

<h3>  Sub Total: ₹

<?php

echo $res_total; 

}
?>

  </h3>
  
 
     
     <br>
     <br>

     

    

 

</div>
</div>

  </form>






<?php


$user= $_SESSION['customer_email'];

$get_customer = "SELECT * FROM customers WHERE customer_email='$user'";

$run_get_customer=mysqli_query($con, $get_customer);

while ($row_customer = mysqli_fetch_array($run_get_customer)) {

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

$offcat = $row_customer['offer_cat'];

$dd = $row_customer['ddate'];





?>






















 
<form class="cbp-mc-form" method="post" action=" " >
  <br>
<hr>
<div  style="font-size: 20px; padding: 0px 0px 0px 0px;" ><strong>  CHECKOUT FORM </strong></div> 
<hr>

  <div class="col-lg-6">

    <label for="first_name">Name</label>
    <input type="text" id="first_name" name="c_name"  value="<?php echo $name; ?>" required/>
    
 
    
    <label>Choose a deliver date   <span style="font-size: 15px;"> (Closest date would be <?php echo date('d-m-Y', strtotime("+2 day")); ?>)</span> : </label>
<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+2 day")); ?>' />
    
        
    
  </div>
  <div class="col-lg-6">
  
    <label for="phone">Contact Number</label>
    <input type="text" id="phone" name="c_contact" value="<?php echo $contact; ?>"  required/>


  
  </div>

  <div class="col-lg-12">


    <label for="affiliations"> Address</label>
    <textarea id="affiliations" name="c_address"  required/><?php echo $address; ?> </textarea>

   </div>   

    
  
  



 <div class="col-lg-12">
 
  <br>
<hr>
 <div  style="font-size: 20px; padding: 0px 0px 0px 0px;" ><strong>DISCOUNT FORM</strong></div> 
    <label style="font-size: 18px; ">We'll count your number of backlogs and give discount accordingly. &nbsp &nbsp
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Offers</button> </label>
     <hr>
      <label style="font-size: 16px; ">Do you have any backlog ? (Discounts upto 12.5% after verification)
      
      <label>
         <div  class="col-lg-4" style="font-size: 14px;"> Tick the box to  fill the following fields</div>
       <div  class="col-lg-1" style="font-size: 14px;">  <input type="checkbox" id="yourBox" /></div>


        </div>  


    <div class="col-lg-6">
  
    <label for="phone">Roll No</label>
    <input type="text"  id="yourText" name="c_roll"  value="<?php echo $croll; ?>"  disabled/>

     <label for="phone">Offer Category</label>
    <select  name="c_cat"  id="yourText1" disabled/>
        <option><?php echo $offcat;?></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        </select>


  
  </div>
   <div class="col-lg-6">
  
    <label for="phone">University</label>
    <input type="text"  name="c_univ" id="yourText2"  value="<?php echo $cuniv; ?>"   disabled/>


  
  </div>

    <div class="col-lg-12">
  
    <label for="phone">Result link</label>
    <input type="url"  name="c_link"  id="yourText4" value="<?php echo $cres; ?>"  disabled/>


  
  </div>

     <div class="col-lg-12">
 
  <br>
<hr>
 <div  style="font-size: 20px; padding: 0px 0px 0px 0px;" ><strong>PAYMENT METHOD</strong></div> 
  <hr>

        </div> 

<br>
<br>

 <div class="col-lg-12">

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cash on delivery</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
         <label for="phone">Confirm your email:</label>
            <input type="email"  name="c_mail"  required/>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Online Payment</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><a href="http://paytm.com"><img src="images/paytm.png" width="50"></a> us the total amount on 8860394267. (Get 10% discount on total bill )</div>
      </div>
    </div>
  
  
</div>
</div>



<?php } ?>


    
  </div>

</div>













 
 <div style="text-align: center; ">
 <br>
 <br>
 <button class="btn btn-success" style="font-size: 24px;" type="submit" name="update">SUBMIT</button>
  </div>
  
</form>

</div>
</div>
<br>

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->
<?php
if (isset($_POST['update'])) {


  $ip= getIp();
$customer_id = $c_id; 

  $c_name= $_POST['c_name'];

 $ddate = $_POST['ddate'];

  $c_contact= $_POST['c_contact'];

  $c_address= $_POST['c_address'];


$roll = $_POST['c_roll'];
$univ= $_POST['c_univ'];
$link = $_POST['c_link'];

$ccat = $_POST['c_cat'];


$em = $_POST['c_mail'];

  $user_email = $_SESSION['customer_email'];

  if($res_total==0){

    echo "<script>alert('Your cart is empty !')</script>";
  echo "<script>window.open('cart.php','_self')</script>";   


  }


  if($em == $user_email){

$ip =getIp();

$sel_cart = "SELECT * FROM cart WHERE ip_add='$ip' ";

$run_cart_add = mysqli_query($con, $sel_cart);


while ($row_cart = mysqli_fetch_array($run_cart_add)){

  $p_id = $row_cart['p_id'];
  $qty = $row_cart['qty'];
  $xq = $row_cart['xq'];


  
 $sel_order= "INSERT  INTO orders (p_id, c_id , qty, pxq) VALUES ('$p_id','$user_email','$qty', '$xq')";

$run_order = mysqli_query($con, $sel_order);

echo $ip . $p_id;

if ($run_order) {
  

$delete_cart = "DELETE  FROM cart WHERE  ip_add = '$ip' and p_id ='$p_id'";

$run_delete_cart = mysqli_query($con, $delete_cart);

echo "Error: 1"  . "<br>" . mysqli_error($con);


$update_c= "UPDATE customers SET customer_name='$c_name',   customer_contact='$c_contact', customer_address='$c_address', custom_roll='$roll', custom_univ ='$univ' , custom_result='$link', offer_cat='$ccat', ddate = '$ddate'  WHERE customer_id ='$customer_id'    ";


$run_c= mysqli_query($con, $update_c);


echo "Error: 1"  . "<br>" . mysqli_error($con);



if ($run_c) {
  echo "<script>alert('Your account is updated')</script>";
  

  echo "<script>window.open('pc1.php','_self')</script>";


 
}



}



  



}













}


}


?> 






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


 <script>
                                
                                document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
     document.getElementById('yourText1').disabled = !this.checked;
       document.getElementById('yourText2').disabled = !this.checked;
       document.getElementById('yourText4').disabled = !this.checked;

};
                              </script>
























        
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>






</body>
</html>