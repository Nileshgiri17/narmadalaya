<?php require "include/config.php"?>
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
			<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">			
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/select2.min.css">
			<link rel="stylesheet" href="css/select2-bootstrap4.min.css">
            <link rel="stylesheet" href="plugins/sweetalert/bootstrap-4.min.css">
            <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/style.css">
			<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
    <?php 
		if(isset($_POST['sendmail'])) {
		       
		    $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $datefrom = $_POST['datefrom'];
            $dateto = $_POST['dateto'];
            // $timefrom = $_POST['timefrom'];
            // $timeto = $_POST['timeto'];
            $type = $_POST['type'];
            $ex_place = $_POST['ex_place'];
			
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

			$mail->Subject = "Exhibition Organize Request";
			
			$mail->Body    = '<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>
  <body class="">
    <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p>Nimar Abhyudaya Rural Management And Development Associatin,</p>
                        <p>Exhibition Organize Request</p>
                        <table>
                          <tbody>
                            <tr>
                              <td>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td>  <b>Name:-</b> '.$name.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Email:-</b> '.$email.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Mobile No.:-</b> '.$mobile.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Date From:-</b> '.$datefrom.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Date To:-</b> '.$dateto.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Type:-</b> '.$type.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Address:-</b> '.$ex_place.' </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';
			$mail->AltBody = $_POST['message'];
        if(preg_match('/[^a-zA-Z\s]/', $name)){

        }

       $query = "INSERT INTO exhibition_org(ex_name, ex_email, ex_contact, ex_date_from, ex_date_to,  ex_type, ex_place) VALUES('$name', '$email', '$mobile', '$datefrom', '$dateto', '$type', '$ex_place')"; ;
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
        <div class="nav-size-sp main-menu">
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
                    <li><a href="RKSNSchool">School</a>
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
                      <li><a href="Contact">Contact</a></li>
                      <li><a href="Donation" class="genric-btn primary radius"  >Donation</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->
	
		<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
		<div class="card">  
                    <div class="card-header form-banner text-white">  
                        <h4 class="card-title text-uppercase" style="padding-left: 20px; color:#FFF;">Exhibition Form</h4>
                    </div>  
                    <?php 
                if(isset($_GET['mess'])) echo $_GET['mess'];
                ?>     
                    <div class="card-body">  
                        <form id="needs-validation" role="form" method="post" enctype="multipart/form-data" novalidate>  
                            <div class="row">  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="firstname">Name</label>  
                                        <input type="text" id="name" name="name" placeholder="Name" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                        <div class="invalid-feedback">  
                                            Please enter Name.  
                                        </div>  
                                    </div>  
                                </div>  
                                 <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="lastname">Email</label>  
                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                        <div class="invalid-feedback">  
                                            Please enter Email.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                         <label for="phonenumber">Mobile Number</label>  
                                         <input type="tel" pattern="^\d{10}$" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required />  
                                        <div class="invalid-feedback">  
                                            Please enter 10 digit mobile number.  
                                        </div>   
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                                
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="phonenumber">Date From</label>  
                                        <input type="text" class="form-control" id="datefrom" name="datefrom" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required />  
                                        <div class="invalid-feedback">  
                                            Please enter From Date.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="phonenumber">Date To</label>  
                                        <input type="text" class="form-control" id="dateto" name="dateto" aria-describedby="inputGroupPrepend"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask  required />  
                                        <div class="invalid-feedback">  
                                            Please enter Date To.  
                                        </div>  
                                    </div>  
                                </div>  
                                 <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="country">Exhibition Place</label>
                                            <select class="custom-select d-block w-100"  name="type" required />
                                            <option value="">Select Exhibition place..</option>
                                        <option value="Exhibition">Exhibition</option>
										<option value="Home">Home</option>
										<option value="Gardan">Gardan</option>
										<option value="Program">Program</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Please select a valid Place.
                                            </div> 
                                    </div>  
                                </div> 
                            </div> 
                            <!--<div class="row"> -->
                                <!--<div class="col-sm-4 col-md-4 col-xs-12">  -->
                                <!--    <div class="form-group">  -->
                                <!--        <label for="phonenumber">Time From</label>  -->
                                <!--        <input type="text" class="form-control" id="timefrom" name="timefrom" data-inputmask-alias="datetime" data-inputmask-inputformat="hh/mm" data-mask  required />  -->
                                <!--        <div class="invalid-feedback">  -->
                                <!--            Please enter Time From.  -->
                                <!--        </div>  -->
                                <!--    </div>  -->
                                <!--</div>  -->
                                <!--<div class="col-sm-4 col-md-4 col-xs-12">  -->
                                <!--    <div class="form-group">  -->
                                <!--        <label for="phonenumber">Time To</label>  -->
                                <!--        <input type="text" class="form-control" id="timeto" name="timeto" data-inputmask-alias="datetime" data-inputmask-inputformat="hh/mm" data-mask    required />  -->
                                <!--        <div class="invalid-feedback">  -->
                                <!--            Please enter Time To.  -->
                                <!--        </div>  -->
                                <!--    </div>  -->
                                <!--</div>  -->
                                 
                            <!--</div> -->
                            
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="address">Massage</label>  
                                        <textarea class="form-control" rows="3" id="ex_place" name="ex_place" aria-describedby="inputGroupPrepend" required /></textarea>  
                                        <div class="invalid-feedback">please enter address</div>  
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="float-right">  
                                        <a class="genric-btn info radius" href="Narmada_Nirmiti">Cancel</a>  
                                        <button type="submit" id="submit" name="sendmail" class="genric-btn primary radius" >Submit</button>  
                                    </div>       
                                    
                                </div>  
                            </div>  
                        </form>  
                    </div>  
            </div>  
		</div>	
	</section>
	<!-- End contact-page Area -->
            
 <!-- start footer Area -->
            <footer class="footer-area short-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Us</h4>
                                <p	class="footer-text">
                                    
                                    Nimar Abhyudaya Rural Management And Development Association (N.A.R.M.A.D.A.) is a spiritually oriented service mission. 
                                   <a href="bout" style="color: white;">Read more... </a>
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
    <script src="js/jquery.inputmask.bundle.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/main.js"></script>

<script>
    $( "form" ).submit(function( event ) {
    // Get the snackbar DIV
  var x = document.getElementById("snackbar");
  // Add the "show" class to DIV
  x.className = "show";
  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
});
</script>
<script>
  $(function () {

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    
     $('#timemask').inputmask('hh/mm', { 'placeholder': 'hh/mm' })
    
    //Money Euro
    $('[data-mask]').inputmask()
    
    //Money Euro
    $('[time-mask]').inputmask()

  })
</script>
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