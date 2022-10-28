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
                <a href="index.php" class="nav-item nav-link  active">Home</a>
                <a href="about.php" class="nav-item nav-link ">About Us</a>
                <a href="product.php" class="nav-item nav-link ">Products</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo $header_src; ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 text-dark animated text-dark slideInDown">
                                        <?php echo $res['header_desc']; ?></h1>
                                    <a href="products.php"
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="service.php" class="btn btn-dark rounded-pill py-sm-3 px-sm-5">Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Carousel End -->


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
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Feature Start -->
        <!-- <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Features</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3">Natural Process</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h4 class="mb-3">Organic Products</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h4 class="mb-3">Biologically Safe</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Feature End -->

        <?php
        $getallCp2 = getAllItemsLatest();
        $count = 0;
        if ($row3 = mysqli_fetch_assoc($getallCp2)) { ?>
        <!-- Product Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 500px;">
                            <h1 class="display-5 mb-3">Our Latest Products</h1>
                        </div>
                    </div>
                </div>

                <div class="tab-content">

                    <div class="row g-4">
                        <?php
                    $getallCp2 = getAllItemsLatest();
                    $count = 0;
                    while ($row3 = mysqli_fetch_assoc($getallCp2)) {
                        $pid = $row3['pid'];
                        $img = $row3['product_image'];
                        $img_src = "admin/server/uploads/products/" . $img;
                        if($count < 6){ ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid" style="height: 200px; width: 100%;"
                                        src="<?php echo $img_src; ?>" alt="">
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""> <?php echo $row3['product_name']; ?></a>
                                    <span class="text-primary me-1">Rs. <?php echo $row3['product_price']; ?></span>
                                    <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" style="font-size: 15px;"
                                            href="details.php?pid=<?php echo $pid; ?> "><i
                                                class="fa fa-eye text-primary me-2"></i>View
                                            detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <?php if($row3['product_qty'] > 0){?>
                                        <button
                                            onclick="addtoCartProduct(<?php echo $pid; ?>, <?php echo $row3['product_price']; ?>)"
                                            class="text-body btn btn-border-0"
                                            style="font-size: 15px; margin-top: -5px;" type="button"><i
                                                class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</button>
                                        <?php }else{ ?>
                                        <button disabled class="text-body btn btn-border-0"
                                            style="font-size: 15px; margin-top: -5px;" type="button"><i
                                                class="fa fa-shopping-bag text-primary me-2"></i>Out of Stock</button>
                                        <?php } ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php } $count++; } ?>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">Browse More
                                Products</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product End -->

    <?php } ?>



    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products by Category</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <?php 
                        $getall = getAllCategories();
                        $top_active = 1;
                        while($row=mysqli_fetch_assoc($getall)){ 
                            $cat_id = $row['cat_id'];
                            $img = $row['cat_image'];
                            $img_src = "admin/server/uploads/category/".$img;

                        $getallCp2 = getAllProductItemsByCategory($cat_id);
                        if ($row2 = mysqli_fetch_assoc($getallCp2)) {
                            ?>
                        <li class="nav-item me-2 ">
                            <a class="btn btn-outline-primary border-2 <?php if($top_active == 1) echo 'active'; ?>"
                                data-bs-toggle="pill"
                                href="#<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></a>
                        </li>
                        <?php  $top_active ++; } } ?>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <?php 
            $getall = getAllCategories();
            $count = 0;

            while($row=mysqli_fetch_assoc($getall)){ 
                $cat_id = $row['cat_id'];
                $img = $row['cat_image'];
                $img_src = "admin/server/uploads/category/".$img;

            $getallCp2 = getAllProductItemsByCategory($cat_id);
            if ($row2 = mysqli_fetch_assoc($getallCp2)) {
                ?>
                <div id="<?php echo $row['cat_name']; ?>"
                    class="tab-pane fade show p-0 <?php if($count == 1) echo 'active'; ?>">
                    <div class="row g-4">
                        <?php
                    $getallCp2 = getAllProductItemsByCategory($cat_id);
                    $product_count = 0;
                    while ($row3 = mysqli_fetch_assoc($getallCp2)) {
                        $pid = $row3['pid'];
                        $img = $row3['product_image'];
                        $img_src = "admin/server/uploads/products/" . $img;
                        if($product_count < 6){ ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid" style="height: 200px; width: 100%;"
                                        src="<?php echo $img_src; ?>" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $row3['product_name']; ?></a>
                                    <span class="text-primary me-1">Rs. <?php echo $row3['product_price']; ?></span>
                                    <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" style="font-size: 15px;"
                                            href="details.php?pid=<?php echo $pid; ?> "><i
                                                class="fa fa-eye text-primary me-2"></i>View
                                            detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <?php if($row3['product_qty'] > 0){?>
                                        <button
                                            onclick="addtoCartProduct(<?php echo $pid; ?>, <?php echo $row3['product_price']; ?>)"
                                            class="text-body btn btn-border-0"
                                            style="font-size: 15px; margin-top: -5px;" type="button"><i
                                                class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</button>
                                        <?php }else{ ?>
                                        <button disabled class="text-body btn btn-border-0"
                                            style="font-size: 15px; margin-top: -5px;" type="button"><i
                                                class="fa fa-shopping-bag text-primary me-2"></i>Out of Stock</button>
                                        <?php } ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php  $product_count++; } } ?>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <?php if($count == 1){ ?>
                            <a class="btn btn-primary rounded-pill py-3 px-5"
                                href="product.php?cat_id=<?php echo $row['cat_id']; ?>">Browse More</a>
                            <?php }else{ ?>
                            <a class="btn btn-primary rounded-pill py-3 px-5"
                                href="product.php?cat_id=<?php echo $row['cat_id']; ?>">Browse More
                                <?php echo $row['cat_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php  $count++; } } ?>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-icon mt-5 py-6" style="background-color: #6e6969;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Our Service</h1>
                    <p class="text-white mb-0"><?php echo $res['service_description']; ?></p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-primary rounded-pill py-3 px-5" href="service.php">More Service</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->

    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>