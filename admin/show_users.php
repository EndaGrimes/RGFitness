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

$sql = "SELECT user_id, username, email, user_type FROM users WHERE user_type = 'user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>User ID</th><th>Name</th><th>Email</th><th>User Type</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["username"]. "</td><td> " . $row["email"]. "</td><td>" . $row["user_type"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
