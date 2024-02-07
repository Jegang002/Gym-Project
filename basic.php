<?php
session_start();
$conn=mysqli_connect('localhost','root','','arnoldgym') or die('unable to connect');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["fullName"];
    $current_weight = $_POST["currentWeight"];
    $height = $_POST["height"];
    $bmi = $_POST["bmi"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $health_problems = $_POST["healthProblems"];

    $sql = "INSERT INTO basic (full_name, current_weight, height, bmi, age, gender, address, city, phone, email,amount, health_problems)
            VALUES ('$full_name', $current_weight, $height, $bmi, $age, '$gender', '$address', '$city', '$phone', '$email','$amount', '$health_problems')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Basic Plan Registered Successfully')</script>";
        header("Location:basic.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
