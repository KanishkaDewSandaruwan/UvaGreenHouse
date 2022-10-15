<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Signin</h4>
                        <hr>
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email address">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <button class="btn btn-block btn-primary mb-4" type="button" onclick="login(this.form)">Signin</button>
                        </form>
                        <hr>

                        <p class="mb-0 text-muted">Don’t have an account? <a href="register.php"
                                class="f-w-400">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>

<?php include 'pages/footer_scrpt.php'; ?>

</body>

</html>