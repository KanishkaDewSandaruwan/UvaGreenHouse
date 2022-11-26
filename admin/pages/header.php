<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
<?php include 'pages/admin.php'; ?>		
			
<div class="m-header">
    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    <a href="#!" class="b-brand">
        <!-- ========   change your logo hear   ============ -->

    </a>
    <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
    </a>
</div>
<div class="collapse navbar-collapse">
    
    <ul class="navbar-nav ml-auto">
        <li>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="icon feather icon-bell"></i>
                    <span class="badge badge-pill badge-danger"><?php echo dataCountWhere('product_orders', 'order_status = 1'); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notification">
                    <div class="noti-head">
                        <h6 class="d-inline-block m-b-0">Notifications</h6>
                    </div>
                    <ul class="noti-body">
                    <?php 
                    $getall = getAllOrdersPending();

                    while($row=mysqli_fetch_assoc($getall)){ 
                        $order_id = $row['order_id'];
                        ?>

                        <li class="notification">
                            <div class="media">
                                <div class="media-body">
                                    <p><strong><?php echo $row['name']; ?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i><?php echo $row['date_updated']; ?></span></p>
                                    <p><?php echo $row['address']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="noti-footer">
                        <a href="order.php">show all</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">
                        <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                        <span>Admin</span>
                        <a href="logout.php" class="dud-logout" title="Logout">
                            <i class="feather icon-log-out"></i>
                        </a>
                    </div>
                    <ul class="pro-body">
                        <li><a href="change_password.php" class="dropdown-item"><i class="feather fas fa-lock"></i> Change Password</a></li>
                        <li><a href="message.php" class="dropdown-item"><i class="feather fas fa-envelope"></i> Messages</a></li>
                        <li><a href="settings.php" class="dropdown-item"><i class="feather fas fa-users-cog"></i> Settings</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>


</header>