<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('unable to connect');

// Step 1: Check if user is logged in as admin (you may implement your own admin authentication logic)
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in as admin
    exit();
}

// Step 2: Retrieve data from the database
$sql = "SELECT * FROM premium";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 align="center">Premium Plan Registrations</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Current Weight (kg)</th>
                    <th>Height (cm)</th>
                    <th>BMI</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Amount</th>
                    <th>Health Problems</th>
                </tr>
            </thead>
            <tbody>
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
                                <td>{$row['amount']}</td>
                                <td>{$row['health_problems']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
$conn->close();
?>
