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



	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<?php include 'header.php';?>
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
					<a href="#tablinks" onclick="openCity(event, 'Bookings')">View Bookings</a>
					<a href="login.php?logout='1'" style="color: red;">logout</a>


				<?php endif ?>
			</div>
			<style>
			table, th, td {
			    border: 1px solid black;
			}
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
			<div class="tab">

				<div id="Bookings" class="tabcontent">
					<h3>Bookings</h3>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "rgfitness";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}
				if (!isset($_SESSION)) {
				    session_start();
				}

				global $dbname;
				$current_user  = $_SESSION['user']['username'];

				$sql = "SELECT username, date, time, pt FROM users, booking WHERE users.username ='$current_user' and users.user_id=booking.user_fk";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    echo "<table><tr><th>Username</th><th>Date</th><th>Time</th><th>Personal Trainer</th></tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["date"]. "</td><td> " . $row["time"]. "</td><td>" . $row["pt"]. "</td></tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}

				$conn->close();
				?>
			</div>
		</div>
	</div>

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
