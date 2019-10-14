<?php require APPROOT . '/views/inc/headerAdmin.php' ?>
<div class="wrap-login bg-gradient-primary py-5">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="<?php echo URLROOT; ?>/users/register" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname"
                                               class="form-control form-control-user <?php echo (!empty($data['firstname_err'])) ? 'is-invalid' : ''; ?>"
                                               id="first_name" placeholder="First Name"
                                               value="<?php echo $data['firstname']; ?>">
                                        <span class="invalid-feedback"><?php echo $data['firstname_err']; ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname"
                                               class="form-control form-control-user <?php echo (!empty($data['lastname_err'])) ? 'is-invalid' : ''; ?>"
                                               id="lastname" placeholder="Last Name"
                                               value="<?php echo $data['lastname']; ?>">
                                        <span class="invalid-feedback"><?php echo $data['lastname_err']; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email"
                                           class="form-control form-control-user <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                           placeholder="Email Address"
                                           id="email"
                                           value="<?php echo $data['email']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password"
                                               class="form-control form-control-user <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                               id="password" placeholder="Password"
                                               value="<?php echo $data['password']; ?>">
                                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="rePassword"
                                               class="form-control form-control-user <?php echo (!empty($data['rePassword_err'])) ? 'is-invalid' : ''; ?>"
                                               id="password2" placeholder="Repeat Password"
                                               value="<?php echo $data['rePassword']; ?>">
                                        <span class="invalid-feedback"><?php echo $data['rePassword_err']; ?></span>
                                    </div>
                                </div>
                                <input class="btn btn-primary btn-user btn-block" type="submit" value="Register Account">
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?php echo URLROOT; ?>/users/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require APPROOT . '/views/inc/footerAdmin.php' ?>
