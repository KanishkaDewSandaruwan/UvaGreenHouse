    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start text-dark">
                <small>Description</small>

            </div>
            <div class="col-lg-6 px-5 text-end text-dark">
                <?php if(isset($_SESSION['customer'])) :?>
                <a class="text-dark ms-3" href="profile.php">Profile</a>
                <a class="text-dark ms-3" href="orders.php">Orders</a>
                <a class="text-dark ms-3" href="admin/logout.php">Logout</a>
                <?php else :?>
                <a class="text-dark ms-3" href="admin/login.php">Login</a>
                <a class="text-dark ms-3" href="admin/register.php">Register</a>
                <?php endif;?>
            </div>
        </div>