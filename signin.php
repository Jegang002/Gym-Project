<?php
// Database connection parameters
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "arnoldgym";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$usern = $_POST['usern'];
$pass = $_POST['pass'];
$gender = $_POST['gender'];
$email = $_POST['email'];

// Prepare and execute an SQL INSERT statement
$sql = "INSERT INTO user_table (usern, pass, email, gender) VALUES ('$usern', '$pass', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'login.html';

</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>