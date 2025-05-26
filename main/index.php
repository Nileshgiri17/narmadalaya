<?php
include('include/Mobile_Detect.php');
include('include/BrowserDetection.php');
include('include/config.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}else{
	$os='Window';
}

$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
$sql="insert into visitors_list(browser_name,browser_version,type,os,url,ref) values('$browser_name','$browser_version','$type','$os','$url','$ref')";
mysqli_query($con,$sql);
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>:: Welcome to N.A.R.M.A.D.A. ::</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">			
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/Carousel.css">
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>	
			
		  <header id="header">
		    <div class="nav-size main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="Home"><img src="img/logo.png" alt="" title="" id="header-logo"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			        	<li class="active"><a href="#" class="active">Home</a></li>
						<li class="menu-has-children"><a href="">Who We Are</a>
							<ul>
			        	        <li><a href="History">History</a></li>
								<li><a href="Vision">Vision & Mission</a></li>
							    <li><a href="Bord-Members">Board Members</a></li>
							    <li><a href="Team-Member">Team</a></li>
							    <li><a href="Advisory-Committee">Advisory Committee</a></li>
                            <li><a href="Organization-Certifications">Organization Certifications</a></li>
							</ul>
						</li>
					  	<li class="menu-has-children"><a href="">Current Activities</a>
							<ul>
							    <li><a href="what's_new.html">What's New</a></li>
								<li><a href="Events">Events</a></li>
								<li><a href="Gallery">Gallary</a></li>
							</ul>
						</li>
						<li><a href="RKSNSchool">Schools</a>
						</li>
                    <li class="menu-has-children"><a href="">Books & Blog</a>
                        <ul>
                            <li><a href="Narmada-Parikrama"  target="_blank">Narmada Parikrama - Audio</a></li>
                            <li><a href="Bhatkantichi-Pathshala"  target="_blank">Bhatkantichi Pathshala - Audio</a></li>
                            <li><a href="https://narmada-bharati.blogspot.com/" target="_blank">Blog - Marathi</a></li>
                            <li><a href="https://narmadalaya-ngo.blogspot.com/" target="_blank">Blog - Hindi</a></li>
                        </ul>
                      </li>
			          	<li class="menu-has-children"><a href="">Achivements</a>
			            	<ul>
		            	  		<li><a href="Awards">Awards</a></li>
								<li><a href="Sports">Sports</a></li>
								<li><a href="News">News</a></li>				
							</ul>
			          	</li>					          					          		          
						  <li><a href="Contact">Contact</a></li>
						  <li><a href="Donation" class="genric-btn primary radius">Donation</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

		  			<!-- Start home-about Area -->
			<section class="home-about-area">
			    <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:90px;">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" href="#">
								<img src="img/slides/slider08.jpg" href="narmada_jayanti_utsav.html" class="d-block w-100" alt="">								
								<div class="container">
									<div class="row">
										<div class="carousel-caption text-start nju">
											<p><a class="primary-btn text-uppercase " href="narmada_jayanti_utsav.html" role="button">View Full Details</a></p>
										</div>
									</div>									
								</div>
							</div>
                            <div class="carousel-item ">
                                <img src="img/slides/Childern04.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slides/Childern03.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slides/Narmada.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img src="img/slides/desgin23.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slides/Childern01.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
			</section>
		  
			<!-- Start home-about Area -->
			<section class="home-about-background short-gap">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-7 col-md-7 home-about-left">
							<h6 class="text-white">About Us</h6>
							<h1 class="text-uppercase text-white">N.A.R.M.A.D.A.</h1>
							<h4 class="text-white">
								<b style="font: revert;
    font-size: x-large;">N</b>imar <b style="font: revert;
    font-size: x-large;">A</b>bhyudaya <b style="font: revert;
    font-size: x-large;">R</b>ural <b style="font: revert;
    font-size: x-large;">M</b>anagement <b style="font: revert;
    font-size: x-large;">A</b>nd <b style="font: revert;
    font-size: x-large;">D</b>evelopment <b style="font: revert;
    font-size: x-large;">A</b>ssociation (N.A.R.M.A.D.A.) is a spiritually oriented service mission. It was founded in October 2010 by Bharati Thakur after she completed Narmada Parikrama. It runs free pre-school to high school level educational Centres at Lepa Punarvas (Bairagarh), Bhattyan and Chhoti Khargone specially for the children of economically weaker section of the society in the Khargoan District of Nimar Region of Madhya Pradesh.
							</h4><br/>
							<a href="narmadalaya.html" class="primary-btn text-uppercase">View Full Details</a>
						</div>
						<div class="col-lg-5 col-md-5 home-about-right">
							<img class="img-fluid radius" src="img/about_us.png" alt="" id="about-img" style="border-radius: 10%;">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="banner-area bg-sky short-gap" >
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
								<h1 class="mb-10">Current Activities</h1>
								<p>Nimar Abhyudaya began it’s work in the rural area of Nimar Region of Madhya Pradesh specially in the Narmada basin in 2010. Since then, it’s activities have expanded many folds.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
							    <a href="About">
								    <img class="img-fluid bor" src="img/narmadalaya_home.jpg" alt="">
								    <h4>Narmadalaya</h4>
								</a>
								<p>
									“Informal educational centres started in 2010 with only 14 students in Lepa village. This activity is meant...”
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
							    <a href="RKSNSchool">
								    <img class="img-fluid bor" src="img/rksn/rksn.jpg" alt="">
								    <h4>Ramkrishna Sarda Niketan</h4>
							    </a>
								<p>
									"First School with vocational training <br/>
									  in Nimar Region<br/>
									in Madhya Pradesh..."
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<a href="Ram_Krishna_Tecnical_Institude">
								    <img class="img-fluid bor" src="img/rit/rit.jpg" alt="">
								    <h4>Ramkrishna Technical Institute</h4>
								    </a>
								<p>
									"A rural technology Centre has been set up in 2016. Training in Plumbing, Carpentering, Welding..."
								</p>
							</div>	
						</div>						
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
							    <a href="Narmada_Nirmiti">
								    <img class="img-fluid bor" src="img/nirmiti/3.png" alt="">
							        <h4>Narmada Nirmiti</h4>
							     </a>
								<p>
									"An initiative to empower village womenfolk"
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<a href="Goshala">
									  <img class="img-fluid bor" src="img/goshala/goshala.jpg" alt="">
							            <h4>Goshala</h4>
							    </a>
								<p>
									"The Goshala was donated by Sant Rajgiri baba to us in 2014 with 6 cows. Presently 21 Nimari breed cows..."
								</p>
							</div>				
						</div>		
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
							    <a href="Narmada_Swar_Lahri">
								    <img class="img-fluid bor" src="img/lahari/lahri.jpg" alt="">
							        <h4>Narmada Swar Lahri</h4>
							     </a>
								<p>
									"Narmada Swar Lahari is a musical orchestra of students of Ramkrishna Sarda Niketan. They are..."
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End services Area -->	

			<!-- start banner Area services-area -->
			<section class="about-banner short-gap">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
					    <div class="col-lg-6 col-md-6 banner-right">
							<img class="img-fluid" src="img/RBI.png" alt="">
						</div>
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">HONOUR FOR NARMADALAYA BY</h6>
							<h3 class="text-white">Reserve Bank Officer’s Assocciation, Mumbai </h3><br/>
							<p class="text-white">On 07 March 2017 our students presented a musical program at Reserve Bank of India, Mumbai. The program was organised by RBI officer’s Association, Mumbai. On this occasion, Bharati Thakur, the founder of N.A.R.M.A.D.A. presented her journey – from Narmada Parikrama to Narmadalaya ie development of the project Narmadalaya for school dropouts and women empowerment, vocational skills to rural youth. The entire program was well appreciated by the audience. Many employees of the Reserve Bank of India have formed a whatsapp group called 'Narmadalaya Mitra' and they sponsor many students every year. Most of the group members visit Narmadalaya whenever possible to them.
							</p>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start testimonial Area -->
		    <section class="testimonial-area short-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Board Members</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Lalita_Deshpande.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                            <h4>Dr Lalita Deshpande</h4>
									<p>President</p>
									<p>Mathematician, Social Worker</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Kishore_Bhamre.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                            <h4>Kishore Bhamre</h4>
									<p>Vice President</p>
									<p>Social Worker, Mumbai</p>
		                      </div>
							</div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Mahesh Dabak.jpg" alt=""  style="width:165px; height:165px;">
		                        </div>
		                        <div class="desc">
		                            <h4>Mahesh Dabak</h4>
									<p>Vice President</p>
									<p>Educationalist</p>
		                        </div>
							</div>
							<div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Mangesh_Kekre.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                            <h4>Mangesh Kekre</h4>
									<p>Vice President</p>
									<p>Chartered Accountant, Indore</p>
		                        </div>
							</div>
							<div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Bharati_Thakur.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                            <h4>Bharati Thakur</h4>
									<p>Secretary</p>
									<p>Social Worker, Educationalist & Writer</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/Sarvjeet_Paranjpe.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                          <h4>Sarvjit Paranjpe</h4>
									<p>Treasurer</p>
									<p>Environmentalist</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/bord/ravindra_marathe.jpg" alt="">
		                        </div>
		                        <div class="desc">
		                            <h4>Ravindra Marathe</h4>
									<p>Member</p>
									<p>Retired Accountant</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->
		
		    <!-- Start brands Area -->
		    <section class="brands-area">
		        <div class="container">
		            <div class="row d-flex justify-content-center" >
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
								<h1 class="mb-10 pb-20" style="color: #fff;">Partners In Our Progress</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="brand-wrap">
		                <div class="row align-items-center justify-content-start no-gutters">
		                    <div class="col single-brand single-brand-gap10">
		                        <img class="mx-auto bor" src="img/s1.png" alt="General Insurance Corporation of India" title="General Insurance Corporation of India">
		                    </div>
		                     <div class="col single-brand single-brand-gap10">
		                        <img class="mx-auto bor" src="img/s3.png"  title="Life Insurance Corporation">
		                    </div>
		                    <div class="col single-brand single-brand-gap10">
		                        <img class="mx-auto bor" src="img/s6.png" title="ValueLabs"  alt="ValueLabs">
		                    </div>
		                    <div class="col single-brand single-brand-gap10">
		                        <img class="mx-auto bor" src="img/s4.png" title="Hindustan Petroleum" alt="Hindustan Petroleum">
		                    </div>
		                    <div class="col single-brand single-brand-gap10">
		                        <img class="mx-auto bor" src="img/s2.png" alt="Bhabha Atomic Research Centre" title="Bhabha Atomic Research Centre">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
			<!-- End brands Area -->
						
            <!-- start footer Area -->
            <footer class="footer-area short-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Us</h4>
                                <p	class="footer-text">
                                    
                                    Nimar Abhyudaya Rural Management And Development Association (N.A.R.M.A.D.A.) is a spiritually oriented service mission. 
                                   <a href="About" style="color: white;">Read more... </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p	class="footer-text">Stay updated with our latest trends</p>
								<div class="" id="mc_embed_signup" >
									 <form action="https://narmadalaya.us10.list-manage.com/subscribe/post?u=f52ede5c09267a41beebfac88&amp;id=658db43dbe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									  <div class="input-group">
										<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
									        <span class="lnr lnr-arrow-right"></span>
										  </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p	class="footer-text">Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/narmadalaya.ngo" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.youtube.com/channel/UCHZR1Z4yFD2fOfjWjYYh-Ng" target="_blank"><i class="fa fa-youtube"></i></a>
									<a href="https://www.instagram.com/narmadalaya/" target="_blank"><i class="fa fa-instagram"></i></a>
									<a href="https://narmada-bharati.blogspot.com/" target="_blank"><i class="fa fa-bold "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		
			<!-- begin Back to Top button -->
			<a class="back_to_top" title="Back To Top">&uarr;</a>
			<div class="social_icons_fix">
				<a href="https://www.facebook.com/narmadalaya.ngo" target="_blank">
				<div class="social_icons_fix fb">
					<i class="fa fa-facebook"></i>
				  </div></a>

				  <a href="https://www.youtube.com/channel/UCHZR1Z4yFD2fOfjWjYYh-Ng" target="_blank">
				  <div class="social_icons_fix youtube">
					<i class="fa fa-youtube" ></i>
				  </div>
				</a>
				  <a href="https://www.instagram.com/narmadalaya/" target="_blank">
				  <div class="social_icons_fix instagram">
					<i class="fa fa-instagram"></i>
				  </div>
				</a>
				<a href="http://narmada-bharati.blogspot.com/" target="_blank">
				  <div class="social_icons_fix blog">
					<img src="img/social/blog.png" alt="">
				  </div>
				</a>
			</div>


			<!-- end Back to Top button -->
			<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>					
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/main.js"></script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
		</body>
	</html>