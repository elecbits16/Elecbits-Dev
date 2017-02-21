<!DOCTYPE html>
<?php
include("functions/functions.php");

?>

<?php

    if ( isset($_GET['pro_id']) ) {
      
    $product_id= $_GET['pro_id'];

    $get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_cat2 = $row_pro['product_cat2'];
        $pro_cat3 = $row_pro['product_cat3'];
        $pro_cat4 = $row_pro['product_cat4'];
        $pro_price = $row_pro['product_price'];
        $pro_desc= $row_pro['product_desc'];
        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        $pro_diy = $row_pro['product_diy_price'];
        $pro_high = $row_pro['product_high'];
        $pro_hs = $row_pro['product_hs'];
        $pro_block = $row_pro['product_block'];
        $pro_doc = $row_pro['product_doc'];
        $pro_keyword = $row_pro['product_keywords'];


?>


<html>
<head>  <!-- Links of sheet -->
  <title><?php echo $pro_title; ?> | Best prices in India | Elecbits </title>
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

include("public/algobar.php");

?>


<!--Panel1 algo bar end-->
<div class="tag126" class="col-lg-12 bg-primary">


     <!-- Sidebar starts-->
     <div class="hidden-lg ">
<?php

include("public/sidebar.php");

?>
  
    
  
</div>





<div class="col-lg-12 col-xs-12 "  style="padding-top: 20px; " >

<div class="col-lg-6 col-xs-12 " style=" padding: 0px 10px 0px 0px ; " >
  
<strong style="font-size:25px;"> <?php echo $pro_title;  ?></strong>


</div>




<div class="col-lg-6 col-xs-12  " style=" padding: 10px 10px 0px 0px ; " >


  
 <a href="https://www.facebook.com/elecbits7/"><i style="padding-right: 30px; "><img src="images/facebook.png"></i></a>
 
<a href="https://twitter.com/elecbits16"><i c style="padding-right: 30px; "><img src="images/twitter.png"> </i></a>

<a href="https://www.instagram.com/elecbits/"><i c style="padding-right: 30px; "><img src="images/instagram.png"> </i></a>






</div>

</div>

<br>

<div class="col-lg-12 col-xs-12  hidden-xs"  style="height:1px; background:#fff; border-bottom:1px  solid #000; padding-top: 10px;  "    ></div>

<br>
 


<div class="col-lg-12 col-xs-12" >


<div class="col-lg-12 col-xs-12 " style=" padding: 30px 0px 10px 0px ; " >

<div class="col-lg-4 col-xs-12">
  
<span style="padding-right: 0px;  font-size: 14px; ">This project is also present in <strong><?php echo "$pro_cat1, $pro_cat2, $pro_cat3 and $pro_cat4  " ; ?></strong> </span>

</div>



<div class=" col-lg-8 hidden-xs " >



<div class="col-lg-3 col-xs-3  hidden-xs" style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <!--<div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/freeshipping.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  FREE SHIPPING IN NCR. </span>
 </div>-->
</div>


 
<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/freeshipping.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  FREE SHIPPING IN NCR. </span>
 </div>
</div>

<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/cod.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  CASH ON DELIVERY. </span>
 </div>
</div>

<div class="col-lg-3 col-xs-3  " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; ">

 <div class="col-lg-4" style="padding: 0px 0px 0px 0px; " >
<a href=""><img src="images/smiley.png" style="padding: 10px 0px 10px 0px; "></a>
</div> 
<div class="col-lg-8" style="padding: 10px 0px 0px 0px; ">
<span  style="font-size: 12px; " >  100% CUSTOMER SATISFACTION </span>
 </div>
</div>

</div>


</div>

</div>

<br>

<div class="col-lg-12 col-xs-12 "  style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>

<div class="col-lg-12 col-xs-12 hidden-xs " >

<div class="col-lg-4  ">


<img src="admin_area/product_img/<?php  echo $pro_image;  ?> " width='300' height='200' ">
  

</div>
<div class=" col-lg-8  " >

 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #05ad40; background-color: #05ad40;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 10px 10px 5px 45px; text-align:  center; color: white ">Do it Yourself</span>
 </div>




<div  style="border-style: solid; border-color: #05ad40;   padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 14px; " style="text-align: center; " >

If you are an enthusiast.

</span>
<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">What is DIY?</button>
   
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do it yourself</h4>
        </div>
        <div class="modal-body">
          <p>Do it yourself pics and models</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_diy;  ?>

 <a href='index.php?diy_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>

<br>
<br>

 </div>
</div>
</div>


 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #ff4646; background-color: #ff4646;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 10px 10px 5px 45px; text-align:  center; color: white; ">ReadyMade Kit</span>
 </div>




<div  style="border-style: solid; border-color: #ff4646; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  READYMADE PROJECT

<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal44">Ready to buy</button>
   
   <div class="modal fade" id="myModal44" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Readymade Kit</h4>
        </div>
        <div class="modal-body">
          <p>Do it yourself pics and models</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

 </span>

<span  style="font-size: 14px; " style=" padding: 20px 10px 10px 10px; " >

₹  <?php echo $pro_price; ?>

 <a href='index.php?rp_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>
 </div>
</div>
</div>


 <div class="col-lg-4">
<div  style="border-style: solid; border-color: #0070FF  ;  background-color: #0070FF ;  padding: 10px 10px 10px 0px; ">

 
<span  style="font-size: 18px; padding: 10px 10px 5px 45px; text-align:  center; color: white; ">Synopsis</span>
 </div>




<div  style="border-style: solid; border-color: #0070FF ; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  SYNOPSIS </span>

<br>

<span  style="font-size: 12px; " >  

<a  href="admin_area/doc/<?php  echo $pro_doc; ?>">Download</a>

</span>
 </div>
</div>
</div>



</div>



</div>


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>


</div>

<br>

<br>


<!-- Main product panel end -->


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>


<div class="col-lg-12 col-xs-12 hidden-lg " >

<div class="col-xs-12" > 
  
  <img src="admin_area/product_img/<?php  echo $pro_image;  ?> " width='300' height='200' ">


</div>

<div class="col-xs-12  " style="padding: 20px 0px 20px 0px; " >
<div class="panel-group" id="accordion">
    <div class="panel panel-default" >
      <div class="panel-heading" style="background-color:#05ad40; border-style: solid; border-color: #05ad40; " >
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: white; " >Do it Yourself</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">

       

<div  style="border-style: solid; border-color: #05ad40;   padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 14px; " style="text-align: center; " >

If you are an enthusiast.

</span>
<div style="padding: 0 10px 10px 10px; " >
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">What is DIY?</button>
   
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do it yourself</h4>
        </div>
        <div class="modal-body">
          <p>Do it yourself pics and models</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_diy;  ?>

 <a href='index.php?diy_cart=<?php echo $pro_id; ?>' style='float:right';> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>


 </div>
</div>






        </div>
      </div>
    </div>



    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #ff4646; border-style: solid; border-color:  #ff4646; " >
        <h4 class="panel-title">   
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: white; " >Readymade Kit</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          <div  style="border-style: solid; border-color: #ff4646; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  READYMADE PROJECT </span>
<br>
<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >

₹  <?php echo $pro_price ; ?>

 <a href="index.php?rp_cart=<?php echo $pro_id; ?>" style="float:right";> <img src='images/buy.png' width='100' height='40' /> </a>

</span>
<br>
<br>
 </div>
</div>







        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #0070FF; border-style: solid; border-color:  #0070FF; ">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: white; ">Synopsis</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">


        <div  style="border-style: solid; border-color: #0070FF; padding-right: 0px; ">

 
<div  style="padding: 10px 0px 0px 10px; ">
<span  style="font-size: 12px; " >  <a  href="admin_area/doc/<?php  echo $pro_doc; ?>">Download</a> </span>
<br>
<span  style="font-size: 14px; " style=" padding: 0px 10px 10px 10px; " >



</span>
 </div>
</div>




        </div>
      </div>
    </div>
  </div>
</div>

</div>

<br>
<br>


<div class="col-lg-12 col-xs-12"  >
  
<div class="col-lg-8 col-xs-12 hidden-xs" style="padding-top: 20px;">
  
  <hr>
<strong style="font-size: 25px; ">Description</strong>
<hr>

<?php echo $pro_desc; ?>

</div>

<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
  
<hr>
<strong style="font-size: 25px; ">Description</strong>

  <hr>  

<?php echo $pro_desc; ?>

</div>

<div class="col-lg-4 col-xs-12  hidden-xs " >
<br>
<br>

<strong style="font-size: 25px;  padding: 20px 0px -5px 0px; ">Easy Highlights</strong>
  <hr>


<?php  echo  $pro_high; ?>

</div>

<div class="col-lg-4 col-xs-12  hidden-lg " style="padding-top: 20px;"  >

<strong style="font-size: 25px; ">Easy Highlights</strong>
  <hr>


<?php  echo  $pro_high; ?>

</div>





  

</div>

<div class="col-lg-12 col-xs-12"  >
  
<div class="col-lg-8 col-xs-12 hidden-xs ">
<hr>
<strong style="font-size: 25px; ">Block Diagram</strong>
<hr>
<br>
<br>
  
<img src="admin_area/block_diagram/<?php echo $pro_block; ?>" width='500' height='300'" >


</div>
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
<hr>
<strong style="font-size: 25px; ">Block Diagram</strong>
<hr>
<br>
  
<img src="admin_area/block_diagram/<?php echo $pro_block; ?>" width='350' height='200'" >


</div>

<div class="col-lg-4 col-xs-12 hidden-xs" >
  
<strong style="font-size: 25px; ">Hardware and software</strong>
<hr>
<?php echo $pro_hs; ?>
</div>

<div class="col-lg-4 col-xs-12 hidden-lg" style="padding-top: 20px; ">

  <strong style="font-size: 25px; ">Hardware and software</strong>
  <hr>
<?php echo $pro_hs; ?>
</div>



  
</div>
  

</div>





</div>
</div>

<div class="container">

<div class="col-lg-12 hidden-xs" style="padding:20px 0px 0px 30px;">
  <hr>
<strong style="font-size: 25px; ">Ask Questions</strong>
<hr>


</div>

<div class="col-lg-12 hidden-lg" style="padding:20px 0px 0px 30px;">
  
<strong style="font-size: 25px; ">Ask Questions</strong>

<hr>

</div>

<div>
   <div style="padding:20px 0px 0px 30px;"  > 
           
                <form id="submit_form">  
                     <label>Email</label>  
                     <input type="text" name="email" id="name" class="form-control" />  
                     <br /> 
                     <label>Name</label>  
                     <input type="text" name="na" id="na" class="form-control" />  
                     <br />
                     <label>What are the difficulties you are facing while making your Electronic project ?</label>  
                     <textarea rows="4" cols="50" name="message" id="message" class="form-control"></textarea>
                     <br /> 
                     <label>Please provide your contact. </label>
                     <input type="number" name="pass" id="pass" class="form-control" /> 
                      
                      <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form>  
           </div>  

</div>

<div>
  


</div>

</div>


<br>

<div class="col-lg-12 col-xs-12  " style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>








<br>

<br>


</div>


 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->






<?php

}}

?>



</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();
           var na = $('#na').val();  
           var message = $('#message').val();
           var pass = $('#pass').val();
           
           if(name == ''|| message == ''|| na == '' )  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"join-us/insert.php ",  
                     method:"POST",  
                     data:{name:name, message:message, na:na, pass:pass},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 8000);  
                     }  
                });  
           }  
      });  
 });  
 </script>