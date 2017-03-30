<!DOCTYPE html>
<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
    margin-bottom: 25%;
  }
  .form-dropdown{
    width: 100%;
    height: 28px;
    margin-top: 22px;
    border: 1px solid rgba(245, 222, 179, 0);
    border-bottom: 1px solid rgba(148, 140, 140, 0.26);
  }
  .form-date{
    padding-top: 6px;
    width: 100%;
    border: 1px solid rgba(245, 222, 179, 0);
    border-bottom: 1px solid rgba(148, 140, 140, 0.26);
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







    <div style="text-align:center;">
      <div>
        <span>Choose a service that best suits your need </span>
      </div>

      <md-select ng-model="weapon" placeholder="Select a service" class="md-no-underline" style="width: 31%; margin: 3% auto;">
        <md-option value="Readymade Project">Readymade Project</md-option>
        <md-option value="DIY Project">DIY Project</md-option>
        <md-option value="Buy Components">Buy Components</md-option>
        <md-option value="Rent Project">Rent a project</md-option>
        <md-option value="Manufacture a project">Manufacture a project</md-option>
        <md-option value="Circuit Designing">Circuit Designing</md-option>
        <md-option value="Documentation of projects">Documentation of projects</md-option>
        <md-option value="Starter Kit">Need a Starter Kit</md-option>
        <md-option value="Software Projects">Software Projects</md-option>
        <md-option value="Web Projects">Web Projects</md-option>
        <md-option value="Industrial Prototypes">Industrial Prototypes</md-option>
        <md-option value="Android Development">Android Development</md-option>
        <md-option value="Custom Order/Other services">Custom Order/Other services</md-option>
      </md-select>
    </div>


<div style="margin: 0 8% 8% 6%;">



  <div ng-if="weapon">Great, you selected {{weapon}}!</div>






<!-- Readymade project form -->







  <form method="post" action="">
    <div class="service-form" ng-if="weapon=='Readymade Project'">Readymade project form!
      <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container  class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


           <md-input-container class="md-block" >
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

            <select name="type"  class="form-dropdown" required class="md-block">
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

      </div>

         


<div class="col-lg-6">
       <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" required class="md-block"  style="width:100%">
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>
      <br>
      <br>
      
        <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>
      </div>
     

</div>
      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>



  </div>
</form>




<!-- DIY project form -->


<form method="post" action="">
  <div class="service-form" ng-if="weapon=='DIY Project'">DIY project form!
        <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container  class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


           <md-input-container class="md-block" >
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

            <select name="type"  class="form-dropdown" required class="md-block">
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

      </div>

         


<div class="col-lg-6">
       <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" required class="md-block"  style="width:100%">
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>
      <br>
      <br>
      
        <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>
      </div>
     

</div>
    <div layout="row" >
      <md-input-container flex="100" style="margin-top: 5%;">
        <label>Project Title</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>
    </div>

    <div layout="row">
      <md-input-container flex="100" >
        <label>Project Description</label>
        <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
      </md-input-container>
    </div>



    <md-button class="md-raised md-primary">Submit</md-button>

   
</div>
</form>




<!-- Buy Components form -->

<form method="post" action="">

  <div class="service-form" ng-if="weapon=='Buy Components'">Buy Components form!
    <div class="container" style="width:100%">
    <div class="col-lg-6">
      <md-input-container  class="md-block">
        <label>Name</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>

      <md-input-container  class="md-block">
        <label>Mobile Number</label>
        <input required name="clientName" type="number" ng-model="project.clientNam">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>
    </div>

    <div class="col-lg-6">
      <md-input-container  class="md-block">
        <label>E-mail</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>

      <select name="type"  class="form-dropdown" style="width: 100% ;" required>
        <option value="hi" selected disabled>Location</option>
        <option value="app">New Delhi</option>
        <option value="web">Noida</option>
        <option value="app">Gurgaon</option>
        <option value="web">Outside NCR</option>
      </select>
    </div>
    </div>
    <div layout="row">
      <md-input-container flex="100" >
        <label>Description(Please mention the component names and their required quantities)</label>
        <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
      </md-input-container>
    </div>


     <md-button class="md-raised md-primary">Submit</md-button>
    </div>
</form>


  <!-- Rent a project form-->

<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Rent Project'">Rent a project form!
 <div class="container" style="width:100%">
      <div class="col-lg-6">    
      <md-input-container class="md-block">
        <label>Name</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>


       <md-input-container class="md-block">
        <label>E-mail</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>

   

        <md-input-container class="md-block">
        <label>Name of Project</label>
        <input required name="clientName" ng-model="project.clientName">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>

  <select name="type"  class="form-dropdown" style="width: 100%;" required>
        <option value="hi" selected disabled>Choose a pickup location</option>
        <option value="app">South Delhi</option>
        <option value="web">West Delhi</option>
      </select>


    </div>

    <div class="col-lg-6">

 <md-input-container class="md-block">
        <label>Mobile Number</label>
        <input required name="clientName" type="number" ng-model="project.clientNam">
        <div ng-messages="projectForm.clientName.$error">
          <div ng-message="required">This is required.</div>
        </div>
      </md-input-container>


     
      <select name="type"  class="form-dropdown" style="width: 100%;" required>
        <option value="hi" selected disabled>Location</option>
        <option value="app">New Delhi</option>
        <option value="web">Noida</option>


        <option value="app">Gurgaon</option>
        <option value="web">Outside NCR</option>
      </select>
   


   
    

      <select name="type"  class="form-dropdown" style="width: 100%;" required>
        <option value="hi" selected disabled>Choose a rental plan</option>
        <option value="app">1 day - Get a project for a day at ₹ 600 - ₹ 1000 (Depending on the project.)</option>
        <option value="web">1 week - Get a project for a week at ₹ 1000 - ₹ 2000 (Depending on the project.) </option>
        <option value="app">1 month - Get a project for a month (Security money and deductions later on.)</option>
      </select>
       
    <div class="hidden-xs">
    <br>
    <br>
      
    </div>
    <br>

      <div style="width:100%">
        <p style="margin:0px">Delivery Date</p>
        <input type="date" class="form-date" name="bday" min="2000-01-02">
      </div>

    </div>
    </div>

<br>
<br>
  <md-button class="md-raised md-primary">Submit</md-button>
 
  </div>
  </form>

<!-- Manufacture a project form -->


<form method="" action="">
  <div class="service-form" ng-if="weapon=='Manufacture a project'">Manufacture a project form
       <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


 <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


   <select name="type"  class="form-dropdown" style="width: 100%" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

       
      </div>

      <div class="col-lg-6">

       <md-input-container class="md-block" >
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
       

        <select name="type"  class="form-dropdown" style="width: 100%;" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>

<div class="hidden-xs"> 
  
<br>

</div>

<br>

        <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>


      </div>
    
</div>
      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>
   

      <md-button class="md-raised md-primary">Submit</md-button>

      
  </div>
</form>


<!--Circuit Designing form -->




<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Circuit Designing'">Circuit Designing form
        <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

         <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

            <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

      
      </div>

      <div class="col-lg-6" >
       
          <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>

<div class="hidden-xs">
  <br>
  <br>

</div>
<br>

            <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>
      </div>
      </div>
     

      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
      
  </div>
</form>




<!-- Documentation of projects  -->



<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Documentation of projects'">Documentation of projects 
       <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <md-input-container class="md-block" >
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>



<div class="hidden-xs">
  <br>
  <br>

</div>
<br>

            <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>


      </div>

      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>
      </div>
      </div>
      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
  
  </div>
</form>


<!-- Starter Kit form -->



<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Starter Kit'">Starter Kit form
        <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>
      </div>

</div>

      <div layout="row" >
        
        <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>
      </div>


<br>
<br>

      <md-button style="margin-top:10px" class="md-raised md-primary">Submit</md-button>
      
  </div>
</form>





<!-- Software Project form -->





  <div class="service-form" ng-if="weapon=='Software Projects'">Software Project form
      <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


         <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


<select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>


     
      </div>

      <div class="col-lg-6">

         <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
       

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>

<br>
<br>
<br>

  <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>



      </div>
     </div>

      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
      
  </div>
</form>

<!-- Web Project form -->




<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Web Projects'">Web Project form
      <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


         <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

          <select name="type"  class="form-dropdown" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

       
      </div>

      <div class="col-lg-6">
       
        <md-input-container class="md-block" >
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>
<br>
<br>
<br>

  <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>

      </div>
   </div>  

      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
     
  </div>
 </form>



<!-- Industrial Prototype form -->


<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Industrial Prototypes'">Industrial Prototype form
       <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


         <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


   <select name="type"  class="form-dropdown" style="width:100%"  required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>


      </div>

      <div class="col-lg-6">


        <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
       

        <select name="type"  class="form-dropdown" style="width:100%" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>

<br>
<br>
<br>

 <div style="width:100%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>


      </div>
      </div>
    

      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
     
  </div>
 </form>







<!-- Custom Order/Other services form -->






  <div class="service-form" ng-if="weapon=='Custom Order/Other services'">Custom Order/Other services form
       <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>


         <md-input-container class="md-block">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

           <select name="type"  class="form-dropdown" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

       
      </div>

      <div class="col-lg-6">

       <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
       

        <select name="type"  class="form-dropdown" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>


<br>
<br>
<br>

        <div style="width:50%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>



      </div>
     
</div>
      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
       </div>
 </form>










<!-- Andrioid Project Form -->



<form method="post" action="">
  <div class="service-form" ng-if="weapon=='Android Development'">Android Project form
     <div class="container" style="width:100%">
      <div class="col-lg-6">
        <md-input-container class="md-block">
          <label>Name</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

          <md-input-container flex="50">
          <label>E-mail</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

            <select name="type"  class="form-dropdown" required>
          <option value="hi" selected disabled>Select range</option>
          <option value="app">0-3999</option>
          <option value="web">4000-6999</option>
          <option value="app">7000-9999</option>
          <option value="web">10,000-above</option>
        </select>

       
      </div>

      <div class="col-lg-6">
      
       <md-input-container class="md-block">
          <label>Mobile Number</label>
          <input required name="clientName" type="number" ng-model="project.clientNam">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <select name="type"  class="form-dropdown" required>
          <option value="hi" selected disabled>Location</option>
          <option value="app">New Delhi</option>
          <option value="web">Noida</option>
          <option value="app">Gurgaon</option>
          <option value="web">Outside NCR</option>
        </select>


  <div style="width:50%">
          <p style="margin:0px">Delivery Date</p>
          <input type="date" class="form-date" name="bday" min="2000-01-02">
        </div>


      </div>
      </div>
  
      <div layout="row" >
        <md-input-container flex="100" style="margin-top: 5%;">
          <label>Project Title</label>
          <input required name="clientName" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>
      </div>

      <div layout="row">
        <md-input-container flex="100" >
          <label>Project Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
        </md-input-container>
      </div>



      <md-button class="md-raised md-primary">Submit</md-button>
     
  </div>
 </form>


 <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                <br>
                    <img src="images/np1.png" alt="">
                    <div class="caption">
                        <h3>SAVE TIME</h3>
                        <p style="text-align: justify;">No need to travel all around the city for electronics components and projects, Just click and order.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np2.png" alt="">
                    <div class="caption">
                        <h3 >FREE SHIPPING</h3>
                        <p style="text-align: justify;">We provide free home delivery. Just select your project or order a customized version on the comfort of a click.</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 col1-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np3.png" alt="">
                    <div class="caption">
                        <h3>CASH ON DELIVERY</h3>
                        <p style="text-align: justify;">Easy payments at your door. We believe in our customers and provide payment option after their complete satisfaction. </p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np4.png" alt="">
                    <div class="caption">
                        <h3>EASY RETURNS</h3>
                        <p style="text-align: justify;"> We provide the best quality available in the market, If still you're not satified we will return as soon as possible.</p>
                       
                    </div>
                </div>
            </div>


































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

<!-- 1. Readymade project
2. DIY project
3. Buy Components
4. Manufacture a project ( Coding and other segment )
5. Rent a project
6. Sell a project. ( We'll buy a project if the condition is good )
7. Circuit designing
8. Documentation of projects.
9. Need a starter kit
10. Software projects
11. Web projects
12. Industrial prototypes
13. Custom order/Other services.
14. Android development -->








