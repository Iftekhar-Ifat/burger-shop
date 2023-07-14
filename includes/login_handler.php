<?php
include '../config.php';

$userEmail = $_POST['l_email'];
$userPass = $_POST['l_pass'];

$result = mysqli_query($connection, "SELECT * FROM `users` WHERE email='$userEmail' AND password='$userPass'");

if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);

        // Access individual elements of the row using keys
        $username = $row['username'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $role = $row['role'];

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['role'] = $role;

        echo "<script>location.href='../pages/index.php'</script>";
    } else {
        echo "<script>alert('User not found!')</script>";
        echo "<script>location.href='../pages/index.php'</script>";
    }
} else {
    // Query execution failed
    echo "Error: " . mysqli_error($connection);
}

mysqli_free_result($result);
