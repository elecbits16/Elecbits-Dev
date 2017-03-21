<!DOCTYPE html>
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
</head>
<?php

session_start();
include("functions/functions.php");
include("includes/db.php");



?>
<link rel="stylesheet" type="text/css" href="styles/css/table.css">
<style>
  .service-form{
    border: 1px solid #92c4ef;
    border-radius: 11px;
    padding: 18px;
    margin-top: 30px;
    margin-bottom: 37%;
  }
  
</style>
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
<<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 

    
     <div ng-app="myApp" ng-controller="myCtrl">
    <div style="margin: 0 10% 8.4% 10%;">
      <div layout="row" layout-align="space-between center">

<div>
        <span>Choose a service that best suits your need </span>
              
</div>
  
        <md-select ng-model="weapon" placeholder="Select a service" class="md-no-underline">
          <md-option value="Readymade Project">Readymade Project</md-option>
          <md-option value="DIY Project">DIY Project</md-option>
          <md-option value="Buy Components">Buy Components</md-option>
          <md-option value="Rent Project">Rent a project</md-option>
        </md-select>
      </div>
      <div ng-if="weapon">Great, you selected {{weapon}}!</div>


<form method="post" action="">
      <div class="service-form" ng-if="weapon=='Readymade Project'">Readymade project form!
        <div layout="row">
          <md-input-container flex="50">
            <label>Client Name</label>
            <input required name="clientName" ng-model="project.clientName">
            <div ng-messages="projectForm.clientName.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <md-input-container flex="50">
            <label>Project Type</label>
            <md-select name="type" ng-model="project.type" required>
              <md-option value="app">Application</md-option>
              <md-option value="web">Website</md-option>
            </md-select>
          </md-input-container>
        </div>
        <div layout="row">
          <md-input-container flex="50">
            <label>Client Name</label>
            <input required name="clientName" ng-model="project.clientName">
            <div ng-messages="projectForm.clientName.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <md-input-container flex="50">
            <label>Project Type</label>
            <md-select name="type" ng-model="project.type" required>
              <md-option value="app">Application</md-option>
              <md-option value="web">Website</md-option>
            </md-select>
          </md-input-container>
        </div>

        <md-input-container class="md-block">
          <label>Client Email</label>
          <input required type="email" name="clientEmail" ng-model="project.clientEmail"
          minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />

          <div ng-messages="projectForm.clientEmail.$error" role="alert">
            <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
              Your email must be between 10 and 100 characters long and look like an e-mail address.
            </div>
          </div>
        </md-input-container>


<input type="submit" name="update" value="submit">

</form>

      </div>

      <div class="service-form" ng-if="weapon=='DIY Project'">DIY form!
        <div layout="row">
          <md-input-container flex="50">
            <label>Client Name</label>
            <input required name="clientName1" ng-model="project.clientName">
            <div ng-messages="projectForm.clientName.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <md-input-container flex="50">
            <label>Project Type</label>
            <md-select name="type" ng-model="project.type" required>
              <md-option value="app">Application</md-option>
              <md-option value="web">Website</md-option>
            </md-select>
          </md-input-container>
        </div>

        <md-input-container class="md-block">
          <label>Client Email</label>
          <input required type="email" name="clientEmail1" ng-model="project.clientEmail"
          minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />

          <div ng-messages="projectForm.clientEmail.$error" role="alert">
            <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
              Your email must be between 10 and 100 characters long and look like an e-mail address.
            </div>
          </div>
        </md-input-container>
      </div>
      <div class="service-form" ng-if="weapon=='Buy Components'">Buy Components form!
        <div layout="row">
          <md-input-container flex="50">
            <label>Client Name</label>
            <input required name="clientName2" ng-model="project.clientName">
            <div ng-messages="projectForm.clientName.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <md-input-container flex="50">
            <label>Project Type</label>
            <md-select name="type" ng-model="project.type" required>
              <md-option value="app">Application</md-option>
              <md-option value="web">Website</md-option>
            </md-select>
          </md-input-container>
        </div>

        <md-input-container class="md-block">
          <label>Client Email</label>
          <input required type="email" name="clientEmail2" ng-model="project.clientEmail"
          minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />

          <div ng-messages="projectForm.clientEmail.$error" role="alert">
            <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
              Your email must be between 10 and 100 characters long and look like an e-mail address.
            </div>
          </div>
        </md-input-container>
      </div>
      <div class="service-form" ng-if="weapon=='Rent Project'">Rent a project form!
        <div layout="row">
          <md-input-container flex="50">
            <label>Client Name</label>
            <input required name="clientName3" ng-model="project.clientName">
            <div ng-messages="projectForm.clientName.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <md-input-container flex="50">
            <label>Project Type</label>
            <md-select name="type" ng-model="project.type" required>
              <md-option value="app">Application</md-option>
              <md-option value="web">Website</md-option>
            </md-select>
          </md-input-container>
        </div>

        <md-input-container class="md-block">
          <label>Client Email</label>
          <input required type="email" name="clientEmail3" ng-model="project.clientEmail"
          minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />

          <div ng-messages="projectForm.clientEmail.$error" role="alert">
            <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
              Your email must be between 10 and 100 characters long and look like an e-mail address.
            </div>
          </div>
        </md-input-container>
      </div> 

<?php

if (isset($_POST['update'])) {


$name = $_POST['clientName'];

echo $name;

}




?>

    </div>
  </div>
</div>




<!--footer start-->
<?php

include("public/footer.php");

?>


<!--footer end-->


<script>
  var app = angular.module('myApp', ['ngMaterial']);
  app.controller('myCtrl', function($scope) {
  });
</script>



</body>


</html>

