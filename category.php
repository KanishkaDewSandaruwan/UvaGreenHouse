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
                                <li class="breadcrumb-item"><a href="category.php">Category Page</a></li>
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
                        <a href="add_category.php" class="btn btn-primary">Add New Category</a>
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
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Cat ID</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                            $getall = getAllCategory();

                            while($row=mysqli_fetch_assoc($getall)){

                                $cat_id = $row['cat_id'];
                                $img = $row['cat_image'];
                                $img_src = "server/uploads/category/".$img;?>
                                        <tr>
                                            <td>#<?php echo $row['cat_id']; ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <input id="cat_name  <?php echo $cat_id; ?>" type="text"
                                                        name="cat_name"
                                                        onchange="updateData(this, '<?php echo $cat_id; ?>', 'cat_name', 'category', 'cat_id');"
                                                        value="<?php echo $row['cat_name']; ?>"
                                                        data-parsley-trigger="change" required=""
                                                        placeholder="Enter Category Name" autocomplete="off"
                                                        class="form-control">
                                                </div>
                                            </td>


                                            <td>


                                                <form class="col-md-7" enctype="multipart/form-data" method="POST">
                                                    <div class="mb-3">
                                                        <input class="form-control" value="<?php echo $row['cat_id'] ?>"
                                                            name="id" type="hidden" id="id">
                                                        <input class="form-control" value="cat_id" name="id_fild"
                                                            type="hidden" id="id_fild">
                                                        <input class="form-control" value="category" name="table"
                                                            type="hidden" id="table">
                                                        <input class="form-control" value="cat_image" name="field"
                                                            type="hidden" id="field">
                                                        <input onchange="uploadImage(this.form);" class="form-control"
                                                            name="file" type="file" id="formFile">
                                                    </div>
                                                </form>
                                                <img width="200px" src='<?php echo $img_src; ?>'>

                                            </td>

                                            <td><button type="button"
                                                    onclick="deleteDataCategory(<?php echo $row['cat_id']; ?>,'category', 'cat_id')"
                                                    class="btn btn-primary"> <i class="fa-solid fa-trash"></i>
                                                </button></td>
                                        </tr>

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