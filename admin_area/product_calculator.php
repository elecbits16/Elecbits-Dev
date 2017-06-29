<?php

session_start();
include("../functions/functions.php");
if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

</head>
<body>

<?php
$content =     file_get_contents("http://elecbits.in/api/crud_api/api.php/components");

$result  = json_decode($content);

$i = 0;

foreach ($result->components->records as $values)
{
    $name[] = $values[0];
    $price[] = $values[1]."\n";
$i++;

}



?>




           <div class="container" style="width:300px;">  
                <div align="left" ng-app="myapp" ng-controller="usercontroller">  
                     <label>Enter hardware 1</label>  
                     <input type="text" name="hw1" id="country" ng-model="country" ng-keyup="complete(country)" class="form-control" />  
                     <ul class="list-group" ng-model="hidethis" ng-hide="hidethis">  
                          <li class="list-group-item" ng-repeat="countrydata in filterCountry" ng-click="fillTextbox(countrydata)">{{countrydata}}</li>  
                     </ul>  

                     <br>


                     

                </div>  
           </div>  








  




</body>
</html>



<script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope){  
      $scope.countryList = [ 
        
 <?php

for ($x = 0; $x < $i-1 ; $x++) {

	echo "\"".$name[$x]."\"".","; 
	
   
} 


?>



       ];  
      $scope.complete = function(string){  
           $scope.hidethis = false;  
           var output = [];

           angular.forEach($scope.countryList, function(country){  
                if(country.toLowerCase().indexOf(string.toLowerCase()) >= 0)  
                {  
                     output.push(country);  
                }  
           });  
           $scope.filterCountry = output;  
      }  
      $scope.fillTextbox = function(string){  
           $scope.country = string;  
           $scope.hidethis = true;  
      }  
 });  
 </script>  






<?php

$i = 0;

}

?>