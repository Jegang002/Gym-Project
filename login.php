<?php
session_start();
$conn=mysqli_connect('localhost','root','','arnoldgym') or die('unable to connect');

?>
 <?php
     $value = $_POST['value'];

if($value=='user'){
if (isset($_POST['login'])) {
    $usern = $_POST['usern'];
    $pass = $_POST['pass'];

    $select = mysqli_query($conn, "SELECT * FROM user_table WHERE usern = '$usern' AND pass= '$pass'");
    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        $_SESSION["usern"] = $row["usern"];
        $_SESSION["pass"] = $row["pass"];
        header("Location: ui.php"); // Redirect to the desired page upon successful login.
        exit;
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        header("Location: login.html");

    }
}
}
else{
    if (isset($_POST['login'])) {
        $usern = $_POST['usern'];
        $pass = $_POST['pass'];
    
        $select = mysqli_query($conn, "SELECT * FROM admin_table WHERE usern = '$usern' AND pass= '$pass'");
        $row = mysqli_fetch_array($select);
    
        if (is_array($row)) {
            $_SESSION["usern"] = $row["usern"];
            $_SESSION["pass"] = $row["pass"];
            header("Location: admin.php"); // Redirect to the desired page upon successful login.
            exit;
        } else {
            echo '<script>alert("Invalid Username or Password");</script>';
            header("Location: login.html");
    
        }
    }
}
?>