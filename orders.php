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
            <h1 class="display-3 mb-3 animated text-dark slideInDown">Order List</h1>
            <nav aria-label="breadcrumb animated text-dark slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Order List</li>
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
                        <h1 class="display-5 mb-3">Your Order List</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
    $getall = getAllOrders();

    while($row=mysqli_fetch_assoc($getall)){ 
        $order_id = $row['order_id'];
        ?>
                <article class="card mt-5">
                    <header class="card-header text-white"
                        style="background-color: #2c3e50; border: 2px solid #2c3e50;">
                        Orders / Tracking </header>
                    <div class="card-body">
                        <h6>Order ID: #<?php echo $row['order_id']; ?> </h6>
                        <article class="card">
                            <div class="card-body row">

                                <div class="col"> <strong>Shipping TO:</strong>
                                    <br><?php echo $row['shipping_address']; ?>
                                </div>
                                <div class="col"> <strong>Billing TO:</strong>
                                    <br><?php echo $row['billing_address']; ?>
                                </div>
                                <div class="col"> <strong>Current Status:</strong>
                                    <br>
                                    <?php if($row['order_status'] == 1){
                                echo 'Order confirmed';
                            }else if($row['order_status'] == 2){
                                echo 'Prepare Order';
                            } else if($row['order_status'] == 3){
                                echo 'Shipped Order';
                            } else if($row['order_status'] == 4){
                                echo 'Deliverd';
                            } else if($row['order_status'] == 5){
                                echo 'Canceled';
                            } ?>
                                </div>
                                <div class="col"> <strong>Tracking #:</strong> <br>
                                    <?php if($row['tracking'] != 'Pending'){ echo $row['tracking']; }else{echo "Pending";}?>
                                </div>
                                <div class="col"> <strong>Order Purchase Date:</strong>
                                    <br><?php echo $row['date_updated']; ?>
                                </div>
                            </div>
                        </article>
                        <?php if($row['order_status'] != 5) {?>
                        <div class="track">

                            <div
                                class="step <?php if($row['order_status'] == 1 || $row['order_status'] == 2 || $row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                <span class="icon"> <i class="fa fa-check"></i> </span>
                                <span class="text">Order confirmed</span>
                            </div>
                            <div
                                class="step <?php if($row['order_status'] == 2 || $row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                <span class="icon"> <i class="fa fa-user"></i> </span>
                                <span class="text">Prepare Order</span>
                            </div>
                            <div
                                class="step <?php if($row['order_status'] == 3 || $row['order_status'] == 4) {echo 'active';}?>">
                                <span class="icon"> <i class="fa fa-truck"></i> </span>
                                <span class="text"> Shipped Order </span>
                            </div>
                            <div class="step <?php if($row['order_status'] == 4) {echo 'active';}?>">
                                <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">Deliverd</span>
                            </div>
                        </div>
                        <?php } ?>
                        <hr>
                        <ul class="row">
                            <?php 
                            $getdetails = getAllOrderItemsBYOrder($row['order_id']);

                            while($row2=mysqli_fetch_assoc($getdetails)){
                                
                                $img = $row2['product_image'];
                                $img_src = "admin/server/uploads/products/".$img;?>
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="<?php echo $img_src; ?>" class="img-sm border">
                                    </div>
                                    <figcaption class="info align-self-center">
                                        <p class="title"><?php echo $row2['product_name']; ?> <br>
                                            <?php echo $row2['product_highlight']; ?></p> <span class="text-muted">Rs.
                                            <?php echo $row2['product_price']; ?> </span>
                                    </figcaption>
                                </figure>
                            </li>
                            <?php } ?>
                        </ul>
                        <hr>
                        <div class="row">

                            <?php if ($row['order_status'] != "5") { ?>
                            <div class="col-md-3">
                                <label for="order_status" class="form-label">Order Cancel</label>

                                <select
                                    onchange='updateDataFromHome(this, "<?php echo $order_id; ?>","order_status", "product_orders", "order_id")'
                                    id="order_status <?php echo $order_id; ?>" class='form-control norad tx12'
                                    name="order_status" type='text'>
                                    <option value="1" <?php if ($row['order_status']=="1") echo "selected"; ?> disabled>
                                        Make Order Back
                                    </option>
                                    <option value="2" <?php if ($row['order_status']=="2") echo "selected"; ?> disabled>
                                        Prepare Order
                                    </option>
                                    <option value="3" <?php if ($row['order_status']=="3") echo "selected"; ?> disabled>
                                        Shipped Order
                                    </option>
                                    <option value="4" <?php if ($row['order_status']=="4") echo "selected"; ?> disabled>
                                        Deliverd
                                    </option>
                                    <option value="5" <?php if ($row['order_status']=="5") echo "selected"; ?>>
                                        Canceled
                                    </option>
                                </select>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </article>
                <?php } ?>

            </div>

        </div>
    </div>
    </div>
    <!-- Product End -->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
        background-color: #eeeeee;
        font-family: 'Open Sans', serif
    }


    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.10rem
    }

    .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }

    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }

    .track .step.active:before {
        background: #2c3e50
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }

    .track .step.active .icon {
        background: #2c3e50;
        color: #fff
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000
    }

    .track .text {
        display: block;
        margin-top: 7px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px
    }

    ul.row,
    ul.row-sm {
        list-style: none;
        padding: 0
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .itemside .title {
        display: block;
        margin-bottom: 5px;
        color: #212529
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    .btn-warning {
        color: #ffffff;
        background-color: #2c3e50;
        border-color: #2c3e50;
        border-radius: 1px
    }

    .btn-warning:hover {
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px
    }
    </style>

    <?php include 'pages/footersc.php'; ?>
    <?php include 'pages/footer.php'; ?>
</body>

</html>