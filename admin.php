
<?php
session_start();
// $conn=mysqli_connect('localhost','root','','arnoldgym') or die('unable to connect');

if(isset($_SESSION['usern'])){
    $usern=$_SESSION['usern'];
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['usern']);
  header("Location:login.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Employee Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    :root {
        --main-bg-color: #009d63;
        --main-text-color: #009d63;
        --second-text-color: #bbbec5;
        --second-bg-color: #c1efde;
    }

    .primary-text {
        color: var(--main-text-color);
    }

    .second-text {
        color: var(--second-text-color);
    }

    .primary-bg {
        background-color: var(--main-bg-color);
    }

    .secondary-bg {
        background-color: var(--second-bg-color);
    }

    .rounded-full {
        border-radius: 100%;
    }

    #wrapper {
        overflow-x: hidden;
        background-image: linear-gradient(to right,
                #baf3d7,
                #c2f5de,
                #cbf7e4,
                #d4f8ea,
                #ddfaef);
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin 0.25s ease-out;
        -moz-transition: margin 0.25s ease-out;
        -o-transition: margin 0.25s ease-out;
        transition: margin 0.25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    #menu-toggle {
        cursor: pointer;
    }

    .list-group-item {
        border: none;
        padding: 20px 30px;
    }

    .list-group-item.active {
        background-color: transparent;
        color: var(--main-text-color);
        font-weight: bold;
        border: none;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
</style>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Arnold Gym</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="ui.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-house-door-fill me-2"></i>Home</a>
                <a id="users" href="#"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>User Details</a>
                <a id="trainee" href="#"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Trainee Details</a>
                <a href="login.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $usern; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" id="profileLink">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5" id="content">

                    <!-- user details is show in this div -->
                    <script>
                        $(document).ready(function () {
                            $("#user_details").hide();
                            $("#users").click(function () {
                                $("#user_details").show();
                                $("#trainee_details").hide();
                                $("#trainee1_details").hide();
                                $("#trainee2_details").hide();
                                $("#trainee3_details").hide();
                            });
                        });
                    </script>
                    <div class="container mt-5" id="user_details">
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('unable to connect');

                        $sql = "SELECT * FROM user_table";
                        $result = $conn->query($sql);

                        ?>
                        <h2>User Data</h2>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                <td>{$row['usern']}</td>
                                <td>{$row['pass']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['gender']}</td>
                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No records found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                        $conn->close();
                        ?>
                    </div>

                    <!-- trainee details showing in this div -->
                    <script>
                        $(document).ready(function () {
                            $("#trainee_details").hide();
                            $("#trainee").click(function () {
                                $("#trainee_details").show();
                                $("#user_details").hide();
                                $("#trainee1_details").hide();
                                $("#trainee2_details").hide();
                                $("#trainee3_details").hide();
                            });
                        });
                    </script>
                    <div class="container mt-5" id="trainee_details">
                        <h2>Trainee Table</h2>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Trainee ID</th>
                                    <th>Trainee Name</th>
                                    <th>Show Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Teejay</td>
                                    <td><button class="btn btn-primary" id="trainee_1">Show Details</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ip Mohan</td>
                                    <td><button class="btn btn-primary" id="trainee_2">Show Details</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mr.GJ</td>
                                    <td><button class="btn btn-primary" id="trainee_3">Show Details</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $("#trainee1_details").hide();
                            $("#trainee_1").click(function () {
                                $("#trainee_details").hide();
                                $("#user_details").hide();
                                $("#trainee1_details").show();
                                $("#trainee2_details").hide();
                                $("#trainee3_details").hide();
                            });
                        });
                    </script>
                    <div class="container mt-5" id="trainee1_details">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Trainer Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>From Date</th>
                                    <th>End Date</th>
                                    <th>Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Connect to the database
                                $conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('Unable to connect');

                                // Retrieve data from the database
                                $query = "SELECT * FROM trainee_booking";
                                $result = mysqli_query($conn, $query);

                                // Display data in the table
                                if ($result->num_rows > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>{$row['trainer_name']}</td>";
                                        echo "<td>{$row['username']}</td>";
                                        echo "<td>{$row['email']}</td>";
                                        echo "<td>{$row['phone']}</td>";
                                        echo "<td>{$row['from_date']}</td>";
                                        echo "<td>{$row['end_date']}</td>";
                                        echo "<td>{$row['fees']}</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>No records found</td></tr>";
                                }
                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $("#trainee2_details").hide();
                            $("#trainee_2").click(function () {
                                $("#trainee_details").hide();
                                $("#user_details").hide();
                                $("#trainee1_details").hide();
                                $("#trainee3_details").hide();
                                $("#trainee2_details").show();
                            });
                        });
                    </script>
                    <div class="container mt-5" id="trainee2_details">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Trainer Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>From Date</th>
                                    <th>End Date</th>
                                    <th>Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Connect to the database
                                $conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('Unable to connect');

                                // Retrieve data from the database
                                $query = "SELECT * FROM trainee2_book";
                                $result = mysqli_query($conn, $query);

                                // Display data in the table
                                if ($result->num_rows > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>{$row['trainer_name']}</td>";
                                        echo "<td>{$row['username']}</td>";
                                        echo "<td>{$row['email']}</td>";
                                        echo "<td>{$row['phone']}</td>";
                                        echo "<td>{$row['from_date']}</td>";
                                        echo "<td>{$row['end_date']}</td>";
                                        echo "<td>{$row['fees']}</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>No records found</td></tr>";
                                }

                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $("#trainee3_details").hide();
                            $("#trainee_3").click(function () {
                                $("#trainee_details").hide();
                                $("#user_details").hide();
                                $("#trainee1_details").hide();
                                $("#trainee2_details").hide();
                                $("#trainee3_details").show();
                            });
                        });
                    </script>
                    <div class="container mt-5" id="trainee3_details">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Trainer Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>From Date</th>
                                    <th>End Date</th>
                                    <th>Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Connect to the database
                                $conn = mysqli_connect('localhost', 'root', '', 'arnoldgym') or die('Unable to connect');

                                // Retrieve data from the database
                                $query = "SELECT * FROM trainee3_book";
                                $result = mysqli_query($conn, $query);

                                // Display data in the table
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['trainer_name']}</td>";
                                    echo "<td>{$row['username']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['phone']}</td>";
                                    echo "<td>{$row['from_date']}</td>";
                                    echo "<td>{$row['end_date']}</td>";
                                    echo "<td>{$row['fees']}</td>";
                                    echo "</tr>";
                                }

                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <!-- Add this script at the end of your HTML body -->
    <script>

    </script>

</body>

</html>