<?php
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
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
			<img src="images/RG_Fitness_logo.jpg" height=100px width=100px  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="home.php?logout='1'" style="color: red;">Logout</a>
                       &nbsp; <a href="create_user.php"> + Add User</a>
                       <a href="show_users.php"> View Users</a>
                       <a href="ruaris_bookings.php"> Ruaris Bookings</a>
                       <a href="ailise_bookings.php"> Ailise Bookings</a>
                       <a href="christine_bookings.php"> Christine Bookings</a>
                       <a href="john_bookings.php"> John Bookings</a>
                       <a href="elaine_bookings.php"> Elaine Bookings</a>
					</small>

				<?php endif ?>
			</div>

		</div>
	</div>
</body>
</html>
