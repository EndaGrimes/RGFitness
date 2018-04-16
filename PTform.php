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
	<link rel="stylesheet" href="css/ptform.css">
	

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
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Booking Form -->
		

      	    	<div class="content">
		  <div class="margins">
		<form action= "booking.php" onsubmit="javascript:return leadValidate(this);" id="customer_signup" action="#" method="POST">
			<?php include 'booking.php';?>
		    <h5>STEP 1 / 5 - WHO YOU ARE</h5>
		      <div class="d-1of2 t-1of2 m-all">
		        <label for="firstName">First Name</label>
		        <input onkeyup="javascript:validateName();" type="text" placeholder="First Name" id="firstName" name="firstName" /></div>
		      <div class="d-1of2 t-1of2 m-all">
		        <label for="lastName">Last Name</label>
		        <input onkeyup="javascript:validateLastName();" type="text" placeholder="Last Name" id="lastName" name="lastName" /></div>
		      <div class="d-1of2 t-1of2 m-all">
		        <label for="email">Your Email Addresss</label>
		        <input onkeyup="javascript:validateEmail();" type="text" placeholder="Your Email Address" id="email" name="email" /></div>
		      <div class="d-1of2 t-1of2 m-all">
		        <label for="phone">Your Phone</label>
		        <input onkeyup="javascript:validatePhone();" type="text" placeholder="Your Phone" id="phone" name="phone" /></div>
		  <div class="clear"></div>
		  <h5>STEP 2 / 5 - YOUR LOCATION </h5>
		      <div class="d-all t-all m-all">
		        <label for="address">Address</label>
		        <input type="text" placeholder="Address" id="address" name="address" /></div>

		      <div class="d-1of2 t-1of2 m-all">
		        <label for="town">Town</label>
		        <input type="text" placeholder="Town" id="town" name="town" /></div>


		      <div class="d-1of2 t-1of2 m-all">
		        <label for="post">PostCode</label>
		        <input type="text" placeholder="PostCode" id="post" name="post" /></div>		 
		      <div class="clear"></div>

		      <h5>STEP 3 / 5 - PLEASE SELECT A DATE AND TIME </h5>
		        <!--Select Date-->
		        <div class="d-1of2 t-1of2 m-all">
		        <label for="date">Date</label>
		        <input onblur="javascript:updateAptDate();" type="date" placeholder="Date" id="date" name="date" /></div>
		      <div class="d-1of2 t-1of2 m-all">
		        <label for="time">Time</label>
		        <select onblur="javascript:updateAptTime();" id="time" name="time">
		          
		          <!--Select Time-->
		          
		          <option value="7am">7:00 AM</option>
		          <option value="8am">8:00 AM</option>
		          <option value="9am">9:00 AM</option>
		          <option value="11am">11:00 AM</option>
		          <option value="12pm">12:00 PM</option>
		          <option value="3pm">3:00 PM</option>
		          <option value="4pm">4:00 PM</option>
		          <option value="5pm">5:00 PM</option>
		          <option value="7pm">7:00 PM</option>
		          <option value="8pm">8:00 PM</option>
		          
		        </select>
		        </div>
		  <div class="clear"></div>
		  <h5>STEP 4 / 5 - PLEASE SELECT A TRAINER </h5>
		  		<select onblur="javascript:updatePersonalTrainer();" id="pt" name="pt">
  					<option value="Ruari Grimes">Ruari Grimes</option>
				  	<option value="Ailise Coyle">Ailise Coyle</option>
				  	<option value="Christine Penrose">Christine Penrose</option>
				  	<option value="John McElroy">John McElroy</option>
				  	<option value="Elaine Kelly">Elaine Kelly</option>
				</select>
		    
		    
		  
		    <h5>STEP 5 / 5 - AGREEMENTS AND SUBMISSIONS</h5>
		      <div class="agreements">
		        <p>By clicking below you are agreeing to the terms and conditions of RG Fitness
		        <div class="d-all t-all m-all">
		      <input type="checkbox" name="agreement" id="agreement" value="agree" required /><label for="agreement">Agree to Terms and Conditions</label>
		        </div>
		      </div>
		      <div class="clear"></div>
		  <div id="output"><h3 style="padding-bottom:15px;">Appointment Summary</h3>
		      <hr>
		    <p><strong>Appointment Date:</strong> <span id="dateOutput">??/??/??</span> at <span id="timeOutput">--:-- am/pm</span></p>
		    <p><strong>Personal Trainer:</strong> <span id="ptOutput">Ruari Grimes</span></p>	
		    <p><strong>Price Estimate:</strong> £<span id="priceOutput">40.00 p/h</span></p>
		  </div>
		      <div class="submission">
		      <div class="d-3of4 t-2of3 m-1of2">
		      <input type="submit" name="booknow_btn" value="BOOK NOW" />
		      </div>
		        <div class="clear"></div>
		      </div>
		  
		    <div id="form_output">There was an issue submitting the form, please provide all contact information to confirm your appointment!</div>
		   
		</form>
		  </div>
		</div>
  
  

   <script  src="js/ptform.js"></script>





						
			
		
		
		<!-- end: fh5co-parallax -->
		
		<?php include 'footer.php';?>
		
	
	
	
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

