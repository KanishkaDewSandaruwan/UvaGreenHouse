<?php 
include 'admin/server/api.php';  

$setting = getAllSettings();
$res = mysqli_fetch_assoc($setting);

$header = $res['header_image'];
$header_src = "admin/server/uploads/settings/".$header;

$subheader = $res['sub_image'];
$subheader_src = "admin/server/uploads/settings/".$subheader;

$about = $res['about_image'];
$about_src = "admin/server/uploads/settings/".$about;


?>
<head>
    <title>Uva Green House</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="admin/assets/images/logo5.png" type="image/x-icon">

    <!-- toast -->
    <script src="admin/assets/plugin/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="admin/assets/plugin/iziToast-master/dist/css/iziToast.min.css">
    
    <!-- Simple table -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    
    

</head>