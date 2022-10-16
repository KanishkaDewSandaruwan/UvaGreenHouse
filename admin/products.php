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
                                <li class="breadcrumb-item"><a href="products.php">Products Page</a></li>
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
                            <a href="add_product.php" class="btn btn-primary">Add New Products</a>
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
                            <div class="table-responsive " >

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>PID</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Highlight</th>
                                            <th>Category</th>
                                            <th>Price (Rs.)</th>
                                            <th>Qty</th>
                                            <th>Available</th>
                                            <th>Date Updated</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $getall = getAllItems();
                                            while ($row = mysqli_fetch_assoc($getall)) {
                                                $pid = $row['pid'];
                                                $img = $row['product_image'];
                                                $img_src = "server/uploads/products/" . $img; ?>
                                        <tr>
                                            <td>
                                                #<?php echo $row['pid']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['product_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['product_description']; ?>
                                            </td>
                                            <td><img width="50px" src='<?php echo $img_src; ?>'></td>
                                            <td>
                                                <?php echo $row['product_highlight']; ?>
                                            </td>

                                            <td><select
                                                    onchange="updateData(this, '<?php echo $pid; ?>', 'cat_id', 'products', 'pid');"
                                                    id="cat_id <?php echo $pid; ?>" class='form-control norad tx12'
                                                    name="cat_id" type='text'>
                                                    <?php 
                                                    $getallCat = getAllCategories();
                                                    while($row2=mysqli_fetch_assoc($getallCat)){ ?>

                                                    <option value="<?php echo $row2['cat_id']; ?>"
                                                        <?php if ($row['cat_id']== $row2['cat_id']) echo "selected"; ?>>
                                                        <?php echo $row2['cat_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control"
                                                    onchange="updateData(this, '<?php echo $pid; ?>', 'product_price', 'products', 'pid');"
                                                    name="product_price" id="product_price <?php echo $pid; ?>"
                                                    value="<?php echo $row['product_price']; ?>">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control"
                                                    onchange="updateData(this, '<?php echo $pid; ?>', 'product_qty', 'products', 'pid');"
                                                    name="product_qty" id="product_qty <?php echo $pid; ?>"
                                                    value="<?php echo $row['product_qty']; ?>">
                                            </td>

                                            <td>
                                                <select
                                                    onchange="updateData(this, '<?php echo $pid; ?>', 'product_active', 'products', 'pid');"
                                                    id="product_active <?php echo $pid; ?>"
                                                    class='form-control norad tx12' name="product_active" type='text'>
                                                    <option value="1"
                                                        <?php if ($row['product_active'] == "1" ) echo "selected" ; ?>>
                                                        Active
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($row['product_active'] == "0" ) echo "selected" ; ?>>
                                                        Deactive
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <?php echo $row['date_updated']; ?>
                                            </td>
                                            <td>

                                                <a href="prodcuts_edit.php?pid=<?php echo $row['pid']; ?>"
                                                    class="btn btn-primary">
                                                    <i class="fa-solid fa-pen-to-square"></i> </a>
                                                <?php if ($row['product_active']=="0"): ?>
                                                <button type="button"
                                                    onclick="deleteData(<?php echo $row['pid']; ?>,'products', 'pid')"
                                                    class="btn btn-primary mt-2"> <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <?php endif ?>

                                            </td>
                                            <?php } ?>

                                    </tbody>

                                </table>

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