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
  
  <link rel="stylesheet" type="text/css" href="styles/rent/css/style.css">
  <script type="text/javascript" src="styles/rent/js/jquery-2.1.1.min.js" ></script>
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
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
 
  
  
     <!--Panel1 algo bar end--> 


     <div class="tag126" class="col-lg-12 bg-primary">

     <!-- Sidebar begins-->
     
 

<!-- Sidebar begins-->
<!-- Main product panel start -->


<div  class="col-lg-12 ">




	<div class="container">
	<h1>Rent a project.</h1>

<br>

<br>
		
		<div class="container">
			<div class="stepsForm">
				<form method="post"  action="" >
					<div class="sf-steps">
						<div class="sf-steps-content">
							<div>
								<span></span> Profile
							</div>
							<div>
								<span></span> Product Deltails
							</div>
							<div>
								<span></span> Place
							</div>
							
						</div>
					</div>                
					<div class="sf-steps-form sf-radius"> 
						
						<ul class="sf-content"> <!-- form step one --> 
							 <li>
								<div class="sf_columns column_3">
									<input type="text" name="namee" placeholder="Name" >
								</div>
								<div class="sf_columns column_3">
									<input type="tel" placeholder="Phone" data-number="true" >
								</div>
								
							 </li>
							 <li>
							 <div class="sf_columns column_3">
									<input type="text" name="fb" placeholder="Facebook link" >
								</div>
								
								<div class="sf_columns column_3">
									<input type="email" placeholder="Email"  data-email="true">
								</div>
								
							</li>
							<li>
								<div class="sf_columns column_3">
									<div class="sf-radio">
										Gender :  
										<label><input type="radio" value="M" name="gender" data-required="true"><span></span> Female</label>
										<label><input type="radio" value="F" name="gender" data-required="true"><span></span> Male</label>
									</div>
								</div>

								
								
							 </li>
							 <li>

							 <div class="sf_columns column_3">
									<input type="text" name="name" placeholder="College" >
								</div>

								<div class="sf_columns column_3">
									<input type="text" name="name" placeholder="Course" >
								</div>

						  
							 </li>

							 <li>
							 	  <div class="sf_columns column_3">
									<label class="sf-select">
										<select name="country" >
											<option value="" selected="selected" >Your Location</option>
											<option value="de">New Delhi</option>
											<option value="en">Noida</option>
											<option value="us">Gurgaon</option>
                                            <option value="us">Ghaziabad</option>
                                            <option value="us">Outside NCR</option>
										</select>
										<span></span>
									</label>
								</div>


							 </li>
							 <li>
								<div class="sf_columns column_6">
									<textarea placeholder="Address" name="ADDRESS" ></textarea>
								</div>
							 </li>
							 
						</ul>

						   
						<ul class="sf-content"> <!-- form step two --> 
							 <li>
								<div class="sf_columns column_3">
									<label class="sf-select">
										<select name="country" data-required="true" >
											<option value="" selected="selected" >Choose a category</option>
											 <?php 

        $get_cats = "select * from categories";
    $run_cats = mysqli_query($con,$get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

        
          
        echo "<option><strong>$cat_title<strong></option>";
         
        
     
        

    } ?>
       
										</select>
										<span></span>
									</label>
								</div>
								<div class="sf_columns column_3">
									<label class="sf-select">
										<select name="country" data-required="true">
											<option value="" selected="selected" >Choose a project.</option>
											
 <?php 

        $get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);


    while ($row_pro = mysqli_fetch_array($run_pro) ) 
    {
      
      $pro_title = $row_pro['product_title'];

        
          
        echo "<option><strong>$pro_title<strong></option>";
        
        
     
        

    } ?>
       






										</select>
										<span></span>
									</label>
								</div>
							 </li>
							 <li>
								<div class="sf_columns column_6">
									<label class="sf-select">
										<select name="country" data-required="true">
											<option value="" selected="selected" >Choose your plan.</option>
											<option value="de">1 day - Get a project for a day at ₹ 600 - ₹ 1000 (Depending on the project.)</option>
											<option value="en">1 week - Get a project for a week at ₹ 1000 - ₹ 2000 (Depending on the project.) </option>
											<option value="us">1 month - Get a project for a month (Security money and deductions later on.)</option>
										</select>
										<span></span>
									</label>
								</div>
								
							 </li>

							 <li>
							 	<div class="sf_columns column_3">
							 	<label>Choose a deliver date (Closest date would be <?php echo date('d-m-Y', strtotime("+2 day")); ?>) : </label>
							 	<br>
							 	<br>
							 	
									<input type="date"  min='<?php echo date('Y-m-d', strtotime("+2 day")); ?>' data-required="true" data-confirm="true">
								</div>
								<div class="sf_columns column_3">
									<label class="sf-select">
										<select name="country" data-required="true">
											<option value="" selected="selected" >Choose a pick up location.</option>
											<option value="de">West Delhi</option>
											<option value="en">South Delhi</option>
											
										</select>
										<span></span>
									</label>
								</div>

							 </li>
							  <li>
							 	<div class="sf_columns column_6">
									<textarea placeholder="If you needed a customized product, not present in our list. Please mention the details." name="ADDRESS" ></textarea>
								</div>
							 </li>
							 <li>
								
							 </li>
						</ul>

						
		
						<ul class="sf-content"> <!-- form step tree --> 
							 <li>

							 <div class="sf_columns column_3">
									<input type="email" name="name" placeholder="Confirm your email" >
								</div>

							 	



							 </li>



							 <li>



							 <div class="sf_columns column_6">
									<div class="sf-check">
										<label><input type="checkbox" value="test" name="test" data-required="true"><span></span> By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
									</div>
								</div>
								

							<div class="sf_columns column_6">
									<button  type="submit" name="subf" >Submit here.</button>
								</div>	


								
							 </li>
						</ul>
						
					</div>
					
					<div class="sf-steps-navigation sf-align-right">
						<span id="sf-msg" class="sf-msg-error"></span>
						<button id="sf-prev" type="button" class="sf-button">Previous</button>
						<button   id="sf-next" type="button"  class="sf-button">Next</button>
					</div>
				</form>
			
			</div>

		</div>
		
	</div>

<?php

if (isset($_POST['subf'])) {
	
   

   $name = $_POST['namee'];

   echo"<script>alert('I am an $name box!'')</script>";










}

?>
















    </div>


    <!-- Main product panel -->
       
</div>
    
  
</div>
</div>
<br>
<br>
<br>
  

<!--footer start-->

<?php

include("public/footer.php");

?>

<!--footer end-->

		<script>
					$(document).ready(function(e) {
						
						$(".stepsForm").stepsForm({
							width			:'100%',
							active			:0,
							errormsg		:'Check faulty fields.',
							
						}); 
						
						$(".container .themes>span").click(function(e) {
							$(".container .themes>span").removeClass("selectedx");
							$(this).addClass("selectedx");
							$(".stepsForm").removeClass().addClass("stepsForm");
							$(".stepsForm").addClass("sf-theme-"+$(this).attr("data-value"));
						});
					});
				</script>








</body>
</html>