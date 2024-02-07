<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('unable to connect');

// Step 1: Check if user is logged in as admin (you may implement your own admin authentication logic)
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in as admin
    exit();
}

// Step 2: Retrieve data from the database
$sql = "SELECT * FROM basic";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Welcome, Admin!</h1>

    <!-- Step 3: Display data in a table -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Current Weight</th>
            <th>Height</th>
            <th>BMI</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Health Problems</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['current_weight']}</td>
                        <td>{$row['height']}</td>
                        <td>{$row['bmi']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['city']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['health_problems']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No records found</td></tr>";
        }
        ?>

    </table>

    <a href="logout.php">Logout</a> <!-- Implement your own logout logic -->
</body>

</html>

<?php
$conn->close();
?>
