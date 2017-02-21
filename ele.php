<!DOCTYPE html>
<?php



session_start();

include("functions/functions.php");



?>

<html lang="en" data-ng-app="themeonApp">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Welcome to Trasua</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="styles/assets/css/style.css" media="screen">
	
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/font-awesome.min.css" media="screen">

	

		 <?php

  include("public/link.php");

  ?>



	</head>
	<body>
		<!--Loader Start
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_four"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_one"></div>
				</div>
			</div>
		</div>
		<!--Loader End-->

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
















		<!--Page Wrapper Start-->
		<br>
		<br>
		<br>
		<div id="wrapper" class="homepage-1">
       
		<?php

		include("sliderelec.php");


		?>
	
		
			
					<a href="#" class="scroll-down"> </a>
				</div><!-- END OF SLIDER WRAPPER -->
			</section>
			<!--Content Area Start-->
			<div id="content">
				<section class="who" id="about-us">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-7">

<div class="there">
									<span style="font-size: 24px; font-weight: 1000px;">WELCOME TO ELECDUINO</span>
								</div>
								<div class="who-slider">
									<div class="item">
										<div class="header-wrap">
											<h2 class="text-left">What <span> is Elecduino ? </span></h2>
											<p style="font-family: 'Muli', sans-serif; font-size: 16px; font-weight: 700;">
												The elecduino kit is a great way to get started with electronics. The elecduino kit which comes in many variants lets you to make many different projects which helps you to gain the practical knowledge of the components you have only studied in theory.
											</p>
											<h2 class="text-left">how <span> it will help you ?</span></h2>
											<p style="font-family: 'Muli', sans-serif; font-size: 16px; font-weight: 700;">This kit will increase your efficiency of self-learning and can save a lot of time and money by the cutting the cost and time on specialised training. Our team has designed several services with the kit that will ease down every process.</p>
											
										</div>
									</div>
								<!--	<div class="item">
										<div class="header-wrap">
											<h2 class="text-left">Who <span> We Are ?</span></h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing.
												Nunc pharetra interdum iaculis. Vestibulum semper mauris felis, ac euismod velit consequat sed.
												Proin porttitor purus in odio egestas, sed efficitur nibh ultrices.
											</p>
											<p>
												Morbi mattis sollicitudin libero ut finibus.
												Morbi imperdiet tortor ex, ut convallis nisi vestibulum eget.
												Phasellus hendrerit ut erat eget pharetra.
											</p>
										</div>
									</div>
									<div class="item">
										<div class="header-wrap">
											<h2 class="text-left">Who <span> We Are ?</span></h2>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing.
												Nunc pharetra interdum iaculis. Vestibulum semper mauris felis, ac euismod velit consequat sed.
												Proin porttitor purus in odio egestas, sed efficitur nibh ultrices.
											</p>
											<p>
												Morbi mattis sollicitudin libero ut finibus.
												Morbi imperdiet tortor ex, ut convallis nisi vestibulum eget.
												Phasellus hendrerit ut erat eget pharetra.
											</p>
										</div>
									</div> -->
								</div>














								
							</div>
							<div class="col-xs-12 col-sm-5">

						<figure>
									<img src="styles/assets/images/pack2.png" alt="#"  />
								</figure>
								
							</div>
						</div>
					</div>
				</section>
				<section class="our-services" id="our-service">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>OUR <strong>SERVICES</strong></h2>
							</div>
						</div>
						<div class="row padding">
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-unique">&nbsp; </i>
									<span class="icon-paper-plane"> </span>
									<h3><strong>C</strong><small style="font-weight: 900;">Components</small></h3>
								</div>
								<p style="text-align: justify; ">
									Our kit includes a complete set of components which will lead you to experiment and create lots of projects on your own. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-social">&nbsp; </i>
									<span class="icon-share"> </span>
									<h3><strong>s</strong><small style="font-weight: 900;">Software/Coding</small></h3>
								</div>
								<p style="text-align: justify; ">
									We provide an intact programming solutions and sample codes to assist an efficient working of your projects. From Arduino SDK to circuit designing softwares, we cater everything.
									
								</p>
							</div>
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-web">&nbsp; </i>
									<span class="icon-energy"> </span>
									<h3><strong>V</strong><small style="font-weight: 900;">Videos</small></h3>
								</div>
								<p style="text-align: justify; ">
									Human mind reads in images, when words are hard to explain, our videos can rescue you out of your troubles. Learn from it and understand the projects' applications.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-design">&nbsp; </i>
									<span class="icon-cup"> </span>
									<h3><strong>A</strong><small style="font-weight: 900;">Arduino &amp; Development</small></h3>
								</div>
								<p style="text-align: justify; ">
								 From just to beginner in Arduino, this kit can help you achieve a level a considerable Intermediate. Learn the basics of architecture, designing and innovations.
								</p>
							</div>
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-grap">&nbsp; </i>
									<span class="icon-umbrella"> </span>
									<h3><strong>I</strong><small style="font-weight: 900;">Instructions Manual</small></h3>
								</div>
								<p style="text-align: justify; ">
									Get an integrated booklet that has all the instructions and explaination of the projects. A complete guide to start from basics and achieve a level of awesome just by your imagination.
								</p>
							</div>
							<div class="col-xs-12 col-sm-4 zoom">
								<div class="inner-header-wraper">
									<i class="service-bg icon-brand">&nbsp; </i>
									<span class="zmdi zmdi-toys zmdi-hc-fw"> </span>
									<h3><strong>b</strong><small style="font-weight: 900;">Assistance</small></h3>
								</div>
								<p>
									We want your growth in electronics. We provide advisory and assistance once you start making efficient projects. In case of any hitch, just contact us.
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="skills ">
					<!-- <div class="row"> -->
					<div class="row hidden-xs "  >
						<div class="left-sec">
							<img src="images/pack1.png" alt="" >
						
						</div>
						<div class="right-sec">
							<div class="there skl">
								<span>Our<span>products</span></span>
							</div>
							<div >
								<p style="font-family: 'Muli', sans-serif; font-size: 16px; font-weight: 300;">
									The Arduino starter kit is available in three variants and the customers reviews
									have made it easier for you to select which one to buy.
									
								</p>
							</div>
							<br><br>
							<div class="progress-wrapper clearfix">
								<div class="photo-wrap">
									<span>15 PROJECTS</span>
								</div>
								<div class="progress-content">
									<span>Elecduino Un</span>
									<br>
									
									
								</div>
							</div>
							<div class="progress-wrapper clearfix">
								<div class="photo-wrap">
									<span>20 PROJECTS</span>
								</div>
								<div class="progress-content">
									<span>Elecduino Duex</span>
									<br>
									
									
								</div>
							</div>
							<div class="progress-wrapper clearfix">
								<div class="photo-wrap">
									<span>25 PROJECTS</span>
								</div>
								<div class="progress-content">
									<span>Elecduino Trios</span>
									<br>
									
									
								</div>
							</div>
							
						</div>
					</div>
					<!-- 	</div> 
				</section>
				<section id="lates-work">
					<div class="container-fluid">
						<h2>Our Latest <strong>Works</strong></h2>
						<ul class="nav nav-tabs">
							<li class="all">
								<a href="javascript:void(0)">All</a>
							</li>
							<li class="brand">
								<a href="javascript:void(0)">Branding</a>
							</li>
							<li class="print">
								<a href="javascript:void(0)">Print</a>
							</li>
							<li class="photoshop">
								<a href="javascript:void(0)">Photoshop</a>
							</li>
							<li class="video">
								<a href="javascript:void(0)">Videos</a>
							</li>
						</ul>
						<ul class="thumb-wrap clearfix">
							<li class="profile-des-wrap all main-item">
								<figure>
									<img src="assets/images/thumb-bg1.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap all brand main-item">
								<figure>
									<img src="assets/images/thumb-bg2.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap print all main-item">
								<figure>
									<img src="assets/images/thumb-bg3.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap photoshop all main-item video">
								<figure>
									<img src="assets/images/thumb-bg4.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap print all main-item">
								<figure>
									<img src="assets/images/thumb-bg5.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap brand all main-item">
								<figure>
									<img src="assets/images/thumb-bg6.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap photoshop all main-item">
								<figure>
									<img src="assets/images/thumb-bg7.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap all main-item video">
								<figure>
									<img src="assets/images/thumb-bg8.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap video all main-item">
								<figure>
									<img src="assets/images/thumb-bg9.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
							<li class="profile-des-wrap all all main-item">
								<figure>
									<img src="assets/images/thumb-bg10.png" alt="#">
								</figure>
								<div class="author-wrap">
									<div class="author">
										<h4>Thomsoon Cart Project</h4>
										<span>Branding Identity</span>
									</div>
									<div class="arrow-right"></div>
									<a href="gallery-two.html"><i class="icon-arrow-right-circle"></i></a>
								</div>
							</li>
						</ul>
						<a class="btn  view-more" href="gallery-three.html"> View more</a>
					</div>
				</section>
				<section class="work-progress">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center ">
								<h2>Working <strong>Process</strong></h2>
								<div class="para-wrap">
									<p>
										Lorem ipsum dolor sit amet consectetur rutrum augue adipiscing elit.
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<figure>
									<img src="assets/images/large-bg.png" alt="#">
								</figure>
							</div>
							<div class="col-xs-12 col-sm-6 col-sm-pull-1">
								<div class="slider-two-wrapper">
									<div class="slider-two">
										<div class="plan">
											<span>02</span>
											<strong>Marketing Plan</strong>
											<p>
												Lorem ipsum sit amet, consectetur adipiscing. Donec non pharetra massa,
												consequat lorem. Suspendisse porttitor feugiat turpis tincidunt. Phasellus
												ullamcorper diam felis convallis malesuada. Vestibulum non imperdiet mauris.
												Ut vitae dui sem...
											</p>
											<a href="#" class="btn">Order Now</a>
										</div>
										<div class="plan">
											<span>02</span>
											<strong>Marketing Plan</strong>
											<p>
												Lorem ipsum sit amet, consectetur adipiscing. Donec non pharetra massa,
												consequat lorem. Suspendisse porttitor feugiat turpis tincidunt. Phasellus
												ullamcorper diam felis convallis malesuada. Vestibulum non imperdiet mauris.
												Ut vitae dui sem...
											</p>
											<a href="#" class="btn">Order Now</a>
										</div>
										<div class="plan">
											<span>02</span>
											<strong>Marketing Plan</strong>
											<p>
												Lorem ipsum sit amet, consectetur adipiscing. Donec non pharetra massa,
												consequat lorem. Suspendisse porttitor feugiat turpis tincidunt. Phasellus
												ullamcorper diam felis convallis malesuada. Vestibulum non imperdiet mauris.
												Ut vitae dui sem...
											</p>
											<a href="#" class="btn">Order Now</a>
										</div>
										<div class="plan">
											<span>02</span>
											<strong>Marketing Plan</strong>
											<p>
												Lorem ipsum sit amet, consectetur adipiscing. Donec non pharetra massa,
												consequat lorem. Suspendisse porttitor feugiat turpis tincidunt. Phasellus
												ullamcorper diam felis convallis malesuada. Vestibulum non imperdiet mauris.
												Ut vitae dui sem...
											</p>
											<a href="#" class="btn">Order Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row text-center happy-client">
							<div class="col-xs-12 col-sm-3">
								<div class="happy not-happy">
									<strong class="client-happy"></strong>
									<span>Happy Clients</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="happy">
									<strong  class="finise-project" ></strong>
									<span class="active">Projects Finished</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="happy">
									<strong class="fb-likes"></strong>
									<span>Facebook likes</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="happy">
									<strong class="member-t"></strong>
									<span>Team members</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="amazin-team" id="our-team">
					<div class=container>
						<div class="row">
							<h2>Our Amazing <strong>Team</strong></h2>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-1.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i> </a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i> </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-2.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i></a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i></a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-3.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i> </a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i> </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-4.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i> </a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i> </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-5.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i> </a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i> </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 lg-one">
								<figure>
									<img src="assets/images/img-6.png" alt="#">
								</figure>
								<div class="img-wrapper">
									<div class="profile-info">
										<h4>Ellizabeth Taylor</h4>
										<small>Marketing Senior</small>
									</div>
									<div class="social-wrap">
										<a href="#"> <i class="fa fa-facebook"> </i> </a>
										<a href="#"> <i class="fa fa-twitter"> </i> </a>
										<a href="#"> <i class="fa fa-behance"> </i> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="tesimonials">
					<div class=container>
						<div class="row">
							<div class="col-sm-6">
								<img src="styles/assets/images/testimonial-img.jpg" alt="" />
							</div>
							<div class="col-sm-6 padd-top">
								<div class="quote-wraper">
									<div id="testimonial-slider" class="owl-carousel owl-theme">
										<div class="testimonial-quote">
											<p>
												Claritas etiam processus dynamicus sequitur mutationem consuetudium lectorum. Mirumo notare quam littera gothica quamun putamus parum claram viderer eleifend.
											</p>
											<img src="styles/assets/images/line-2.png" alt="">
											<strong> Allan Lissa</strong>
											<span> Web Design </span>
										</div>
										<div class="testimonial-quote">
											<p>
												Claritas etiam processus dynamicus sequitur mutationem consuetudium lectorum. Mirumo notare quam littera gothica quamun putamus parum claram viderer eleifend.
											</p>
											<img src="styles/assets/images/line-2.png" alt="">
											<strong> Allan Lissa</strong>
											<span> Web Design </span>
										</div>
										<div class="testimonial-quote">
											<p>
												Claritas etiam processus dynamicus sequitur mutationem consuetudium lectorum. Mirumo notare quam littera gothica quamun putamus parum claram viderer eleifend.
											</p>
											<img src="styles/assets/images/line-2.png" alt="">
											<strong> Allan Lissa</strong>
											<span> Web Design </span>
										</div>
										<div class="testimonial-quote">
											<p>
												Claritas etiam processus dynamicus sequitur mutationem consuetudium lectorum. Mirumo notare quam littera gothica quamun putamus parum claram viderer eleifend.
											</p>
											<img src="styles/assets/images/line-2.png" alt="">
											<strong> Allan Lissa</strong>
											<span> Web Design </span>
										</div>
									</div>
									<small class="quote-icon"><i class="fa fa-quote-right">&nbsp;</i> </small>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="partners-wrapper">
					<div class=container>
						<div class="row">
							<div class="partners-slider owl-carousel owl-theme">
								<div>
									<a href="#"><img src="styles/assets/images/logo-01.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-04.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-03.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-02.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-05.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-01.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-04.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-03.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-02.png" alt="" /> </a>
								</div>

								<div>
									<a href="#"><img src="styles/assets/images/logo-05.png" alt="" /> </a>
								</div>
							</div>
						</div>
					</div>-->

<br>
<div class="container" style="text-align: center; " >
  
  	<div class="heading text-center ">
								<h2>Get the <strong> Comaprison</strong></h2>
								
							</div>


</div>


					<div class="container">

<table class="table table-bordered">
  <thead>
    <tr>
      <th>HARDWARE CHECKLIST</th>
      <th>Un</th>
      <th>Duex</th>
      <th>Trios</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Project Book</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
    <tr>
      <th scope="row">Arduino UNO R3</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
    <tr>
      <th scope="row">Breadboard</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
    <tr>
      <th scope="row">Pushbuttons</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">Blue leds (5mm)</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">Yellow/Orange leds (5mm)</th>
     <td><img src="images/no.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">Green leds (5mm)</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">Red leds (5mm)</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">NPN Transistors</th>
   <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
      <tr>
      <th scope="row">Diodes 1N4007</th>
    <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Resistors Multivalues</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Ceramic capacitors multivalues</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">9V Battery with snap</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Male to male jumper wires</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Female to female jumper wires</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Buzzer</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Phototransistors</th>
    <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Potentiometer 10k ohm</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Temperature sensor</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Seven segment display</th>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Shift registers</th>
     <td><img src="images/no.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Servo motor</th>
     <td><img src="images/no.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">DC Motor</th>
     <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">Keypad 4*4</th>
     <td><img src="images/no.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>
     <tr>
      <th scope="row">16*2 LCD Display</th>
    <td><img src="images/no.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
      <td><img src="images/yes.png" width="16" height="16"></td>
    </tr>

  </tbody>
</table>




</div>












	
				<section class="our-pricing" id="pricing">
					<div class=container>
						<div class="row">
							<div class="heading text-center ">
								<h2>OUR <strong> PRICING</strong></h2>
								<br>
								<br>
								
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="pricing-img">
									<br>
								</div>
								<div class="pricing-wrap">
									<div class="pricing-amount">
										<sup></sup><strong> ₹ 999</strong><sub></sub>
									</div>
									<div class="pricing-details">
										<strong>Un</strong>
										<ul class="star">
											<li></li>
											<li></li>
											<li></li>
										</ul>
										<p>
											12 Projects<br>
											20 Components	<br>										
											1 Pendrive(Software + Videos) <br>
											1 Instruction Manual 
										</p>
										<a href="#">Order Now </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="pricing-img">
									<br>
								</div>
								<div class="pricing-wrap">
									<div class="pricing-amount">
										<sup></sup><strong> ₹ 1499</strong><sub></sub>
									</div>
									<div class="pricing-details">
										<strong> Duex</strong>
										<ul class="star">
											<li></li>
											<li></li>
											<li></li>
										</ul>
										<p>
											20 Projects<br>
											25 Components	<br>										
											1 Pendrive(Software + Videos) <br>
											1 Instruction Manual 
										</p>
										<a href="#">Order Now </a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="pricing-img">
									<br>
								</div>
								<div class="pricing-wrap">
									<div class="pricing-amount">
										<sup></sup><strong> ₹ 1999</strong><sub></sub>
									</div>
									<div class="pricing-details">
										<strong> Trios</strong>
										<ul class="star">
											<li></li>
											<li></li>
											<li></li>
										</ul>
										<p>
											25 Projects<br>
											30 Components	<br>										
											1 Pendrive(Software + Videos) <br>
											1 Instruction Manual 
										</p>
										<a href="#">Order Now </a>
									</div>
								</div>
							</div>
						</div>
					</div>

				
				<!--<section class="latest-blogs" id="our-blog">
					<div class=container>
						<div class="heading text-center ">
							<h2>Latest <strong>Blogs</strong></h2>
						</div>
						<div class="blogs-container">
							<div class="blog-details-wrap">
								<div class="blogs-img">
									<img src="assets/images/img-10.jpg" alt="" />
								</div>
								<div class="blog-details">

									<div class="blog-title">
										<span>lifestyle </span>
									</div>
									<strong> April 17, 2016    /    By: <a href="#">Di Maria</a></strong>
									<h3> <a href="#">Curabitur acumsan  pulvinar</a></h3>
									<span class="greyline"></span>
									<span class="greyline small-greyline"></span>
									<p>
										Lorem ipsum dolor amet, consectetur adipiscing. Nunc nec lectus iaculis rutrum. Suspendisse viverra eros sed pulvinar malesuada magna neque semper...
									</p>
									<a href="blog-detail.html" class="btn"> read more</a>
								</div>
							</div>
							<div class="blog-details-wrap">
								<div class="blog-details right-arrow">
									<div class="blog-title">
										<span>artwork </span>
									</div>
									<strong> April 25, 2016    /    By: <a href="#">john Doe</a></strong>
									<h3><a href="#"> zalo elements aculis faucibus</a></h3>
									<span class="greyline"></span>
									<span class="greyline small-greyline "></span>
									<p>
										Lorem ipsum dolor amet, consectetur adipiscing. Nunc nec lectus iaculis rutrum. Suspendisse viverra eros sed pulvinar malesuada magna neque semper...
									</p>
									<a href="blog-detail.html" class="btn read-more"> read more</a>
								</div>
								<div class="blogs-img">
									<img src="assets/images/img-11.jpg" alt="" />
								</div>
							</div>
						</div>
						<div class="view-more">
							<a href="blog-list.html" class="btn view-more">view more </a>
						</div>
					</div>
				</section>
				<section class="contact-us" id="contact-us">
					<div class=container>
						<div class="heading">
							<h2>Contact Us</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum augue nec augue aliquam facilisis. Vivamus malesuada dolor molestie vel nunc.
							</p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="contact-info">
								<a href="#" class="contact-icon"><i class="icon-call-out"></i> </a>
								<a href="tel:6601234567890" class="contact-text"> +66 (0)123 456 7890</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="contact-info">
								<span  class="contact-icon"><i class="icon-location-pin"></i> </span>
								<span class="contact-text"> 3481 Melrose Place Beverly Hills, CA 90210</span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="contact-info">
								<a href="#" class="contact-icon"><i class="icon-envelope-letter"></i> </a>
								<a href="mailto:admin@trasuaemplate.com" class="contact-text"> admin@trasuaemplate.com</a>
							</div>
						</div>
					</div>
				</section>
			<!--	<section class="get-in-touch">
					<div class=container>
						<div class="form-area-wrap">
							<div class="heading">
								<h2>get in <strong>touch</strong></h2>
							</div>
							<div class="form-area">
								<form name="contactForm" method="post"  novalidate id="contact" class="contact-form" data-ng-controller='themeonCtrl'>
									<div class="col-xs-12 col-sm-6">
										<div class="necessary-info">
											<input id="name" class="contact-name" type="text" name="name" placeholder="John Doe *" required data-ng-model="contactformData.name"  data-ng-class="{'error' : contactForm.name.$error.pattern || submit && contactForm.name.$invalid}"/>
											<input id="email" class="contact-mail" type="email" name="email" placeholder="Email *" required data-ng-model="contactformData.email"   data-ng-class="{'error' : contactForm.email.$error.pattern || submit && contactForm.email.$invalid}"/>
											<input id="sub" class="contact-subject" type="text" name="subject" placeholder="Subject *" required data-ng-model="contactformData.subject" data-ng-class="{'error' : contactForm.subject.$error.required && contactForm.subject.$blured || submit && contactForm.subject.$invalid}"/>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="message-send">
											<textarea placeholder="Message *" id="message" name="message" data-ng-model="contactformData.message" required data-ng-class="{'error' : contactForm.message.$error.required && contactForm.message.$blured || submit && contactForm.message.$invalid}"></textarea>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="submit-btn">
											<a href="javascript:void(0)" class="btn comment-submit qoute-sub" data-ng-click="submitcontactForm(contactForm.$invalid)" data-ng-disabled="submitButtonDisabled"> submit </a>
										</div>
									</div>
								</form>
								<div style="display: none" id="contactSuccess">
									<span>Hey! Thanks for reaching out. I will get back to you soon</span>
								</div>
							</div>
						</div>
						<div class="reach-top-icon">
							<a href="#" class="top-large-arrow">&nbsp;</a>
							<a href="#" class="top-small-arrow">&nbsp;</a>
						</div>
					</div>
				</section>
			</div>
			<!--Content Area End-->
			<!--Footer Section Start
			<footer id="footer" class="footer-one">
				<div class="container">
					<div class="social-media-wrap">
						<a href="#"><i class="fa fa-twitter"></i> </a>
						<a href="#"><i class="fa fa-facebook"></i> </a>
						<a href="#"><i class="fa fa-instagram"></i> </a>
						<a href="#"><i class="fa fa-pinterest-p"></i> </a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					<div class="copy-right">
						Copyright &copy;2015 Designed by<a href="#"> Azuretheme.</a> All Rights Reserved.
					</div>
				</div>
			</footer> -->

			</section>


  <?php

include("public/footer.php");
  ?>











			<!--Footer Section End-->

		</div>
		<!--Page Wrapper End-->







	</body>
</html>