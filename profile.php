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
                <a href="service.php" class="nav-item nav-link  active">Service</a>
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
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Profile</li>
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
                        <div class="col-lg-6">
                            <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                                <div class="d-inline-flex border  p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>Full Name</h4>
                                        <p class="m-0 text-white"><?php echo $row['name']; ?></p>
                                    </div>
                                </div>
                                <div class="d-inline-flex border  p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>Email</h4>
                                        <p class="m-0 text-white"><?php echo $row['email']; ?></p>
                                    </div>
                                </div>
                                <div class="d-inline-flex border  p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>Phone Number</h4>
                                        <p class="m-0 text-white"><?php echo $row['phone']; ?></p>
                                    </div>
                                </div>
                                <div class="d-inline-flex border  p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>Address</h4>
                                        <p class="m-0 text-white"><?php echo $row['address']; ?></p>
                                    </div>
                                </div>
                                <div class="d-inline-flex border p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>NIC</h4>
                                        <p class="m-0 text-white"><?php echo $row['nic']; ?></p>
                                    </div>
                                </div>
                                <div class="d-inline-flex border  p-2 mb-4">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <div class="d-flex flex-column">
                                        <h4>Gender</h4>
                                        <p class="m-0 text-white">
                                            <?php if ($row['gender']=="1") echo "Male"; else echo "Female"; ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5 my-lg-12 py-5 pl-lg-5 bg-secondary">
                            <div class="contact-form">
                                <div id="success"></div>
                                <div class="col-md-12 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-white">Profile Settings</h4>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <input type="text"
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","name", "customer", "customer_id")'
                                                    class="form-control" id="name" placeholder="Your name"
                                                    value="<?php echo $row['name']; ?>">
                                            </div>

                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <input type="text"
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","phone", "customer", "customer_id")'
                                                    class="form-control" id="phone" placeholder="enter phone number"
                                                    value="<?php echo $row['phone']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12"><input type="text"
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","address", "customer", "customer_id")'
                                                    class="form-control" id="address" placeholder="enter address"
                                                    value="<?php echo $row['address']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <input type="text" disabled
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","nic", "customer", "customer_id")'
                                                    id="nic" class="form-control" placeholder="Enter NIC"
                                                    value="<?php echo $row['nic']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <input type="email"
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","email", "customer", "customer_id")'
                                                    id="email" class="form-control" placeholder="Enter Email Address"
                                                    value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <select
                                                    onchange='updateDataFromHome(this, "<?php echo $customer_id; ?>","gender", "customer", "customer_id")'
                                                    id="gender <?php echo $customer_id; ?>"
                                                    class='form-control norad tx12' name="gender" type='text'>
                                                    <option value="1"
                                                        <?php if ($row['gender']=="1") echo "selected"; ?>>
                                                        Male</option>
                                                    <option value="0"
                                                        <?php if ($row['gender']=="0") echo "selected"; ?>>
                                                        Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center experience mt-5">
                                            <a class="border px-3 p-1 add-experience text-white" id="change"
                                                href="change_email.php"><i class="fa fa-lock"></i>&nbsp;Change Email</a>
                                            <a href="change_password.php"
                                                class="border px-3 p-1 add-experience text-white"><i
                                                    class="fa fa-lock"></i>&nbsp;Change Password</a>
                                            <button class="border px-3 p-1 add-experience"
                                                onclick="deleteDataFromHome(<?php echo $row['customer_id']; ?>, 'customer', 'customer_id')"><i
                                                    class="fa fa-trash"></i>&nbsp;Delete</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
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