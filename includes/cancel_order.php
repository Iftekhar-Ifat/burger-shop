<?php
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelOrder'])) {
    $orderId = $_POST['orderId'];

    $deleteQuery = "DELETE FROM orders WHERE order_id = '$orderId'";

    if (mysqli_query($connection, $deleteQuery)) {
        echo "Order Canceled";
        echo "<script>location.href='../order.php'</script>";
    } else {
        echo "Error canceling order: " . mysqli_error($connection);
    }
}
