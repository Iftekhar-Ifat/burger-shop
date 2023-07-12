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
    <?php include('../includes/header.php'); ?>

    <!-- Main content of the profile page -->
    <section class="container my-5">

        <div class="row">
            <h1><?php echo $_SESSION['username'] ?></h1>
            <div class="col-md-6">
                <img src="../asset/profile_hero.jpg" alt="Register Image" class="img-fluid">
            </div>

            <div class="col-md-6">
                <form method="POST" action="../includes/add_burger.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="burgerName" class="form-label">Burger Name</label>
                        <input type="text" class="form-control" id="burgerName" name="burgerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="burgerDescription" class="form-label">Burger Description</label>
                        <textarea class="form-control" id="burgerDescription" name="burgerDescription" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="burgerPrice" class="form-label">Burger Price</label>
                        <input type="text" class="form-control" id="burgerPrice" name="burgerPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="burgerImage" class="form-label">Burger Image</label>
                        <input type="file" class="form-control" id="burgerImage" name="burgerImage" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Burger</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include('../includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>