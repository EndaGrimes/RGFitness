<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="registration/slider.css">
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">RG<span>Fitness</span></a></h1>
						<!-- menu -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="classes.php">Classes</a>
									 
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
		
		
		<!-- header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-deadlift.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Welcome to <b>RG Fitness</b></h1>
							<p>If you have any questions please send us an email or contact us on facebook.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
  	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png" height=100px width=100px >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<a href="login.php?logout='1'" style="color: red;">logout</a>
				

				<?php endif ?>
			</div>
			<div>
				<?php  
					$booking_id = strtoupper($_GET['booking_id']);


					$response = $Checkfront->get("booking/{$booking_id}");


					if (empty($response['booking'])) {

					    echo "Booking not found!";

					} else {

					    $booking_id = $response['booking']['booking_id'];

					    $date   = $response['booking']['date'];

					    $time  = $response['booking']['time'];

					    $pt  = $response['booking']['PT'];

					    echo "{$booking_id} dates for sessions are on '{$date}', at {$time} with {$pt}";

					}
				?>
			</div>
		</div>
	</div>

		
		<?php include 'footer.php';?>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- jQuery -->
	

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
	<script src='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js'></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
	
		<script src="js/slider.js"></script>

	
	</body>
</html>

