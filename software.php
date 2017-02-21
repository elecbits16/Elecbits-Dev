<!DOCTYPE html>
<?php
include("functions/functions.php");

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


<?php

    if ( isset($_GET['soft_id']) ) {
      
    $product_id= $_GET['soft_id'];

    $get_pro = "SELECT * FROM software WHERE soft_id ='$product_id'";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $software_id=$row_pro['soft_id']; 
   $software_title= $row_pro['soft_title'];
  
   $link1 = $row_pro['pic1'];
   $link2 = $row_pro['output1'];
   $link3 = $row_pro['output2'];  
   $link4 = $row_pro['output3'];
   $soft_desc = $row_pro['soft_desc'];
   $soft_code= $row_pro['soft_coding'];
   $soft_person = $row_pro['soft_person_name'];
   $soft_profile = $row_pro['soft_profile'];



?>



<div class="col-lg-12 col-xs-12 "  style="padding-top: 20px; " >

<div class="col-lg-6 col-xs-12 " style=" padding: 0px 10px 0px 0px ; " >
  
<strong style="font-size:25px;"> <?php echo $software_title;  ?></strong>


</div>





</div>

<br>

<div class="col-lg-12 col-xs-12  hidden-xs"  style="height:1px; background:#fff; border-bottom:1px  solid #000; padding-top: 10px;  "    ></div>

<br>
 


<div class="col-lg-12 col-xs-12" >


<div class="col-lg-12 col-xs-12 " style=" padding: 30px 0px 10px 0px ; " >

<div class="col-lg-4 col-xs-12">
  
<span style="padding-right: 0px;  font-size: 14px; ">This project is uploaded by <strong><?php echo "$soft_person" ; ?></strong> </span>

</div>



<div class=" col-lg-8 " style="border-style: solid; border-color: white; border-radius: 10px;  padding-right: 0px; " >





 



  
 <a href="<?php echo $soft_profile; ?>"><i style="padding-right: 30px; "><img src="images/facebook.png"></i></a>
 












</div>

</div>

<br>

<div class="col-lg-12 col-xs-12 "  style="height:1px; background:#fff; border-bottom:1px  solid #fff; "    > </div>

<br>

<div class="col-lg-12 col-xs-12 hidden-xs " >

<div class="col-lg-4  ">
<br>


<img src="<?php  echo $link1;  ?>"  width='300' height='200' ">
  

</div>
<div class="col-lg-8 col-xs-12 " style="padding-top: 20px;">
  
 
<strong style="font-size: 25px; ">Description</strong>


<?php echo $soft_desc; ?>

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
  
  <img src="admin_area/product_img/<?php  echo $link1;  ?> " width='300' height='200' ">


</div>



</div>

<br>
<br>


<div class="col-lg-12 col-xs-12"  >
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
  
<hr>
<strong style="font-size: 25px; ">Description</strong>

  <hr> 
  <hr> 

<?php echo $soft_desc; ?>

  <hr> 

</div>








  

</div>

<div class="col-lg-12 col-xs-12"  >
  
<div class="col-lg-12 col-xs-12 hidden-xs ">
<hr>
<strong style="font-size: 25px; ">Coding</strong>
<hr>
<br>

<?php echo $soft_code; ?>
<br>
  



</div>
<div class="col-lg-12 col-xs-12 hidden-lg " style="padding-top: 20px;">
<hr>
<strong style="font-size: 25px; ">Coding</strong>
<hr>
<br>
  
<?php echo $soft_code; ?>

<br>


</div>






  
</div>

<div class="col-lg-12 col-xs-12"  >
<div class="hidden-xs">
<hr>
<strong style="font-size: 25px; ">Output</strong>
<hr>
<br>
<br>
  </div>
<div class="col-lg-4 col-xs-12 hidden-xs ">

  
<img src="admin_area/product_img/<?php echo $link2 ; ?>" width='350' height='200'" >


</div>
<div class="col-lg-4 col-xs-12 hidden-xs ">

  
<img src="admin_area/product_img/<?php echo $link3 ; ?>" width='350' height='200'" >


</div>
<div class="col-lg-4 col-xs-12 hidden-xs ">

  
<img src="admin_area/product_img/<?php echo $link4 ; ?>" width='350' height='200'" >


</div>
<div class="col-lg-8 col-xs-12 hidden-lg " style="padding-top: 20px;">
<hr>
<strong style="font-size: 25px; ">Output</strong>
<hr>
<br>
  
<img src="admin_area/product_img/<?php echo $link2 ; ?>" width='350' height='200'" >
<br><br>
<img src="admin_area/product_img/<?php echo $link3 ; ?>" width='350' height='200'" >
<br><br>
<img src="admin_area/product_img/<?php echo $link4 ; ?>" width='350' height='200'" >


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