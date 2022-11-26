<!DOCTYPE html>
<html lang="en">
<?php include 'pages/auth.php'; ?>

<head>
    <meta charset="utf-8">
    <?php include 'pages/head.php'; ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'pages/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn " data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Uva <span class="text-success">Green </span>House</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link  ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About Us</a>
                <a href="product.php" class="nav-item nav-link ">Products</a>
                <a href="category.php" class="nav-item nav-link ">Category</a>
                <a href="service.php" class="nav-item nav-link ">Service</a>
                <a href="contact.php" class="nav-item nav-link ">Contact Us</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-primary rounded-circle ms-3" href="cart.php">
                    <small class="fa fa-shopping-bag text-white"></small>
                </a>
            </div>
        </div>
    </nav>
    </div>
    <!-- Navbar End -->

    <style>
    .page-header {
        padding-top: 12rem;
        padding-bottom: 6rem;
        background: url(<?php echo $subheader_src; ?>) top right no-repeat;
        background-size: cover;
    }

    .text-dark slideInDown,
    .breadcrumb {
        color: white;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated text-dark slideInDown">Profile</h1>
            <nav aria-label="breadcrumb animated text-dark slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Profile</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Change Password</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Profile Start -->
    <div class="container-fluid bg-white bg-icon mt-5 py-6">
        <div class="container">
            <?php 
$getall = getAllcustomerById($_SESSION['customer']);
$row=mysqli_fetch_assoc($getall);
$customer_id = $row['customer_id']; ?>

            <!-- Contact Start -->
            <div class="container-fluid bg-white">
                <div class="container">
                    <div class="row">
                        <h1>Change Password</h1>
                        <div class="col-lg-6 mb-5 my-lg-12 py-5 pl-lg-5">
                            <form method="POST" class="row g-3 needs-validation" novalidate
                                enctype="multipart/form-data">
                                <div class="col-md-12 mt-2">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" name="current_password"
                                        id="current_password" placeholder="Current Password Name" required>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="new_password"
                                        placeholder="New Password" required>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="confirm_new_password" class="form-label">Confirm New
                                        Password</label>
                                    <input type="password" class="form-control" name="confirm_new_password"
                                        id="confirm_new_password" placeholder="Confirm New Password" required>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <input type="hidden" class="form-control" name="customer_id"
                                        value="<?php echo $_SESSION['customer']; ?>" id="customer_id">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-4">
                                        <button type="button" onclick="changePasswordCustomer(this.form)"
                                        class="btn btn-primary">Change Password</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="profile.php" class="btn btn-secondary" data-bs-dismiss="modal">Back
                                                to
                                                Profile</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Profile End -->


    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>