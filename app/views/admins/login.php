<?php require APPROOT . '/views/inc/headerAdmin.php' ?>
<div class="wrap-login bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Admin</h1>
                                    </div>
                                    <form class="user" action="<?php echo URLROOT; ?>/admins/login" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                   class="form-control form-control-user <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                                   id="email" placeholder="Enter Email Address..."
                                                   value="<?php echo $data['email']; ?>">
                                            <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass"
                                                   class="form-control form-control-user <?php echo (!empty($data['pass_err'])) ? 'is-invalid' : ''; ?>"
                                                   id="password"
                                                   value="<?php echo $data['pass']; ?>"
                                                   placeholder="Password">
                                            <span class="invalid-feedback"><?php echo $data['pass_err'] ?></span>
                                        </div>

                                        <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">


                                    </form>
<!--                                    <hr>-->
<!--                                    <div class="text-center">-->
<!--                                        <a class="small" href="forgot-password.html">Forgot Password?</a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footerAdmin.php' ?>

