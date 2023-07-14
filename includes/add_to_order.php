<?php
include('../config.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $burgerName = $_POST['burgerName'];
    $burgerPrice = $_POST['burgerPrice'];

    $userEmail = $_SESSION['email'];
    $orderID = uniqid($burgerName);

    $insertQuery = "INSERT INTO orders (order_id, user_email, burger_name, burger_price, quantity) VALUES ('$orderID', '$userEmail', '$burgerName', '$burgerPrice', 1)";

    if (mysqli_query($connection, $insertQuery)) {
        echo "Burger added to the order successfully!";
        echo "<script>location.href='../products.php'</script>";
    } else {
        echo "Error adding burger to the order: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
