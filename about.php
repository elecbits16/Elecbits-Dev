<!DOCTYPE html>

<?php



session_start();

include("functions/functions.php");



?>
<html lang="en">
  <head>

  <?php

  include("public/link.php");

  ?>


   
    <link rel="stylesheet" type="text/css" href="styles/aboutus/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="styles/aboutus/css/component.css" />
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

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

<br>



<br>

    <div class="container-fluid">
   
      <div id="tabs" class="tabs">
        <nav>
          <ul>
            <li><a href="#section-1" class="icon-shop"><span>Shop</span></a></li>
            <li><a href="#section-2" class="icon-cup"><span>Drinks</span></a></li>
            <li><a href="#section-3" class="icon-food"><span>Food</span></a></li>
            <li><a href="#section-4" class="icon-lab"><span>Lab</span></a></li>
            <li><a href="#section-5" class="icon-truck"><span>Order</span></a></li>
          </ul>
        </nav>
        <div class="content">
          <section id="section-1">
            <div >
              <img src="img/01.png" alt="img01" />
              <h3  style="color:black;" >Who are we ?</h3>
              <p>We are a group of Enthusiasts who focus on making things simpler. Technology is an artistic way to turn your imagination into reality. And we are here to make sure that the artistic approach inside you would never go out of resource.
</p>
            </div>
           
            
          </section>
          <section id="section-2">
            <div class="mediabox">
              <img src="img/04.png" alt="img04" />
              <h3>Asparagus Cucumber Cake</h3>
              <p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
            </div>
            <div class="mediabox">
              <img src="img/05.png" alt="img05" />
              <h3>Magis Kohlrabi Gourd</h3>
              <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
            </div>
            <div class="mediabox">
              <img src="img/06.png" alt="img06" />
              <h3>Ricebean Rutabaga</h3>
              <p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
            </div>
          </section>
          <section id="section-3">
            <div class="mediabox">
              <img src="img/02.png" alt="img02" />
              <h3>Noodle Curry</h3>
              <p>Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.Sushi gumbo beet greens corn soko endive gumbo gourd.</p>
            </div>
            <div class="mediabox">
              <img src="img/06.png" alt="img06" />
              <h3>Leek Wasabi</h3>
              <p>Sushi gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato.</p>
            </div>
            <div class="mediabox">
              <img src="img/01.png" alt="img01" />
              <h3>Green Tofu Wrap</h3>
              <p>Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
            </div>
          </section>
          <section id="section-4">
            <div class="mediabox">
              <img src="img/03.png" alt="img03" />
              <h3>Tomato Cucumber Curd</h3>
              <p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
            </div>
            <div class="mediabox">
              <img src="img/01.png" alt="img01" />
              <h3>Mushroom Green</h3>
              <p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
            </div>
            <div class="mediabox">
              <img src="img/04.png" alt="img04" />
              <h3>Swiss Celery Chard</h3>
              <p>Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. </p>
            </div>
          </section>
          <section id="section-5">
            <div class="mediabox">
              <img src="img/02.png" alt="img02" />
              <h3>Radish Tomato</h3>
              <p>Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut.</p>
            </div>
            <div class="mediabox">
              <img src="img/06.png" alt="img06" />
              <h3>Fennel Wasabi</h3>
              <p>Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce broccoli celery lotus root carrot winter purslane turnip greens garlic.</p>
            </div>
            <div class="mediabox">
              <img src="img/01.png" alt="img01" />
              <h3>Red Tofu Wrap</h3>
              <p>Green horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
            </div>
          </section>
        </div><!-- /content -->
      </div><!-- /tabs -->
      <p class="info">Food Shapes/Icons by <a href="http://psdblast.com/50-food-icon-set-psd">PsdBlast</a></p>
    </div>
    <script src="styles/aboutus/js/cbpFWTabs.js"></script>
    <script>
      new CBPFWTabs( document.getElementById( 'tabs' ) );
    </script>
  </body>
</html>
