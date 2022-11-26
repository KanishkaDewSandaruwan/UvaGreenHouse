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

    .text-dark slideInDown, .breadcrumb{
        color: white;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated text-dark slideInDown">Checkout</h1>
            <nav aria-label="breadcrumb animated text-dark slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Cart</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i><?php echo $res['company_phone']; ?></p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i><?php echo $res['company_email']; ?></p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i><?php echo $res['company_address']; ?></p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?php echo $res['link_twiiter']; ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?php echo $res['link_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?php echo $res['link_instragram']; ?>"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    
                <form action="" method="post">
                              <?php $total = $_REQUEST['total'] + $res['shipping_fee']; ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row px-2">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Name on Card</label>
                                                <input type="text" id="holder_name" name="holder_name" placeholder="Holder Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Card Number</label>
                                                <input type="text" id="card_num" name="card_num"
                                                    placeholder="Card Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="hidden" id="total" name="total" value="<?php echo $total; ?>">
                                                <input type="hidden" id="customer_id" name="customer_id" value="<?php echo $_SESSION['customer']; ?>">
                                            </div>
                                        </div>
                                        <div class="row px-2">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">Expiration Date</label>
                                                <input type="text" id="expire" name="expire" placeholder="MM/YYYY">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label">CVV</label>
                                                <input type="text" id="cvv" name="cvv" placeholder="***">
                                            </div>
                                        </div>
                                        <div class="row px-2 mt-5">
                                          <h6 class="text-primary ml-3">Delivery Information</h6>
                                        </div>
                                        <div class="row px-2 ">
                                          <div class="form-group col-md-12">
                                            <label class="form-control-label">Shipping Address</label>
                                            <textarea name="shipping_address" id="shipping_address" cols="30" rows="3"></textarea>
                                          </div>
                                        </div>
                                        <div class="row px-2">
                                            <div class="form-group col-md-12">
                                                <label class="form-control-abel">Billing Address</label>
                                                <textarea name="billing_address" id="billing_address" cols="30" rows="3"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <div class="row d-flex justify-content-between px-4">
                                            <p class="mb-1 text-left">Subtotal</p>
                                            <h6 class="mb-1 text-right">Rs. <?php echo $_REQUEST['total']; ?></h6>
                                        </div>
                                        <div class="row d-flex justify-content-between px-4">
                                            <p class="mb-1 text-left">Shipping</p>
                                            <h6 class="mb-1 text-right">Rs. <?php echo $res['shipping_fee']; ?></h6>
                                        </div>
                                        <div class="row d-flex justify-content-between px-4" id="tax">
                                            <p class="mb-1 text-left">Total (tax included)</p>
                                            <h6 class="mb-1 text-right">Rs.
                                                <?php echo $total; ?></h6>
                                        </div>
                                        <button class="btn-block btn-blue" type="button" onclick="checkOut(this.form)">
                                            <span>
                                                <span id="checkout">Make Order</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <style>
    body {}

    .plus-minus {
        position: relative;
    }

    .plus {
        position: absolute;
        top: -4px;
        left: 2px;
        cursor: pointer;
    }

    .minus {
        position: absolute;
        top: 8px;
        left: 5px;
        cursor: pointer;
    }

    .vsm-text:hover {
        color: #FF5252;
    }

    .book,
    .book-img {
        width: 120px;
        height: 180px;
        border-radius: 5px;
    }

    .book {
        margin: 20px 15px 5px 15px;
    }

    .border-top {
        border-top: 1px solid #EEEEEE !important;
        margin-top: 20px;
        padding-top: 15px;
    }

    .card {
        margin: 40px 0px;
        padding: 40px 50px;
        border-radius: 20px;
        border: none;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    input,
    textarea {
        background-color: #F3E5F5;
        padding: 8px 15px 8px 15px;
        width: 100%;
        border-radius: 5px !important;
        box-sizing: border-box;
        border: 1px solid #F3E5F5;
        font-size: 15px !important;
        color: #000 !important;
        font-weight: 300;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #9FA8DA;
        outline-width: 0;
        font-weight: 400;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    .pay {
        width: 80px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #673AB7;
        margin: 10px 20px 10px 0px;
        cursor: pointer;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    .gray {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        filter: grayscale(100%);
        color: #E0E0E0;
    }

    .gray .pay {
        box-shadow: none;
    }

    #tax {
        border-top: 1px lightgray solid;
        margin-top: 10px;
        padding-top: 10px;
    }

    .btn-blue {
        border: none;
        border-radius: 10px;
        background-color: #673AB7;
        color: #fff;
        padding: 8px 15px;
        margin: 20px 0px;
        cursor: pointer;
    }

    .btn-blue:hover {
        background-color: #311B92;
        color: #fff;
    }

    #checkout {
        float: left;
    }

    #check-amt {
        float: right;
    }

    @media screen and (max-width: 768px) {

        .book,
        .book-img {
            width: 100px;
            height: 150px;
        }

        .card {
            padding-left: 15px;
            padding-right: 15px;
        }

        .mob-text {
            font-size: 13px;
        }

        .pad-left {
            padding-left: 20px;
        }
    }
    </style>
    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>