<?php
include('./config.php');

// Fetch burger items from the database
$selectQuery = "SELECT * FROM burgers";
$result = mysqli_query($connection, $selectQuery);
$burgers = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Burger Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Include the header -->
    <?php include './includes/header.php'; ?>

    <!-- Main content of the product page -->
    <section class="container my-5">
        <h1>Products</h1>
        <div class="row">
            <?php foreach ($burgers as $burger) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src=<?php echo './includes/' . $burger['image']; ?> class="card-img-top" alt="<?php echo $burger['name']; ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $burger['name'] ?></h5>
                            <p class="card-text"><?php echo $burger['description'] ?></p>
                            <h3 class="card-title"><?php echo '$' . $burger['price'] ?></h3>
                            <form action="./includes/add_to_order.php" method="POST">
                                <input type="hidden" name="burgerName" value="<?php echo $burger['name']; ?>">
                                <input type="hidden" name="burgerPrice" value="<?php echo $burger['price']; ?>">
                                <button type="submit" class="btn btn-primary">Add to Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include './includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>