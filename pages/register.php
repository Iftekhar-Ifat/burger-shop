<?php
include('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Burger Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Include the header -->
    <?php include '../includes/header.php'; ?>

    <!-- Main content of the register page -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../asset/register.jpg" alt="Register Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Register</h1>
                <form action="../includes/register_handler.php" method="post">
                    <div class="mb-3">
                        Username :
                        <input type="text" class="form-control" name="r_username">
                    </div>
                    <div class="mb-3">
                        Email :
                        <input type="email" class="form-control" name="r_email">
                    </div>
                    <div class="mb-3">
                        Password :
                        <input type="password" class="form-control" name="r_pass">
                    </div>
                    <div class="mb-3">
                        Confirm Password :
                        <input type="password" class="form-control" name="r_con_pass">
                    </div>
                    <div class="mb-3">
                        Mobile :
                        <input type="text" class="form-control" name="r_mobile">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" name="submit">Register</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
</body>

</html>