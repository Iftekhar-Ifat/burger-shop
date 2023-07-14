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
    <?php include('./includes/header.php'); ?>

    <!-- Main content of the profile page -->
    <section class="container my-5">

        <div class="row">
            <h1><?php echo $_SESSION['username'] . " (" . $_SESSION['role'] . ") " ?></h1>
            <div class="col-md-6">
                <img src="../asset/profile_hero.jpg" class="img-fluid rounded shadow" alt="Register Image" class="img-fluid">
            </div>

            <?php if ($_SESSION['role'] == 'seller') : ?>
                <div class="col-md-6">
                    <form method="POST" action="./includes/add_burger.php" enctype="multipart/form-data">
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
                            <div class="d-flex justify-content-center">
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; margin-top: 10px;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Burger</button>
                    </form>
                </div>
                <script>
                    document.getElementById('burgerImage').addEventListener('change', function(e) {
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            document.getElementById('imagePreview').src = event.target.result;
                            document.getElementById('imagePreview').style.display = 'block';
                        };
                        reader.readAsDataURL(e.target.files[0]);
                    });
                </script>
            <?php else : ?>
                <div class="col-md-6">
                    <form action="./includes/update_profile.php" method="post">
                        <div class="mb-3">
                            Username :
                            <input type="text" class="form-control" name="r_username" placeholder="<?php echo $_SESSION['username'] ?>" required>
                        </div>
                        <div class="mb-3">
                            Email :
                            <input type="email" class="form-control" name="r_email" placeholder="<?php echo $_SESSION['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            Mobile :
                            <input type="text" class="form-control" name="r_mobile" placeholder="<?php echo $_SESSION['mobile'] ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary col-12" name="submit">Update Profile</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include('./includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>