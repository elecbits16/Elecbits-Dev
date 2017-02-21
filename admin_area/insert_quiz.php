<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

?>

<html>
<head>
	<title>Insert Quiz</title>
	<meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

<div class="jumbotron" >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE QUIZ</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>QUIZ ID :</td>
		<td> <input type="text" name="quiz_id" size="60" required /></td> 
	</tr>
  <tr>
      <td>Question :</td>
    <td> <textarea name="question"  cols="20" rows="10"></textarea> </td> 
  </tr>
	
<!--
	<tr>
	    <td>lesson Image 1:</td>
		<td> <input type="file" name="uploadedfile" required/>
         
      </td> 
	</tr>

	
	<tr>
	    <td>lesson Image 2:</td>
		<td> <input type="file" name="lesson_image2" required/></td> 
	</tr>

		<tr>
	    <td>lesson Image :</td>
		<td> <input type="file" name="lesson_image" required/></td> 
	</tr>
-->

<tr>
      <td>Option 1 :</td>
    <td> <input type="text" name="opt_1" size="60" required /></td> 
  </tr>
<tr>
      <td>Option 2 :</td>
    <td> <input type="text" name="opt_2" size="60" required /></td> 
  </tr>
<tr>
      <td>Option 3 :</td>
    <td> <input type="text" name="opt_3" size="60" required /></td> 
  </tr>

<tr>
      <td>Option 4 :</td>
    <td> <input type="text" name="opt_4" size="60" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt" size="60" required /></td> 
  </tr>

	 

     <tr>
      <td> Corrosponding Lesson ID :</td>
    <td> <input type="text" name="quiz_lesson_id" size="50" required/></td> 
  </tr>



<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the Quiz" ></td> 
  </tr>


  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['insert_post'])) || (isset($_FILES['uploadedfile']) )) {
	//getting the text data

   $quiz_id=$_POST['quiz_id']; 
   $question= $_POST['question'];
  $opt_1 = $_POST['opt_1'];
   $opt_2= $_POST['opt_2'];
   $opt_3= $_POST['opt_3'];

   $opt_4= $_POST['opt_4'];

   $correct_opt = $_POST['correct_opt'];
$quiz_lesson_id = $_POST['quiz_lesson_id'];
   
 
    $insert_lesson = "INSERT INTO quiz (quiz_id, question, opt_1, opt_2, opt_3, opt_4, correct_opt, quiz_lesson_id) VALUES ( '$quiz_id' , '$question' , '$opt_1' , '$opt_2' , '$opt_3' , '$opt_4' , '$correct_opt' , '$quiz_lesson_id' ) ";





  
if (mysqli_query($con, $insert_lesson)) {
    echo "New record created successfully";

    echo "<script>alert('Quiz has been added')</script>";
    echo "<script>window.open('index.php?view_quiz','_self')</script>";
} else {
    echo "Error: " . $insert_lesson . "<br>" . mysqli_error($con);
}
}




 


    
?>


<?php } ?>