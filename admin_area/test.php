<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

	






</head>
<body >



           <div class="container" style="width:500px;">  
                <h3 align="center">AngularJS Tutorial - Make Autocomplete Textbox</h3>  
                <div ng-app="myapp" ng-controller="usercontroller">  
                     <label>Enter Country Name</label>  
                     <input type="text" name="country" id="country" ng-model="country" ng-keyup="complete(country)" class="form-control" />  
                     <ul class="list-group" ng-model="hidethis" ng-hide="hidethis">  
                          <li class="list-group-item" ng-repeat="countrydata in filterCountry" ng-click="fillTextbox(countrydata)">{{countrydata}}</li>  
                     </ul>  
                </div>  
           </div>  




</body>
</html>

<script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope){  
      $scope.countryList = [  
          <?php echo "\"keep\"";?>
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