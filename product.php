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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

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
                <a href="product.php" class="nav-item nav-link  active">Products</a>
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
            <h1 class="display-3 mb-3 animated text-dark slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated text-dark slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                    </div>
                </div>
            </div>

            <div class="tab-content">

                <div class="row g-4">
                    <?php
                    if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != ""){
                        $getallCp2 = getAllProductItemsByCategory($_REQUEST['cat_id']);
                    }else{
                        $getallCp2 = getAllItemsAvailable();
                    }
                    $count = 0;
                    while ($row3 = mysqli_fetch_assoc($getallCp2)) {
                        $pid = $row3['pid'];
                        $img = $row3['product_image'];
                        $img_src = "admin/server/uploads/products/" . $img;
                        if($count < 6){ ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" style="height: 200px; width: 100%;" src="<?php echo $img_src; ?>"
                                    alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href=""> <?php echo $row3['product_name']; ?></a>
                                <span class="text-primary me-1">Rs. <?php echo $row3['product_price']; ?></span>
                                <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                            </div>
                            <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" style="font-size: 15px;"  href="details.php?pid=<?php echo $pid; ?> "><i class="fa fa-eye text-primary me-2"></i>View
                                            detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                    <?php if($row3['product_qty'] > 0){?>
                                        <button
                                        onclick="addtoCartProduct(<?php echo $pid; ?>, <?php echo $row3['product_price']; ?>)"
                                        class="text-body btn btn-border-0" style="font-size: 15px; margin-top: -5px;" type="button"><i
                                        class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</button>
                                        <?php }else{ ?>
                                            <button disabled
                                            class="text-body btn btn-border-0" style="font-size: 15px; margin-top: -5px;" type="button"><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Out of Stock</button>
                                        <?php } ?>
                                    </small>
                                </div>
                        </div>
                    </div>
                    <?php } $count++; } ?>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Product End -->


    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>