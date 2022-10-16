<!DOCTYPE html>
<html lang="en">

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
                    <a href="index.php" class="nav-item nav-link text-success active">Home</a>
                    <a href="about.php" class="nav-item nav-link text-success">About Us</a>
                    <a href="product.php" class="nav-item nav-link text-success">Products</a>
                    <a href="contact.php" class="nav-item nav-link text-success">Contact Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link text-success dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu m-0">
                        <?php if(isset($_SESSION['customer'])) :?>
                            <a href="orders.php" class="dropdown-item">Orders</a>
                            <a href="admin/logout.php" class="dropdown-item">logout</a>
                            <?php else :?>
                            <a href="admin/login.php" class="dropdown-item">Login</a>
                            <a href="admin/register.php" class="dropdown-item">Register</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                 <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="profile.php">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="cart.php">
                        <small class="fa fa-shopping-bag text-body"></small>
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

    .slideInDown, .breadcrumb{
        color: white;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="<?php echo $about_src; ?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $res['about_title']; ?></h1>
                    <p class="mb-4"><?php echo $res['about_desc']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">About Our Farm</h1>
                    <p class="text-white mb-0"><?php echo $res['header_desc']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>