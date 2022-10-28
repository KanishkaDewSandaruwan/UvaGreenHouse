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
                                <h5 class="m-b-10">Settings Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="settings.php">Settings Page</a></li>
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
                            <h5 style="color: white;">Settings</h5>
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
                            <div class="table-responsive">

                                <?php
                        $setting = getAllSettings();
                        if($res = mysqli_fetch_assoc($setting)){

                            $img = $res['header_image'];
                            $img_src = "server/uploads/settings/".$img;

                            $imgs = $res['sub_image'];
                            $imgs_src = "server/uploads/settings/".$imgs;

                            $about_image = $res['about_image'];
                            $about_image_src = "server/uploads/settings/".$about_image;
                    ?>
                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">Header Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Header Title</label>
                                        <input type="text" onchange='settingsUpdate(this, "header_title")'
                                            value="<?php echo $res['header_title']; ?>" class="form-control"
                                            name="category_name" id="validationCustom01" placeholder="Header Title"
                                            required>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label for="product_desc" class="form-label">Header Description</label>
                                        <textarea onchange='settingsUpdate(this, "header_desc")' class="form-control"
                                            id="header_desc" required
                                            rows="3"><?php echo $res['header_desc']; ?></textarea>
                                    </div>
                                    <form class="mt-3" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="hidden" name="field" id="field" value="header_image">
                                            <label for="formFile" class="form-label">Header Image file</label>
                                            <input class="form-control" onchange="uploadSettingImage(this.form);"
                                                name="file" type="file" id="formFile">
                                        </div>

                                        <img class="mt-2" width="50%" src='<?php echo $img_src; ?>'>
                                    </form>
                                </div>

                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">About Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">About Title</label>
                                        <input type="text" onchange='settingsUpdate(this, "about_title")'
                                            value="<?php echo $res['about_title']; ?>" class="form-control"
                                            id="about_title" placeholder="About Title" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="product_desc" class="form-label">About Description</label>
                                        <textarea onchange='settingsUpdate(this, "about_desc")' class="form-control"
                                            id="about_desc" required
                                            rows="3"><?php echo $res['about_desc']; ?></textarea>
                                    </div>

                                    <form class="mt-3" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="hidden" name="field" id="field" value="about_image">
                                            <label for="formFile" class="form-label"> About Us Image file</label>
                                            <input class="form-control" onchange="uploadSettingImage(this.form);"
                                                name="file" type="file" id="formFile">
                                        </div>

                                        <img class="mt-2" width="50%" src='<?php echo $about_image_src; ?>'>
                                    </form>
                                    <!-- <form class="mt-3" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" name="field" id="field" value="header_image">
                                <label for="formFile" class="form-label">Header Image file</label>
                                <input class="form-control" onchange="uploadSettingImage(this.form);" name="file" type="file" id="formFile">
                            </div>
                        </form>
                        <img class="mt-2" width="200px" src='<?php echo $img_src; ?>'> -->
                                </div>


                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">Service Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Description</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_description")'
                                            value="<?php echo $res['service_description']; ?>" class="form-control"
                                            id="service_description" placeholder="Service Description" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Title 01</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_1_title")'
                                            value="<?php echo $res['service_1_title']; ?>" class="form-control"
                                            id="service_1_title" placeholder="Service Title 01" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Description 01</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_1_desc")'
                                            value="<?php echo $res['service_1_desc']; ?>" class="form-control"
                                            id="service_1_desc" placeholder="Service Description 01" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Title 02</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_2_title")'
                                            value="<?php echo $res['service_2_title']; ?>" class="form-control"
                                            id="service_2_title" placeholder="Service Title 02" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Description 02</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_2_desc")'
                                            value="<?php echo $res['service_2_desc']; ?>" class="form-control"
                                            id="service_2_desc" placeholder="Service Description 02" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Title 03</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_3_title")'
                                            value="<?php echo $res['service_3_title']; ?>" class="form-control"
                                            id="service_3_title" placeholder="Service Title 03" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Service Description 03</label>
                                        <input type="text" onchange='settingsUpdate(this, "service_3_desc")'
                                            value="<?php echo $res['service_3_desc']; ?>" class="form-control"
                                            id="service_3_desc" placeholder="Service Description 03" required>
                                    </div>

                                </div>

                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">Contact Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Company Phone Number</label>
                                        <input type="text" onchange='settingsUpdate(this, "company_phone")'
                                            value="<?php echo $res['company_phone']; ?>" class="form-control"
                                            id="company_phone" placeholder="Company Phone Number" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Company Email Address</label>
                                        <input type="text" onchange='settingsUpdate(this, "company_email")'
                                            value="<?php echo $res['company_email']; ?>" class="form-control"
                                            id="company_email" placeholder="Company Email Address" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">Company Address</label>
                                        <input type="text" onchange='settingsUpdate(this, "company_address")'
                                            value="<?php echo $res['company_address']; ?>" class="form-control"
                                            id="company_address" placeholder="Company Address" required>
                                    </div>

                                </div>


                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">Subpage Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="sub_title" class="form-label">Sub Page Title</label>
                                        <input type="text" onchange='settingsUpdate(this, "sub_title")'
                                            value="<?php echo $res['sub_title']; ?>" class="form-control" id="sub_title"
                                            placeholder="Sub Page Title" required>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="product_desc" class="form-label">Subpage Description</label>
                                        <textarea onchange='settingsUpdate(this, "sub_desc")' class="form-control"
                                            id="sub_desc" required rows="3"><?php echo $res['sub_desc']; ?></textarea>
                                    </div>
                                    <form class="mt-3" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="hidden" name="field" id="field" value="sub_image">
                                            <label for="formFile" class="form-label">Subpage Image file</label>
                                            <input class="form-control" onchange="uploadSettingImage(this.form);"
                                                name="file" type="file" id="formFile">
                                        </div>
                                        <img class="mt-2" width="50%" src='<?php echo $imgs_src; ?>'>
                                    </form>
                                </div>

                                <div class="row m-5 p-5 border border-white">
                                    <div class="col-md-12">
                                        <h5 class="text-white">Order Settings</h5>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="sub_title" class="form-label">Shipping Fee</label>
                                        <input type="text" onchange='settingsUpdate(this, "shipping_fee")'
                                            value="<?php echo $res['shipping_fee']; ?>" class="form-control"
                                            id="shipping_fee" placeholder="Shipping Fee" required>
                                    </div>
                                </div>

                                <?php } ?>


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