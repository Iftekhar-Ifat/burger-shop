<?php
include '../config.php';
$r_username = $_POST['r_username'];
$r_email = $_POST["r_email"];
$r_mobile = $_POST["r_mobile"];

$_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$_email_pattern = "/(cse|eee)_\d{10}@lus\.ac\.bd/";

$update_query = "UPDATE `users` SET `username`='$r_username',`email`='$r_email',`mobile`='$r_mobile' WHERE email='$r_email'";

if (strlen($r_username) < 3 || strlen($r_username) > 20) {
    echo "<script>alert('User Name should be 3-20 char!!!!')</script>";
    echo "<script>location.href='../pages/profile.php'</script>";
} else if (!preg_match($_email_pattern, $r_email)) {
    echo "<script>alert('Invalid Email!!')</script>";
    echo "<script>location.href='../pages/profile.php'</script>";
} else if (!preg_match($_mobile_pattern, $r_mobile)) {
    echo "<script>alert('Invalid Mobile Number!!')</script>";
    echo "<script>location.href='../pages/profile.php'</script>";
} else {
    if (!mysqli_query($connection, $update_query)) {
        die("Something went wrong ❗");
        echo "<script>location.href='../pages/profile.php'</script>";
    } else {
        session_start();
        $_SESSION['username'] = $r_username;
        $_SESSION['email'] = $r_email;
        $_SESSION['mobile'] = $r_mobile;

        echo "<script>alert('Successfully Updated ✔')</script>";
        echo "<script>location.href='../pages/profile.php'</script>";
    }
}

mysqli_free_result($email_exists);
