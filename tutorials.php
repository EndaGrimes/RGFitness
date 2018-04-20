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
			<?php include 'header.php';?>
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/row.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Tutorials</h1>
							<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<style>
		/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>


		<div id="fh5co-programs-section">
			<div class="container">
				<p>Click on the buttons inside the tabbed menu:</p>

				<div class="tab">
				  <button class="tablinks" onclick="openCity(event, 'Abs')">Abs</button>
				  <button class="tablinks" onclick="openCity(event, 'Arms')">Arms</button>
				  <button class="tablinks" onclick="openCity(event, 'Legs')">Legs</button>
				  <button class="tablinks" onclick="openCity(event, 'Total')">Total Body</button>
				</div>
				<div id="Abs" class="tabcontent">
				  <h3>Abs</h3>
				  <p>London is the capital city of England.</p>
				</div>

				<div id="Arms" class="tabcontent">
				  <h3>Arms</h3>
				  <p>Paris is the capital of France.</p>
				</div>

				<div id="Legs" class="tabcontent">
				  <h3>Legs</h3>
				  <p>Tokyo is the capital of Japan.</p>
				</div>

				<div id="Total" class="tabcontent">
				  <h3>Total Body</h3>
				  <p>Tokyo is the capital of Japan.</p>
				</div>
			</div>
		</div>

		<?php include 'footer.php';?>
	<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

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
