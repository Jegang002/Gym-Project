<?php
session_start();
$conn=mysqli_connect('localhost','root','','arnoldgym') or die('unable to connect');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$trainer_name = $_POST['trainer_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$from_date = $_POST['fromDate'];
$end_date = $_POST['endDate'];
$fees = $_POST['fees'];

$sql = "INSERT INTO trainee_booking (trainer_name, username, email, phone, from_date, end_date, fees)
        VALUES ('$trainer_name', '$username', '$email', '$phone', '$from_date', '$end_date', '$fees')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Hi I am Teejay, I am Your New Trainee :)');

        window.location = 'trainee1.html';
      
      </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
