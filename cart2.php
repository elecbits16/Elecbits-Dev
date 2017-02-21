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

   

 

 
  
  
   

    <?php

    $total = 0;
    $single_price=0; 
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while ($p_price = mysqli_fetch_array($run_price)) {

       $pro_id = $p_price['p_id'];

       $qty2 = $p_price['qty'];

       $id = $p_price['id'];

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

      $single_price = $pp_price['product_price'] ;                
             

    ?>

  
  
  <div class="panel panel-default hidden-xs" >
    
    <div class="panel-body">
      
      <div class="col-lg-12 col-xs-12" style="border-style: solid;  border-color: grey ; padding: 5px 5px 5px 5px ; ">

      <div class= "col-lg-4 col-xs-12"  style="border-style: solid;  border-color: grey ; padding: 20px 20px 30px 20px ; "  >
         
        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="180" height = "200" />
        
      </div>

      <div class= "col-lg-8 col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 20px 10px 20px ; " >

       <strong style="font-size:25px;"><a href="details1.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a></strong>
         
      <div style="font-size:13px"><?php echo $pro_cat1; ?>,<?php echo $pro_cat2; ?>,  <?php echo $pro_cat3; ?> and  <?php echo $pro_cat4; ?> </div>

       <br>

       <a style="color:#0070FF;">ReadyMade Kit</a>: Plug and play set, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a><br>
        <a style="color:#05ad40;">Do It Yourself Kit</a>: Complete set of components, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a>
       
        <br>
        <strong style="font-size:25px;">₹ <?php echo $uv; ?></strong>
        
      </div>
      <div class="col-lg-8">
       <div class= "col-lg-6 col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 20px -50px 20px ; " >

   <form action=""  method="post" >      
       
        <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>
</form>
    </div>
    <div class= "col-lg-6 " style="border-style: solid;  border-color: white ; padding: 0px 20px 0px 20px ; " >
<form method="post" action=""> 
<?php echo $id ; ?>
          <input type="number" name="qtyy" value="<?php echo $qty2 ?>" size="1">   
        <button type="submit"  name="update[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $id; ?>" >Update Item</button>
</form>
    </div>
       
       </div>

        
      
     </div>
   
          

       
</div>
</div>

  

  <div class="panel panel-default hidden-lg">
    
    <div class="panel-body">

    <div class= "col-xs-12"   style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; " >

        <img src="admin_area/product_img/<?php echo $product_image ;?>" width="200" height = "200" />
        
      </div>
      
      <div class="col-xs-12" style="border-style: solid;  border-color: white ; padding: 0px 0px 0px 0px ; ">

      

      <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >

       <h3><?php echo $product_title; ?></h3>

        <div style="font-size:13px"><?php echo $pro_cat1; ?>,<?php echo $pro_cat2; ?>,  <?php echo $pro_cat3; ?> and  <?php echo $pro_cat4; ?> </div>

       <br>

       <a style="color:#0070FF;  ">ReadyMade Kit</a>: Plug and play set, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a><br>
        <a style="color:#05ad40;">Do It Yourself Kit</a>: Complete set of components, 1 pendrive(all softwares and explanatory documents),<a style="color:red;" > 1 Special Gift </a>
       
        <br>
        <strong style="font-size:25px;">₹ <?php echo $uv; ?></strong>

        

        
      </div>
       <div class= "col-xs-12" style="border-style: solid;  border-color: white ; padding: 10px 10px 10px 10px ; " >

        <button type="submit"  name="delete_cart[]" style="padding : 10px 10px 10px 10px; background-color: #0070FF; color: white; font-size:12px; " value=" <?php echo $pro_id; ?>" >Remove Item</button>

        
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
            
            echo "<script>window.open('cart2.php','_self')</script>";
          }


        }

        
      }



      

     ?>
  
      
     
<?php
 


$res =  $uv * $qty2;
echo $res;
$xq_query = "UPDATE cart SET xq='$res' WHERE  ip_add= '$ip' and id = '$id'";
$run_xq_query = mysqli_query($con, $xq_query);


if (isset($_POST['update'])) {
  
$qtyy = $_POST['qtyy'];

$pxqq = $uv * $qty2;




foreach ($_POST['update'] as $update_id ) {

$qty_query="UPDATE cart SET qty = '$qtyy' WHERE  ip_add= '$ip' and id = '$update_id' ";
          
 $run_qty_query = mysqli_query(  $con , $qty_query );

  if (($run_qty_query)) {
            
            echo "<script>window.open('cart2.php','_self')</script>";
          }
 else {
    echo "Error: " . "<br>" . mysqli_error($con);

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
    
   
<div style="padding: 20px 20px 20px 20px; float: right; ">

<h3><strong> Sub Total: ₹

<?php

echo   $res_total; 

}
?>

 </strong> </h3>
  
 
       
      <div style="padding: 0 10px 10px 10px; " >

    

<?php if ($t >0) {
  
 ?>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Checkout</button>
   
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Proceed to payment.</h3>
        </div>
        <div class="modal-body">
          <p></p>
          <a href="checkout1.php">Let's go</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php 
}
  ?>
</div>  


 <button> <a href="index.php" style="text-decoration: none; color: black; ">Continue shopping </a> </button>   
 

</div>
</div>




  <div  style="padding: 20px 20px 20px 20px; float: right; ">


  
  
  </div> 



  

  



 

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