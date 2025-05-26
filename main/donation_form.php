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
    $dob='';
		if(isset($_POST['sendmail'])) {
		       
		    $name = $_POST["name"];
            $email = $_POST["email"]; 
            $dob = $_POST["dob"]; 
            $phonenumber = $_POST["phonenumber"];
            $whatsapp = $_POST["whatsapp"];
            $tranid = $_POST["tranid"];
            $pancard = $_POST["pancard"];
            $address = $_POST["address"]; 
			
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

			$mail->Subject = "Donation";
			
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
                        <p>Donation</p>
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
                                      <td>  <b>Date of Birth:-</b> '.$dob.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Mobile No.:-</b> '.$phonenumber.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>WhatsApp No.:-</b> '.$whatsapp.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>Transaction No.:-</b> '.$tranid.' </td>
                                    </tr>
                                    <tr>
                                      <td>  <b>PAN Card:-</b> '.$pancard.' </td>
                                    </tr>
                                                                        <tr>
                                      <td>  <b>Address:-</b> '.$address.' </td>
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
            $mail->send();
            $mail->ClearAddresses();
			$mail->addAddress($email);     // Add a recipient
			$mail->addCC('noreply@narmadalaya.org');

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = "Thanks for Donation";
			
			$mail->Body    = '<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <title>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      #outlook a{padding: 0;}
      			.ReadMsgBody{width: 100%;}
      			.ExternalClass{width: 100%;}
      			.ExternalClass *{line-height: 100%;}
      			body{margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
      			table, td{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
      			img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
      			p{display: block; margin: 13px 0;}
    </style>
    <!--[if !mso]><!-->
    <style type="text/css">
      @media only screen and (max-width:480px) {
      			  		@-ms-viewport {width: 320px;}
      			  		@viewport {	width: 320px; }
      				}
    </style>
    <!--<![endif]-->
    <!--[if mso]> 
		<xml> 
			<o:OfficeDocumentSettings> 
				<o:AllowPNG/> 
				<o:PixelsPerInch>96</o:PixelsPerInch> 
			</o:OfficeDocumentSettings> 
		</xml>
		<![endif]-->
    <!--[if lte mso 11]> 
		<style type="text/css"> 
			.outlook-group-fix{width:100% !important;}
		</style>
		<![endif]-->
    <style type="text/css">
      @media only screen and (max-width:480px) {
      
      			  table.full-width-mobile { width: 100% !important; }
      				td.full-width-mobile { width: auto !important; }
      
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-100 {
      	width: 100.000000% !important;
      	max-width: 100.000000%;
      }
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-40 {
      	width: 40% !important;
      	max-width: 40%;
      }
      .dys-column-per-60 {
      	width: 60% !important;
      	max-width: 60%;
      }
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-100 {
      	width: 100.000000% !important;
      	max-width: 100.000000%;
      }
      }
      @media only screen and (max-width:480px) {
      
      			  table.full-width-mobile { width: 100% !important; }
      				td.full-width-mobile { width: auto !important; }
      
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-100 {
      	width: 100.000000% !important;
      	max-width: 100.000000%;
      }
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-100 {
      	width: 100.000000% !important;
      	max-width: 100.000000%;
      }
      }
      @media only screen and (min-width:480px) {
      .dys-column-per-100 {
      	width: 100.000000% !important;
      	max-width: 100.000000%;
      }
      }
    </style>
  </head>
  <body>
    <div>
      <!--[if mso | IE]>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:10px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tr>
                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                          <tbody>
                            <tr>
                              <td style="width:130px;">
                                  <img alt="LoGo Here" width="130" height="130" src="https://narmadalaya.org/main/img/Nimar_Abhyudaya.png" style="border:0;display:block;font-size:13px;height:130px;outline:none;text-decoration:none;width:100%;" width="130" />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
                <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
     
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="color:#E44D26;font-family:Open Sans, Arial, sans-serif;font-size:18px;font-weight:bold;line-height:20px;text-align:left;">
                                Dear '.$name.'
                           
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="color:#30373b;font-family:Open Sans, Arial, sans-serif;font-size:16px;line-height:20px;text-align:left;">
                          <b>Greetings from Nimar Abhuydaya !</b><br/><br/> Many thanks for your kind help for N.A.R.M.A.D.A. Project. We look forward for
your personal visit and guidance whenever possible to you. 
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
      <!--[if mso | IE]>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:10px 0;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tr>
                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                          <tbody>
                           <tr>
                      <td align="center" style="font-size:0px;padding:10px 25px 20px 0px;word-break:break-word;">
                        <div style="color:#E44D26;font-family:Open Sans, Arial, sans-serif;font-size:36px;font-weight:bold;line-height:20px;text-align:center;">
                                Welcome to
                           
                        </div>
                      </td>
                    </tr>
                            <tr>
                              <td style="width:450px;">
                                <img alt="Welcome!" height="250" src="https://narmadalaya.org/main/img/narmadalaya_mail.png" style="border:0;display:block;font-size:13px;height:250px;outline:none;text-decoration:none;width:100%;" width="450" />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
                <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
      <!--[if mso | IE]>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tr>
                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;" vertical-align="middle">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;width:210px;">
                          <tr>
                            <td align="center" bgcolor="#E44D26" role="presentation" style="background-color:#E44D26;border:none;border-radius:3px;cursor:auto;height:25px;padding:10px 25px;" valign="middle">
                              <a href="https://narmadalaya.org/main/" style="background:#E44D26;color:#ffffff;font-family:Open Sans, Arial, sans-serif;font-size:17px;line-height:120%;margin:0;text-decoration:none;" target="_blank">
                                Website
                              </a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
                <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
</td></tr></table>


<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="color:#30373b;font-family:Open Sans, Arial, sans-serif;font-size:16px;line-height:20px;text-align:left;">
                          With warm regards,<br/><br/> 
                          <b>Bharati Thakur</b><br/>
                          Secretary<br/>
                          Nimar Abhyudaya<br/>
                          Rural Management And Development Association.
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
                <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
</td></tr></table>
<![endif]-->



<![endif]-->
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#04091e;background-color:#04091e;width:100%;">
        <tbody>
          <tr>
            <td>
              <div style="margin:0px auto;max-width:600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:2px;text-align:center;vertical-align:top;">
                        <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
<![endif]-->
                        <div class="dys-column-per-100 outlook-group-fix" style="direction:ltr;display:inline-block;font-size:13px;text-align:left;vertical-align:top;width:100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="padding:10px;vertical-align:top;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
                                    <!-- Social Icons -->
                                    <tr>
                                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                        <table border="0" cellpadding="0" cellspacing="0" style="cellpadding:0;cellspacing:0;color:#000000;font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;" width="100%">
                                          <tr>
                                            <td align="center" valign="top">
                                              <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td valign="top">
                                                    <a href="https://www.facebook.com/narmadalaya.ngo" style="text-decoration:none;" target="_blank">
                                                      <img alt="Facebook" border="0" height="26" src="https://narmadalaya.org/main/img/social/facebook.png" style="display:block;font-family: Arial, sans-serif; font-size:10px; line-height:18px; color:#feae39; " width="26" />
                                                    </a>
                                                  </td>
                                                  <td width="7">
                                                    &nbsp;
                                                  </td>
                                                  
                                                  <td valign="top">
                                                    <a href="https://narmada-bharati.blogspot.com/" style="text-decoration:none;" target="_blank">
                                                      <img alt="Blogger" border="0" height="26" src="https://narmadalaya.org/main/img/social/blogger.png" style="display:block;font-family: Arial, sans-serif; font-size:10px; line-height:18px; color:#feae39; " width="26" />
                                                    </a>
                                                  </td>
                                                   <td width="7">
                                                    &nbsp;
                                                  </td>
                                                  <td valign="top">
                                                    <a href="https://www.instagram.com/narmadalaya/" style="text-decoration:none;" target="_blank">
                                                      <img alt="Instagram" border="0" height="26" src="https://narmadalaya.org/main/img/social/instagram.png" style="display:block;font-family: Arial, sans-serif; font-size:10px; line-height:18px; color:#feae39; " width="26" />
                                                    </a>
                                                  </td>
                                                  <td width="7">
                                                    &nbsp;
                                                  </td>
                                                  <td valign="top">
                                                    <a href="https://www.youtube.com/user/narmadalaya" style="text-decoration:none;" target="_blank">
                                                      <img alt="Youtube" border="0" height="26" src="https://narmadalaya.org/main/img/social/youtube.png" style="display:block;font-family: Arial, sans-serif; font-size:10px; line-height:18px; color:#feae39; " width="26" />
                                                    </a>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <!-- End Social Icons -->
                                    <!-- Footer Content -->
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:5px;word-break:break-word;">
                                        <div style="color:#fff;font-family:Open Sans, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;text-transform:uppercase;">
                                          Address :- Narmadalaya, Lepa Punarwas (Bairagarh),
Tehsil – Kasrawad, Dist – Khargone, Madhya Pradesh, India, Pin Code – 451228
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="center" style="font-size:0px;padding:5px;word-break:break-word;">
                                        <div style="color:#fff;font-family:Open Sans, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;text-transform:uppercase;">
                                          Mobile :- +91 9575756141, +91 8120202010
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td align="center" style="font-size:0px;padding:5px;word-break:break-word;">
                                        <div style="color:#fff;font-family:Open Sans, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;text-transform:uppercase;">
                                         Email :- narmadalaya@gmail.com
                                        </div>
                                      </td>
                                    </tr>
                                    <!-- End Footer Content -->
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]>
</td></tr></table>
<![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>';
			$mail->AltBody = $_POST['message'];
			
			
        if(preg_match('/[^a-zA-Z\s]/', $name)){

        }
        
        $result=explode('-', $dob);
        $date=$result[2];
        $month=$result[1];
        $year=$result[0];
        $new=$date.'-'.$month.'-'.$year;
       $query = "INSERT INTO donerlist(name, email, dob, phonenumber, whatsapp, address) VALUES('$name', '$email', '$new', '$phonenumber', '$whatsapp', '$address')" ;
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
                        <h4 class="card-title text-uppercase" style="padding-left: 20px; color:#FFF;">Donation Form</h4>
                    </div>  
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
                                        <label for="phonenumber">Date of Birth</label>  
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" aria-describedby="inputGroupPrepend" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required>  
                                        <div class="invalid-feedback">  
                                            Please enter Date of Birth.  
                                        </div>  
                                    </div>  
                                </div> 
                            </div>  
                            <div class="row">  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                         <label for="phonenumber">Mobile Number</label>  
                                         <input type="tel" pattern="^\d{10}$" class="form-control" id="phonenumber" name="phonenumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter 10 digit mobile number.  
                                        </div>   
                                    </div>  
                                </div>  
                                 <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                         <label for="phonenumber">WhatsApp Number</label>  
                                         <input type="tel" pattern="^\d{10}$" class="form-control" id="whatsapp" name="whatsapp" placeholder="WhatsApp Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter 10 digit WhatsApp number.  
                                        </div>   
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="phonenumber">Transaction no.</label>  
                                        <input type="text" class="form-control" id="tranid" name="tranid" placeholder="Transaction number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter Transaction number.  
                                        </div>  
                                    </div>  
                                </div>  
                                
                            </div>  
                            <div class="row"> 
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <div class="form-group">  
                                        <label for="phonenumber">PAN Number</label>  
                                        <input type="text" class="form-control" id="pancard" name="pancard" placeholder="PAN Number" aria-describedby="inputGroupPrepend" required>  
                                        <div class="invalid-feedback">  
                                            Please enter PAN Number.  
                                        </div>  
                                    </div>  
                                </div>  
                                <div class="col-sm-8 col-md-8 col-xs-8">  
                                    <div class="form-group">  
                                        <label for="address">Address</label>  
                                        <textarea class="form-control" rows="3" id="address" name="address" aria-describedby="inputGroupPrepend" required></textarea>  
                                        <div class="invalid-feedback">please enter address</div>  
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="float-right">
                                         <div class="card-body">
                        <a class="genric-btn info radius" href="Donation">Cancel</a>  
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
                                   <a href="https://narmadalaya.org/main/About" style="color: white;">Read more... </a>
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
 
</body>
</html>