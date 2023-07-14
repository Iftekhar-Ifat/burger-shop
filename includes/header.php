<?php session_start() ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Burger Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <a href="../profile.php">
                            <li class="nav-item">
                                <div class="nav-link avatar">
                                    <img src="../asset/avatar.png" alt="User Avatar" class="avatar-img" style="width: 30px; height: 30px;">
                                    <span class="avatar-name"><?php echo $_SESSION['username']; ?></span>
                                </div>
                            </li>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="../order.php">My orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./includes/logout.php">Logout</a>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="loginLink">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>


<?php include("./config.php") ?>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./includes/login_handler.php" method="post">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="l_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="l_pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to trigger the login modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let loginLink = document.getElementById('loginLink');

    loginLink.addEventListener('click', function(event) {
        event.preventDefault();
        $('#loginModal').modal('show'); // Show the login modal using jQuery
    });
</script>