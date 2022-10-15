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
                                <h5 class="m-b-10">Products Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                                <li class="breadcrumb-item"><a href="prodcuts_edit.php">Products Edit</a></li>
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
                            <h5 style="color: white;">Products Edit</h5>
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
                                <?php 
                    if (isset($_REQUEST['pid'])) {
                        $getall = getAllItemsByID($_REQUEST['pid']);
                        $row = mysqli_fetch_assoc($getall);
                        $pid = $row['pid'];
                        $img = $row['product_image'];
                        $img_src = "server/uploads/products/" . $img;
                            ?>
                                <form action="" method="post" id="basicform" class="col-md-6" data-parsley-validate=""
                                    enctype="multipart/form-data">

                                    <div class="form-group mt-3">
                                        <label for="product_name">Product Name</label>
                                        <input id="product_name  <?php echo $pid; ?>" type="text" name="product_name"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_name', 'products', 'pid');"
                                            value="<?php echo $row['product_name']; ?>" data-parsley-trigger="change"
                                            required="" placeholder="Enter Product Name" autocomplete="off"
                                            class="form-control">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="product_description">Product Description</label>
                                        <input id="product_description  <?php echo $pid; ?>" type="text"
                                            name="product_description"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_description', 'products', 'pid');"
                                            value="<?php echo $row['product_description']; ?>"
                                            data-parsley-trigger="change" required=""
                                            placeholder="Enter Product Description" autocomplete="off"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="product_highlight">Product Highlight</label>
                                        <input id="product_highlight <?php echo $pid; ?>" type="text"
                                            name="product_highlight"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_highlight', 'products', 'pid');"
                                            value="<?php echo $row['product_highlight']; ?>"
                                            data-parsley-trigger="change" required=""
                                            placeholder="Enter Product Highlight" autocomplete="off"
                                            class="form-control">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="product_price">Price</label>
                                        <input id="product_price <?php echo $pid; ?>" type="number" name="product_price"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_price', 'products', 'pid');"
                                            value="<?php echo $row['product_price']; ?>" data-parsley-trigger="change"
                                            required="" placeholder="Enter Product Price" autocomplete="off"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <select
                                            onchange='updateData(this, "<?php echo $pid; ?>","cat_id", "products", "pid")'
                                            id="cat_id <?php echo $pid; ?>" class='form-control norad tx12'
                                            name="cat_id" type='text'>
                                            <?php 
                                        $getallCat = getAllCategory();
                                        while($row2=mysqli_fetch_assoc($getallCat)){ ?>

                                            <option value="<?php echo $row2['cat_id']; ?>"
                                                <?php if ($row['cat_id']== $row2['cat_id']) echo "selected"; ?>>
                                                <?php echo $row2['cat_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="product_qty">Qty</label>
                                        <input id="product_qty <?php echo $pid; ?>" type="number" name="product_qty"
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_qty', 'products', 'pid');"
                                            value="<?php echo $row['product_qty']; ?>" data-parsley-trigger="change"
                                            required="" placeholder="Enter Qty" autocomplete="off" class="form-control">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="inputPassword">Active</label>
                                        <select
                                            onchange="updateData(this, '<?php echo $pid; ?>', 'product_active', 'products', 'pid');"
                                            id="product_active <?php echo $pid; ?>" class='form-control norad tx12'
                                            name="product_active" type='text'>
                                            <option value="1"
                                                <?php if ($row['product_active'] == "1" ) echo "selected" ; ?>> Active
                                            </option>
                                            <option value="0"
                                                <?php if ($row['product_active'] == "0" ) echo "selected" ; ?>>
                                                Deactive
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-3">
                                        <form enctype="multipart/form-data" method="POST">
                                            <div class="mb-3" style="background-color: black;">
                                                <input class="form-control" value="<?php echo $row['pid'] ?>" name="id"
                                                    type="hidden" id="id">
                                                <input class="form-control" value="pid" name="id_fild" type="hidden"
                                                    id="id_fild">
                                                <input class="form-control" value="products" name="table" type="hidden"
                                                    id="table">
                                                <input class="form-control" value="product_image" name="field"
                                                    type="hidden" id="field">
                                                <input onchange="uploadImageProducts(this.form);" class="form-control"
                                                    name="file" type="file" id="formFile">
                                            </div>

                                            <img width="50%" src='<?php echo $img_src; ?>'>
                                    </div>

                                    <div class="form-group mt-3 mt-5">

                                        <button type="button" class="btn btn-primary mr-5"
                                            onclick="window.location.href='products.php'">Back</button>

                                    </div>
                                </form>
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