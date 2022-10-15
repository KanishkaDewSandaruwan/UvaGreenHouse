<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <div class="card borderless">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="f-w-400">Sign up</h4>
                        <hr>
                        <form>

                            <div>
                                <input type="text" class="form-control mt-2" id="floatingText" name="name"
                                    placeholder="jhondoe">
                            </div>
                            <div>
                                <input type="email" class="form-control mt-2" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                            </div>
                            <div>
                                <input type="text" class="form-control mt-2" id="floatingText" name="phone"
                                    placeholder="0753664078">
                            </div>
                            <div>
                                <input type="text" class="form-control mt-2" id="floatingText" name="nic"
                                    placeholder="862545789V">
                            </div>
                            <div>
                                <input type="text" class="form-control mt-2" id="floatingText" name="address"
                                    placeholder="24/2 Flower Rd, Colombo 7">
                            </div>
                            <div>
                                <select class="form-control mt-2" name="gender" id="gender"
                                    aria-label="Default select example">
                                    <option value="1" selected>Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                            <div style="margin-top: 30px;">
                                <input type="password" class="form-control mt-2" name="password" id="password"
                                    placeholder="Password">
                            </div>
                            <div>
                                <input type="password" class="form-control mt-2" name="conf_password" id="conf_password"
                                    placeholder="Password">

                            </div>
                            <div class="col-md-12 mt-5">
                                <button type="button" onclick="addCustomer(this.form)" class="btn btn-primary w-100">Register</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link mt-1">Do You have Account?
                                    <a href="login.php" class="to_register"> Login </a>
                                </p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>


<?php include 'pages/footer_scrpt.php'; ?>
</body>

</html>