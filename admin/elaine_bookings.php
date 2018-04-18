<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

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

$sql = "SELECT * FROM booking WHERE pt = 'Elaine Kelly'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Booking ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th><th>Personal Trainer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["booking_id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td> " . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["pt"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>