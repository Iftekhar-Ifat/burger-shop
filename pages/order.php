<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Burger Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Include the header -->
    <?php include '../includes/header.php'; ?>

    <!-- Main content of the order page -->
    <section class="container my-5">
        <h1>Order</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Burger Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch the order items from the database
                $selectQuery = "SELECT * FROM orders";
                $result = mysqli_query($connection, $selectQuery);
                $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

                // Loop through the orders and display them in the table
                foreach ($orders as $order) {
                    $id = $order['order_id'];
                    $name = $order['burger_name'];
                    $price = $order['burger_price'];
                    $quantity = $order['quantity'];
                    $total = $price * $quantity;
                ?>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $total; ?></td>
                        <td>
                            <!-- Edit button to invoke modal for changing quantity -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $id; ?>">
                                Edit
                            </button>

                            <!-- Delete button to remove the order -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $id; ?>">
                                Cancel
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" name="confirmOrder">Confirm Order</button>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>