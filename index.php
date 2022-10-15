<!DOCTYPE html>
<html lang="en">
<?php include 'pages/head.php'; ?>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <?php include 'pages/nav.php'; ?>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->

    <?php include 'pages/header.php'; ?>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        
                    </div>
                    <!-- widget primary card start -->
                    <div class="card flat-card widget-primary-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                            <i class="fa-solid fa-money-bill"></i> 
                            </div>
                            <div class="col-sm-9">
                                <h4>Rs. <?php 
                            $data =  dataforCountToday('product_orders'); 
                            if($row = mysqli_fetch_assoc($data)){
                                echo $row['sum'];
                            }
                            ?></h4>
                                <h6>Total Income</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
    

                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                            <i class="fa-solid fa-money-bill"></i> 
                            </div>
                            <div class="col-sm-9">
                                <h4>Rs.  <?php 
                                        $data =  dataforCount('product_orders'); 
                                        if($row = mysqli_fetch_assoc($data)){
                                            echo $row['sum'];
                                        } ?></h4>
                                <h6>Today Income</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
    

                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                            <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0 text-white"><?php echo dataCount('customer'); ?></h4>
                                    <span>Customer</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white"><?php echo dataCount('product_orders'); ?></h4>
                                    <span>Orders</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white"><?php echo dataCount('products'); ?></h4>
                                    <span>Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-2 end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

</body>
<?php include 'pages/footer_scrpt.php'; ?>

</html>