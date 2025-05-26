<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Mobile Specific Meta -->
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
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">			
			<link rel="stylesheet" href="css/nice-select.css">				
			<link rel="stylesheet" href="plugins/sweetalert/bootstrap-4.min.css">
            <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/style.css">
			<script src="plugins/sweetalert/sweetalert2.min.js"></script>
            <script src="plugins/toastr/toastr.min.js"></script>
			
			<script type="text/javascript">
    function sendSuccess(){
          const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
    Toast.fire({
        type: 'success',
        title: ' Message Sent Successfully.'
      })
}
</script>
</head>
<body>
    <?php require "include/config.php"?>
    <?php $name = $_POST["name"]; ?>
    <?php $email = $_POST["email"]; ?>
    <?php $subject = $_POST["subject"]; ?>
    <?php $message = $_POST["message"]; ?>
    <?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

		//	$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.narmadalaya.org';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Narmadalaya NGO');
			$mail->addAddress('narmadalaya@gmail.com');     // Add a recipient
			$mail->addCC('info@narmadalaya.org');

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			
			$mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demystifying Email Design</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img src="https://narmadalaya.org/main/img/narmada_logo.png" alt="N.A.R.M.A.D.A Logo" width="150" height="150" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 14px;">
                                        <b>Name:-</b> '.$name.' 
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 14px;">
                                        <b>Email:-</b> '.$email.' 
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 14px;">
                                         <b>Subject:-</b> '.$subject.' 
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 14px;">
                                        <b>Massage:-</b> '.$message.' 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
			$mail->AltBody = $_POST['message'];
			
            $query = "INSERT INTO contact_us(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')" ;
       $fire = mysqli_query($con, $query) or die ("Can not insert data inti database" .mysqli_error($con));
       
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo '<script type="text/javascript">
       sendSuccess();
      </script>';
			}
		}
	 ?>
    <header id="header">
        <div class="nav-size main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="Home"><img src="img/logo.png" alt="" title="" id="header-logo"/></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="Home">Home</a></li>
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
                            <li><a href="what's_new">What's New</a></li>
                            <li><a href="Events">Events</a></li>
                            <li><a href="Gallery">Gallary</a></li>
                        </ul>
                    </li>
                    <li><a href="RKSNSchool">Schools</a>
                    </li>
                                        <li class="menu-has-children"><a href="">Books & Blog</a>
                        <ul>
                            <li><a href="Narmada-Parikrama" target="_blank">Narmada Parikrama - Audio</a></li>
                            <li><a href="Bhatkantichi-Pathshala" target="_blank">Bhatkantichi Pathshala - Audio</a></li>
                            <li><a href="https://narmada-bharati.blogspot.com/" target="_blank">Blog - Marathi</a></li>
                            <li><a href="https://narmadalaya-ngo.blogspot.com/" target="_blank">Blog - Hindi</a></li>
                        </ul>
                      </li>
                      <li class="menu-has-children"><a href="">Achivements</a>
                        <ul>
                              <li><a href="Awards">Awards</a></li>
                            <li><a href="Sports">Sports</a></li>
                            <li><a href="News">News & Views</a></li>					
                        </ul>
                      </li>					          					          		          
                      <li><a href="#" class="active">Contact</a></li>
                      <li><a href="Donation" class="genric-btn primary radius"  >Donation</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->	

		<!-- Start contact-page Area -->
		<section class="contact-page-area section-gap">
			<div class="container">
			    <div class="col-md-12">
                    <center>
                        <h1>
                        Contact us			
                    </h1>
                    </center>	
                </div><br/>
				<div class="row">
                    <div class="col-lg-4 d-flex flex-column address-wrap">
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-home"></span>
							</div>
							<div class="contact-details">
								<h5>Narmadalaya, Lepa Punarwas (Bairagarh), </h5>
								<p>
									Tehsil – Kasrawad, District – Khargone, Madhya Pradesh, India,  Pin Code – 451228
								</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-phone-handset"></span>
							</div>
							<div class="contact-details">
								<h5>+91 9575756141, +91 8120202010</h5>
								<p>Mon to Sat 9.30am to 6 pm</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-envelope"></span>
							</div>
							<div class="contact-details">
								<h5>narmadalaya@gmail.com</h5>
								<p>Send us your query anytime!</p>
							</div>
						</div>													
					</div>
					<div class="col-lg-8">
						<form id="needs-validation" class="form-area contact-form "  role="form" method="post" enctype="multipart/form-data" novalidate>
							<div class="row">	
							    <div class="col-lg-6 form-group">
									<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" type="text" required />
								    <div class="invalid-feedback">Please enter Name</div>  
									<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email"> 
                                    <div class="invalid-feedback">Please enter Email</div>  
                                    <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									<div class="invalid-feedback">Please enter Subject</div>  
								</div>
								<div class="col-lg-6 form-group">
									<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>	
									<div class="invalid-feedback">Please enter Message</div>  
								</div>
								<div class="col-lg-12">
									<div class="alert-msg" style="text-align: left;"></div>
									<button type="submit" name="sendmail" class="genric-btn primary" style="float: right;">Send Message</button>	
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>	
		</section>
	<!-- End contact-page Area -->
	        <div class="map-wrap">
            <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.1567736416832!2d75.68572491445437!3d22.11999755500651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39627da18179c3bf%3A0x221e328cfe3a0837!2sNimar%20Abhyudaya%20Rural%20Management%20And%20Development%20Association!5e0!3m2!1sen!2sin!4v1590298011771!5m2!1sen!2sin" width="100%" height="650" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
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

            
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>				
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
    <script src="js/mail-script.js"></script>	
    <script src="js/main.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <script type="text/javascript">  
        (function () {  
            'use strict';  
            window.addEventListener('load', function () {  
                var form = document.getElementById('needs-validation');  
                form.addEventListener('submit', function (event) {  
                    if (form.checkValidity() === false) {  
                        event.preventDefault();  
                        event.stopPropagation();  
                    }  
                    form.classList.add('was-validated');  
                }, false);  
            }, false);  
        })();  
    </script> 
</body>
</html>