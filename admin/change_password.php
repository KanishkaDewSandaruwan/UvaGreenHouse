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
                                <h5 class="m-b-10">Change Password</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="change_password.php">Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-header text-white" style="background-color: #2c3e50;">
                            <h5 style="color: white;">Change Password</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-white" style="background-color: #2c3e50;">
                            <div>

                                <form action="" method="post" id="basicform" class="col-md-6" data-parsley-validate=""
                                    enctype="multipart/form-data">

                                    <div class="col-md-12">
                                        <label for="current_password" class="form-label">Current Password Name</label>
                                        <input type="password" class="form-control" name="current_password"
                                            id="current_password" placeholder="Current Password Name" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="new_password"
                                            id="new_password" placeholder="New Password" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="confirm_new_password" class="form-label">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control" name="confirm_new_password"
                                            id="confirm_new_password" placeholder="Confirm New Password" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" name="email"
                                            value="<?php echo $_SESSION['admin']; ?>" id="email">
                                    </div>

                                    <div class="form-group mt-3 mt-5">

                                        <button type="button" class="btn btn-primary mr-5"
                                        onclick="changePassword(this.form)">Change Password</button>
                                        <button type="button" class="btn btn-primary mr-5"
                                            onclick="window.location.href='index.php'">Home</button>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <?php include 'pages/footer_scrpt.php'; ?>

</body>

</html>