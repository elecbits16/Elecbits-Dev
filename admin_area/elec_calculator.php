<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}


else{


  ?>
<!DOCTYPE html>


<html>
<head>
	<title>Insert Category</title>
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




<?php
$content =     file_get_contents("http://elecbits.in/api/crud_api/api.php/components?order=name");

$result  = json_decode($content);

$i = 0;

foreach ($result->components->records as $values)
{
    $name[] = $values[0];
    $price[] = $values[1]."\n";
$i++;

}



?>


<div class="jumbotron" >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">Product Calculator</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td>Enter Required Hardware</td>

     <td> <select name="hw1" required />
      <option>Select your hardware</option>
             <?php           
                

for ($x = 0; $x < $i-1 ; $x++) {

   echo "<option > $name[$x] </option> ";
  
   
}   
                   
                  


              

             ?>

    </select></td>
   </tr>
<tr>
 <tr>
     <td>Insert New Category</td>

     <td> <input type="text" name="new_cat" required/> </td>
   </tr>
<tr>
  <td></td>
  <td> <input type="submit" name="add_cat" value="Add new Category"> </td>
</tr>

</form> 

  </table>
</div>



</div>


         

</body>
</html>

<?php } ?>