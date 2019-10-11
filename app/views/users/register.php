<?php require APPROOT . '/views/inc/headerAdmin.php' ?>
    <div class="container">
        <form action="<?php echo URLROOT; ?>/users/register" method="post" class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">Firstname :</label>
                <input type="text" name="firstname"
                       class="form-control <?php echo (!empty($data['firstname_err'])) ? 'is-invalid' : ''; ?>"
                       id="first_name" placeholder="First name"
                       value="<?php echo $data['firstname']; ?>">
                <span class="invalid-feedback"><?php echo $data['firstname_err']; ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Lastname :</label>
                <input type="text" name="lastname"
                       class="form-control <?php echo (!empty($data['lastname_err'])) ? 'is-invalid' : ''; ?>"
                       id="lastname" placeholder="Last name"
                       value="<?php echo $data['lastname']; ?>">
                <span class="invalid-feedback"><?php echo $data['lastname_err']; ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password :</label>
                <input type="password" name="password"
                       class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                       id="password" placeholder="Password"
                       value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="password2">Re-Password :</label>
                <input type="password" name="rePassword"
                       class="form-control <?php echo (!empty($data['rePassword_err'])) ? 'is-invalid' : ''; ?>"
                       id="password2" placeholder="Re-Password"
                       value="<?php echo $data['rePassword']; ?>">
                <span class="invalid-feedback"><?php echo $data['rePassword_err']; ?></span>
            </div>
            <div class="form-group col-md-12">
                <label for="email">Email :</label>
                <input type="text" name="email" class="form-control"
                       id="email <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="Email"
                       value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <input type="submit" value="Register" class="btn btn-success">
            <a href="<?php echo URLROOT; ?>/users/login" class="ml-2 btn">Login</a>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php' ?>