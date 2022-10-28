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
                <a href="index.php" class="nav-item nav-link  ">Home</a>
                <a href="about.php" class="nav-item nav-link  active">About Us</a>
                <a href="product.php" class="nav-item nav-link ">Products</a>
                <a href="service.php" class="nav-item nav-link  ">Service</a>
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

    .text-dark slideInDown, .breadcrumb{
        color: white;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated text-dark slideInDown">Product Details</h1>
            <nav aria-label="breadcrumb animated text-dark slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <?php
    if(isset($_REQUEST['pid']) && $_REQUEST['pid'] != ""){
        $getallCp2 = getAllItemsByID($_REQUEST['pid']);
 
    $row3 = mysqli_fetch_assoc($getallCp2);
        $pid = $row3['pid'];
        $img = $row3['product_image'];
        $img_src = "admin/server/uploads/products/" . $img; ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $row3['product_name']; ?></h1>
                    <p style="margin-top: -25px;"><?php echo $row3['product_highlight']; ?></p>
                    <h5 class="mb-4 text-danger">Rs. <?php echo $row3['product_price']; ?>.00</h5>
                    <h5 class="mb-4 text-primary"><?php echo $row3['product_description']; ?></h5>
                    <?php if($row3['product_qty'] > 0){?>
                    <button type="button"  onclick="addtoCartProduct(<?php echo $pid; ?>, <?php echo $row3['product_price']; ?>)" class="btn btn-primary rounded-pill py-3 px-5 mt-3 w-10" href="about.php">Add to Cart</button>
                    <?php }else{ ?>
                        <button type="button" disabled class="btn btn-primary rounded-pill py-3 px-5 mt-3 w-10" href="about.php">Out of Stock</button>
                    <?php }?>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-50" src="<?php echo $img_src; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <?php }  ?>


    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>