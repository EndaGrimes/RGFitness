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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<!-- Logo -->
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<?php include 'header.php';?>
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-deadlift.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Classes</h1>

						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Our Programs</h2>
							<b>Our programs and classes run daily. You can pay at the door or set up a direct debit with Ruari. General Membership (Gym Only) is
								£20 a month, Membership with Classes (Gym and Classes use) is £30 a month. Classes only is £25 a month. HIIT classes are seperate and will be discussed on arrival. Any money and direct debits will be set up in person to ensure that there is no confusion.</b>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/deadlift.svg" style="width:70px !important;height:70px !important;" />
							<h3>Weight Classes</h3>
							<p>The weight classes are for those who like to lift weights. Classes are for both beginners and the more experienced. </p>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/pilates.svg" style="width:70px !important;height:70px !important;" />
							<h3>Pilates</h3>
							<p>A system of exercises, designed to improve physical strength, flexibility, and posture, and enhance mental awareness. </p>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/hiit.svg" style="width:70px !important;height:70px !important;" />
							<h3>HIIT</h3>
							<p>High-intensity interval training (HIIT), is a form of interval training, a cardiovascular exercise strategy alternating short periods of intense anaerobic exercise with less intense recovery periods.  </p>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-boxing.svg" style="width:70px !important;height:70px !important;" />
							<h3>Boxercise</h3>
							<p>A form of exercise based on boxing training and using boxing equipment. </p>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/running.svg" style="width:70px !important;height:70px !important;" />
							<h3>Running Classes</h3>
							<p>A lengthy class that will test the running abilities of both beginners and experienced runners.</p>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/woman.svg" style="width:70px !important;height:70px !important;" />
							<h3>Body Bump</h3>
							<p>Bodypump is the original barbell class that shapes, tones and strengthens your entire body. </p>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Class Schedule</h2>
							<p>Below is the Class Schedules. Times and classes are subject to change on a monthly basis. Any queries please contact Ruari.</p>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="schedule">
							<li><a href="#" data-sched="sunday">Sunday</a></li>
							<li><a href="#" data-sched="monday">Monday</a></li>
							<li><a href="#" data-sched="tuesday">Tuesday</a></li>
							<li><a href="#" data-sched="wednesday">Wednesday</a></li>
							<li><a href="#" data-sched="thursday">Thursday</a></li>
							<li><a href="#" data-sched="friday">Friday</a></li>
							<li><a href="#" data-sched="saturday">Saturday</a></li>
						</ul>
					</div>
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="sunday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="monday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/deadlift.svg" style="width:40px !important;height:40px !important;" />
										<small>06AM-7AM</small>
										<h3>Ladies Weights</h3>
										<span>Ailise Coyle</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/running.svg" style="width:40px !important;height:40px !important;" />
										<small>10AM-11AM</small>
										<h3>Running</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>

								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>6.15PM-7PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/pilates.svg" style="width:40px !important;height:40px !important;" />
										<small>7PM-9PM</small>
										<h3>Pilates</h3>
										<span>Elaine Kelly</span>
									</div>
								</div>

							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="tuesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/deadlift.svg" style="width:40px !important;height:40px !important;" />
										<small>06AM-7AM</small>
										<h3>Mens Weights</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/woman.svg" style="width:40px !important;height:40px !important;" />
										<small>10AM-11AM</small>
										<h3>Body Bump </h3>
										<span>Christine Penrose</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>6.15PM-7PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" style="width:40px !important;height:40px !important;" />
										<small>8PM-9PM</small>
										<h3>Boxercise</h3>
										<span>John McElroy</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="wednesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/pilates.svg" style="width:40px !important;height:40px !important;" />
										<small>06AM-7AM</small>
										<h3>Pilates</h3>
										<span>Elaine Kelly</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/running.svg" style="width:40px !important;height:40px !important;" />
										<small>9AM-10.30AM</small>
										<h3>Running</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>6.15PM-7PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/deadlift.svg" style="width:40px !important;height:40px !important;" />
										<small>7PM-8PM</small>
										<h3>Ladies Weights</h3>
										<span>Ailise Coyle</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="thursday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" style="width:40px !important;height:40px !important;" />
										<small>06AM-7AM</small>
										<h3>Boxercise</h3>
										<span>John McElroy</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/pilates.svg" style="width:40px !important;height:40px !important;" />
										<small>9AM-10AM</small>
										<h3>Pilates</h3>
										<span>Elaine Kelly</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>6.15PM-7PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/woman.svg" style="width:40px !important;height:40px !important;" />
										<small>8PM-9PM</small>
										<h3>Body Bump</h3>
										<span>Christine Penrose</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="friday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>7AM-8AM</small>
										<h3>Mixed Circuits</h3>
										<span>Ailise Coyle</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/deadlift.svg" style="width:40px !important;height:40px !important;" />
										<small>9AM-10AM</small>
										<h3>Beginners Weights</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>6.15PM-7PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/running.svg" style="width:40px !important;height:40px !important;" />
										<small>7.15PM-8.30PM</small>
										<h3>Running</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="saturday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/deadlift.svg" style="width:40px !important;height:40px !important;" />
										<small>10AM-11AM</small>
										<h3>Mixed Circuits</h3>
										<span>Ailise Coyle</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/hiit.svg" style="width:40px !important;height:40px !important;" />
										<small>1PM-1.45PM</small>
										<h3>HIIT Circuits</h3>
										<span>Ruari Grimes</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/no.svg" style="width:40px !important;height:40px !important;" />
										<small></small>
										<h3>No Class</h3>
										<span></span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
						</div>


					</div>
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

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
