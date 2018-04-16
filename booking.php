<?php

// session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'rgfitness');

// variable declaration
$firstName = "";
$lastName    = "";
$email = "";
$phone  = "";
$date   = "";
$time = "";
$pt    = "";
$errors   = array();

if (!isset($_SESSION)) {
    session_start();
}

// call the book() function if booknow_btn is clicked
if (isset($_POST['booknow_btn'])) {
	book();
}

// BOOK USER
function book(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;

	// receive all input values from the form. Call the function
    // defined below to escape form values
	$firstName    =  ($_POST['firstName']);
	$lastName       =  ($_POST['lastName']);
	$email  =  ($_POST['email']);
	$phone  =  ($_POST['phone']);
	$date    =  ($_POST['date']);
	$time       =  ($_POST['time']);
	$pt  =  ($_POST['pt']);
	$userId = $_SESSION['user']['user_id'];

		$query = "INSERT INTO booking (firstName, lastName, email, phone, date, time, pt, user_fk) 
				 VALUES('$firstName', '$lastName', '$email', '$phone', '$date', '$time', '$pt', $userId)";

			mysqli_query($db, $query);

			$_SESSION['success']  = "Your booking has been confirmed";
			header('location: confirmation.php');
}