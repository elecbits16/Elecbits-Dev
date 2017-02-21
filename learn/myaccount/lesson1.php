<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mada" rel="stylesheet">

<style type="text/css">
	
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}



</style>
</head>


<body>

     <?php

      if (isset($_GET['lesson_id'])) {
     
     $less_id = $_GET['lesson_id'];


     $get_pro = "SELECT * FROM lesson WHERE lesson_id='$less_id'";

$run_pro = mysqli_query($con, $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);
  
  $lesson_title = $row_pro['lesson_title'];
   $lesson_youtube = $row_pro['lesson_youtube'];
   $lesson_compo = $row_pro['lesson_compo'];
   $lesson_aim= $row_pro['lesson_aim'];  
   $lesson_inst = $row_pro['lesson_inst'];
   $lesson_quiz_id = $row_pro['lesson_quiz_id'];
   $points= $row_pro['points'];
   


}

      
?>    



<div class="panel panel-default">
  <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; "><?php echo $lesson_title ;?> </div>
 <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $lesson_youtube; ?>" frameborder="10" allowfullscreen></iframe>
</div>
</div>


<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">AIM</div>
  <div class="panel-body"><?php echo $lesson_aim ;?> </div>
</div>

<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">COMPONENTS</div>
  <div class="panel-body"><?php echo $lesson_compo ;?> </div>
</div>


<div class="panel panel-default">
   <div class="panel-heading" style="text-align: center; font-size: 25px;  font-family: 'Mada', sans-serif; ">INSTRUCTIONS</div>
  <div class="panel-body"><?php echo $lesson_inst ;?></div>
</div>

<div class="col-lg-3" style="text-align: center;">
  



</div>



<div class="col-lg-6" style="text-align: center;">
  
<button class="button1" style="vertical-align:middle; font-size: 18px;"><span>START QUIZ</span></button>


</div>

<div class="col-lg-3" style="text-align: center;">
  



</div>







</body>
</html>