<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits | Need a project</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
   <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
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
<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 

<div class="container">
  

<div  style="font-size: 20px; padding: 0px 0px 0px 20px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">O</span>RDER A CUSTOMIZED PROJECT</div> 



<div style="font-size: 16px;">




<?php

include("services.php");

?>


<br>


</div>


</div>





 

<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->






</body>
</html>