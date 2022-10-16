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
                                <h5 class="m-b-10">Category Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="products.php">Category</a></li>
                                <li class="breadcrumb-item"><a href="prodcuts_edit.php">Category Add New</a></li>
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
                            <h5 style="color: white;">Category Add</h5>
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

                                <form action="" method="post" id="basicform" class="col-md-8" data-parsley-validate=""
                                    enctype="multipart/form-data">

                                    <div class="form-group mt-3">
                                        <label for="category_name">Category Name</label>
                                        <input id="category_name" class="form-control col-md-12 col-xs-12"
                                            data-validate-length-range="6" data-validate-words="2" name="category_name"
                                            required="required" placeholder="Enter Category Name" type="text">
                                    </div>

                                    <div class="form-group mt-3">
                                        <input class="form-control" required name="file" type="file" id="file">
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="category.php" class="btn btn-primary">Back</a>
                                            <button id="send" type="button" onclick="addCategory(this.form)"
                                                class="btn btn-success">Submit</button>
                                        </div>
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