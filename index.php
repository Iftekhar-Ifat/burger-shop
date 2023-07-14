<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Shop - Buy Fresh burgers Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/homepage.module.css">

</head>

<body>
    <!-- Include the header -->
    <?php include './includes/header.php'; ?>

    <!-- Main Body Section -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Welcome to Burger Shop</h2>
                    <p class="lead">Indulge in the finest burgers in town.</p>
                    <p>Our burgers are made with premium ingredients, cooked to perfection, and served with a side of crispy fries. Whether you're craving a classic cheeseburger or want to try our signature specialty burgers, we've got something for everyone.</p>
                    <a href="/products.php" class="btn btn-primary mt-4">View Menu</a>
                </div>
                <div class="col-md-6">
                    <img src="../asset/heroimage.jpg" alt="Burger Shop" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </main>


    <!-- Include the footer -->
    <?php include './includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
</body>

</html>