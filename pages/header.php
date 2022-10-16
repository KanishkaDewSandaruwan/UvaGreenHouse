    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start text-white">
                <small><i class="fa fa-map-marker-alt me-2"></i><?php echo $res['company_address']; ?></small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i><?php echo $res['company_phone']; ?></small>
            </div>
            <div class="col-lg-6 px-5 text-end text-white">
                <small>Follow us:</small>
                <a class="text-body text-white ms-3" href="<?php echo $res['link_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="text-body text-white ms-3" href="<?php echo $res['link_twiiter']; ?>"><i class="fab fa-twitter"></i></a>
                <a class="text-body text-white ms-3" href="<?php echo $res['link_instragram']; ?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>