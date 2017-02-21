<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

if ($_GET['edit_quiz']) {
  
  $quz_id = $_GET['edit_quiz'];
$get_pro = "SELECT * FROM quiz WHERE quiz_id='$quz_id'";

$run_pro = mysqli_query($con, $get_pro);

 $row_pro = mysqli_fetch_array($run_pro);
  
  $question = $row_pro['question'];
   $opt_1 = $row_pro['opt_1'];
   $opt_2 = $row_pro['opt_2'];

   $opt_3 = $row_pro['opt_3'];

   $opt_4 = $row_pro['opt_4'];

   $correct_opt = $row_pro['correct_opt'];
   $quiz_lesson_id= $row_pro['quiz_lesson_id'];
   


}
?>



<html>
<head>
  <title>View Quizes</title>
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
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">EDIT THE QUIZ</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action=" " method="post" enctype="mutlipart/form" >
      <tr>
      <td>QUIZ ID :</td>
    <td> <input type="text" name="quiz_id" size="60" value="<?php echo $quz_id; ?>" disabled></td> 
  </tr>
  <tr>
      <td>Question :</td>
    <td> <textarea name="question"  cols="20" rows="10"> <?php echo $question ; ?> </textarea> </td> 
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
    <td> <input type="text" name="opt_1" size="60"  value="<?php echo $opt_1;?>" required /></td> 
  </tr>
<tr>
      <td>Option 2 :</td>
    <td> <input type="text" name="opt_2" size="60" value="<?php echo $opt_2;?>" required /></td> 
  </tr>
<tr>
      <td>Option 3 :</td>
    <td> <input type="text" name="opt_3" size="60"  value="<?php echo $opt_3;?>" required /></td> 
  </tr>

<tr>
      <td>Option 4 :</td>
    <td> <input type="text" name="opt_4" size="60" value="<?php echo $opt_4 ;?>" required /></td> 
  </tr>

<tr>
      <td>Correct Option :</td>
    <td> <input type="text" name="correct_opt" size="60"  value="<?php echo $correct_opt; ?>"required /></td> 
  </tr>

   

     <tr>
      <td> Corrosponding Lesson ID :</td>
    <td> <input type="text" name="quiz_lesson_id" size="50" value="<?php echo $quiz_lesson_id ; ?>"required/></td> 
  </tr>



  <tr>
      <td></td>
    <td> <input type="submit" name="update_post" value="Update the lesson" ></td> 
  </tr>




  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['update_post'])) ) {
  //getting the text data

  
  
   $questions= $_POST['question'];
  $opt_1s = $_POST['opt_1'];
   $opt_2s= $_POST['opt_2'];
   $opt_3s= $_POST['opt_3'];

   $opt_4s= $_POST['opt_4'];

   $correct_opts = $_POST['correct_opt'];
$quiz_lesson_ids = $_POST['quiz_lesson_id'];
   

   
 
   $update_lesson = "UPDATE quiz SET  question ='$questions' , opt_1 = '$opt_1s' , opt_2 = '$opt_2s' , opt_3 = '$opt_3s' , opt_4 = '$opt_4s' , correct_opt = '$correct_opts' , quiz_lesson_id = '$quiz_lesson_ids' WHERE quiz_id ='$quz_id'  ";


 

  
if (mysqli_query($con, $update_lesson)) {
    echo "New record created successfully";

    echo "<script>alert('Quiz has been edited successfully')</script>";

    echo "<script>window.open('index.php?view_quiz','_self')</script>";
} else {
    echo "Error: "  . "<br>" . mysqli_error($con);
}
}




 


    
?>

 
<?php } ?>