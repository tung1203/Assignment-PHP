<?php require APPROOT . '/views/inc/headerAdmin.php' ?>
<div class="wrap-login ">
    <h1 class="text-center">Welcome Admin</h1>
    <div class="container">
        <form action="<?php echo URLROOT; ?>/admins/login" method="post" class="login-form">
            <div class="form-group col-md-12">
                <label for="username">Email :</label>
                <input type="text" name="email"
                       class="form-control w-25 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                       id="email" placeholder="Email"
                       value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>

            </div>
            <div class="form-group col-md-12">
                <label for="password ">Password :</label>
                <input type="password" name="pass"
                       class="form-control w-25 <?php echo (!empty($data['pass_err'])) ? 'is-invalid' : ''; ?>"
                       id="password"
                       value="<?php echo $data['pass']; ?>"
                       placeholder="Password">
                <span class="invalid-feedback"><?php echo $data['pass_err'] ?></span>
            </div>
            <input type="submit" value="Login" class="btn btn-success mr-2">
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php' ?>

