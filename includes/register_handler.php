<?php
include '../config.php';
$r_username = $_POST['r_username'];
$r_pass = $_POST["r_pass"];
$r_con_pass = $_POST["r_con_pass"];
$r_email = $_POST["r_email"];
$r_mobile = $_POST["r_mobile"];

$role = "buyer";

$_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$_email_pattern = "/(cse|eee)_\d{10}@lus\.ac\.bd/";

$insert_query = "INSERT INTO `users`(`username`, `password`, `email`, `mobile`, `role`) VALUES ('$r_username','$r_pass','$r_email','$r_mobile', '$role')";
$get_user_email = "SELECT * FROM `users` WHERE email='$r_email'";
$email_exists = mysqli_query($connection, $get_user_email);


if (strlen($r_username) < 3 || strlen($r_username) > 20) {
    echo "<script>alert('User Name should be 3-20 char!!!!')</script>";
    echo "<script>location.href='../register.php'</script>";
} else if (!preg_match($_email_pattern, $r_email)) {
    echo "<script>alert('Invalid Email!!')</script>";
    echo "<script>location.href='../register.php'</script>";
} else if (!preg_match($_mobile_pattern, $r_mobile)) {
    echo "<script>alert('Invalid Mobile Number!!')</script>";
    echo "<script>location.href='../register.php'</script>";
} else if ($r_pass !== $r_con_pass) {
    echo "<script>alert('Pass and con-pass is not matching!!')</script>";
    echo "<script>location.href='../register.php'</script>";
} else if (mysqli_num_rows($email_exists) > 0) {
    echo "<script>alert('Email already exists!!')</script>";
    echo "<script>location.href='../register.php'</script>";
} else {
    if (!mysqli_query($connection, $insert_query)) {
        die("Something went wrong ❗");
        echo "<script>location.href='../register.php'</script>";
    } else {
        session_start();
        $_SESSION['username'] = $r_username;
        $_SESSION['email'] = $r_email;
        $_SESSION['mobile'] = $r_mobile;
        $_SESSION['role'] = $role;

        echo "<script>alert('Successfully Registered ✔')</script>";
        echo "<script>location.href='../index.php'</script>";
    }
}

mysqli_free_result($email_exists);
