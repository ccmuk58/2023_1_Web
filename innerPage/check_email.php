<?php
// Retrieve the email value from the AJAX request
$email = $_POST['email'];

// Connect to your database (replace with your own credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to check for duplicate email
$sql = "SELECT * FROM member WHERE email = '$email'";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
  // Email already exists (duplicate)
  echo "duplicate";
} else {
  // Email is unique
  echo "unique";
}

$conn->close();
?>
