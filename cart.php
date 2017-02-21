<!DOCTYPE html>
<?php
include("functions/functions.php");
session_start();


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
   <?php
//include("public/algobar.php");

  ?>

  <p>
    <br>
  </p>

  <!--Panel1 algo bar start-->
  
     <div class="tag126" class="col-lg-12 bg-primary">


   <!-- Sidebar starts-->
   <div  class="hidden-xs hidden-sm hidden-md " >
  <?php

include("public/sidebarlg.php");

  

  ?>
</div>

<div  class="hidden-lg " >
 <?php

include("public/sidebar.php");

 ?>
</div>

<!-- sidebar ends -->

<div id="tag91" class="col-lg-9 ">

<!-- Main product panel start -->



   <?php carts(); ?>

   

  <div class="panel panel-default"> 
 
    <div id="pb1" class="panel-body" style=" padding: 10px 0px 100px 20px; ">

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="mutlipart/form-data" > 
  
  <table align="center" width="700"  class="table-responsive"  >
    
    </br>
    <tr align="center">
      <th>Product(s)</th>
      <th>Remove</th>
     <th>Total Price</th>

    </tr>

    <?php

    $total = 0;
    $single_price=0; 
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while ($p_price = mysqli_fetch_array($run_price)) {

        $pxq =  $p_price['pxq'];

       $pro_id = $p_price['p_id'];

       $qty2 = $p_price['qty'];

       $single_price = $p_price['uv'];

       $pro_price = "SELECT * FROM products WHERE product_id='$pro_id' ";

       $run_pro_price = mysqli_query($con, $pro_price);

       while ($pp_price=mysqli_fetch_array($run_pro_price)) {
           
           $product_price =  array($pp_price['product_price']);

           $product_title = $pp_price['product_title'];

           $product_image = $pp_price['product_image'];

          $test[] = $single_price;

          foreach ($test as $key => $txn) {
             
            
            
       $pxq_price = "UPDATE cart SET pxq = '$txn' WHERE p_id='$pro_id' and ip_add= '$ip' ";
            
       $run_pxq_price = mysqli_query(  $con , $pxq_price  );
       
}
                      
            

    ?>

    <tr  >
  

    

       <td><?php echo $product_title; ?><br>
     <!--  <img src="admin_area/product_img/<?php //echo $product_image ;?>" width="60" height = "60" /> -->
      </td>
     
       
      <td> <button type="submit" name="delete_cart[]" style="padding : 10px 10px 10px 10px; " value=" <?php echo $pro_id; ?>" >Remove Item</button></td>
     

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

<td>
<?php

$ip = getIp();

        $get_item = "SELECT * FROM cart WHERE ip_add='$ip'";

        $run_item = mysqli_query($con, $get_item);

        $count_item = mysqli_num_rows($run_item);

        $t = $count_item;

    $l = $t-1;
 $total_value=0;
     
       
for ($j=0; $j < $t ; $j++) { 

  

  echo $test[$j];

  $total_value += $test[$j];
  
}
     


     
       
        
     
    
      


?>


</td>
    </tr>



  <tr align="right">

  
  <td colspan="5"> <b> Sub Total:

<?php


  


echo $total_value; 

?>
 

 
 




  </b>
   <td> 




     </td> 

  </tr>



  <tr align="center" >
    
     <td>  <button> <a href="index.php" style="text-decoration: none; color: black; ">Continue shopping </a> </button>  </td>
    <td>  <button> <a href="checkout.php" style="text-decoration: none; color: black; ">Checkout </a></button>  </td>
  </tr>
  </table>

  </form>

  
      






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
<?php

include("public/footer.php");

?>


<!--footer end-->

</div>








</body>
</html>