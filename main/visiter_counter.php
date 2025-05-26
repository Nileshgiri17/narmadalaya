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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">		
			<link rel="stylesheet" href="dataTables.bootstrap4.css">	
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/style.css">
</head>
<body>
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
                      <li class="menu-has-children active"><a href="" class="active">Achivements</a>
                        <ul>
                              <li class="active"><a href="#" class="active">Awards</a></li>
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


    <div class="container pt-90">

        

       <div class="card">
            <div class="card-header">
              <h3 class="card-title">Website Visiter Data</h3>
              <div class="row card-title">
                  <div class="col-md-3 ">
                       <?php
                        require_once "include/config.php";
                        foreach($con->query('SELECT COUNT(*) FROM visitors_list') as $row) {
                        echo "<tr>";
                        echo "<td>Total Visitor = </td>";
                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                        echo "</tr>";
                        }
                        ?>
                  </div>
                  <?php
                        require_once "include/config.php";
                        foreach($con->query('SELECT type,COUNT(*)
FROM visitors_list      
GROUP BY type') as $row) {
                  echo "<div class='col-md-3'>";
                       
                echo "<td>". $row['type'] ." Visitor = </td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
                       
                       echo "</div>";
}
                        ?>
                        
                      
              </div>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
                <table id='example1' class='table table-bordered'>
                 <thead>
                 <tr>
                    <th>ID</th>
                    <!--<th>Browser Name</th>-->
                    <th>URL</th>
                <!--<th>Browser Version</th>-->
                <!--<th>Type</th>-->
                <th>OS</th>
                <th>Time</th>
                 </tr>
                     </thead>
               
                  <tbody>
                       <?php
                    // Include config file
                    require_once "include/config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM  visitors_list";
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                 // echo "<td>" . $row['browser_name'] . "</td>";
                  echo "<td>" . $row['url'] . "</td>";
                //  echo "<td>" . $row['browser_version'] . "</td>";
                 // echo "<td>" . $row['type'] . "</td>";
                  echo "<td>" . $row['os'] . "</td>"; 
                  echo "<td>" . $row['timedtamp'] . "</td>";
                  echo " </tr>";
                   }
                echo "</tbody>";;
                // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <script src="js/main.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>