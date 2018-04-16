<?php
include('functions.php');
?>

<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RG Fitness</title>
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="images\RG_Fitness_logo.jpg" type="image/jpg" sizes="16x16">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<!-- Logo -->
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">RG<span>Fitness</span></a></h1>
						<!-- Navigation -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="classes.php" class="fh5co-sub-ddown">Classes</a>
									 
								</li>
								<li>
									<a href="tutorials.php">Tutorials</a>
								</li>
								<li><a href="trainer.php">Trainers</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/pullup.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Contact Us</h1>
							<p>If you have any queries please feel free to contact us below. </p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-contact">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6 animate-box">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>7 Mullinmore Road, Carrickmore, County Tyrone</li>
								<li><i class="icon-phone2"></i>07936 769858</li>
								<li><i class="icon-mail"></i><a href="ruarigrimes@hotmail.co.uk">ruarigrimes@hotmail.co.uk</a></li>
								<li><i class="icon-facebook2"></i><a href="https://www.facebook.com/RG-Fitness-1610164359233735/">RG Fitness</a></li>
							</ul>
						</div>
					<!-- Do not change the code! -->
						<a id="foxyform_embed_link_925222" </a>
						<script type="text/javascript">
						(function(d, t){
						   var g = d.createElement(t),
						       s = d.getElementsByTagName(t)[0];
						   g.src = "http://www.foxyform.com/js.php?id=925222&sec_hash=3d1bb6f6a9c&width=350px";
						   s.parentNode.insertBefore(g, s);
						}(document, "script"));
						</script>
					<!-- Do not change the code! -->
							
						<!-- <form action= "mailer.php"  id="customer_signup" action="#" method="POST">
								<
						<div class="col-md-6 animate-box">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="submit_btn" value="Send Message" />
									</div>
								</div>
							</div>
						</div>
						</form> -->
					</div>
				</form>
			</div>
		</div>

		
		<!-- END fh5co-contact -->
		
		<!--Map -->
		<style>
		#map{
			height:400px;
			width:100%;
		}
	</style>
	<div id="map"></div>
    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.5949, lng:  -7.0462},
          zoom: 12
        });

        var marker = new google.maps.Marker({
          map: map,
          position: {lat: 54.599238, lng: -7.055822},
          title: 'RG Fitness'
        });
      }

    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtopmKO-junKb_rrXI3OSij14wkfA8MYA&callback=initMap"
    async defer>
	</script>
		
		<?php include 'footer.php';?>
		
		
		
		
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="simple-form/gen_validator31.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

