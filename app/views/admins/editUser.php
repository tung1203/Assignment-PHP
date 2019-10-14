<?php //require APPROOT . '/views/inc/headerAdmin.php' ?>
<!--    <div class="container bg-light p-5" id="editBox">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-7">-->
<!--                <h1 class="text-center">Edit</h1>-->
<!--                <form action="" method="post" class="d-flex justify-content-center flex-column">-->
<!--                    <input type="text" id="userid" name="userid" style="display: none;">-->
<!--                    <div class="form-group row">-->
<!--                        <label for="editFirstname" class="col-sm-2 col-form-label">First name</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input type="text" name="firstname"-->
<!--                                   class="form-control --><?php //echo (!empty($data['firstname_err'])) ? 'is-invalid' : ''; ?><!--"-->
<!--                                   id="addFirstname"-->
<!--                                   placeholder="First name"-->
<!--                                   value="--><?php //echo $data['firstname']; ?><!--">-->
<!--                            <span class="invalid-feedback">--><?php //echo $data['firstname_err']; ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group row">-->
<!--                        <label for="editLastname" class="col-sm-2 col-form-label">Last name</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input type="text" name="lastname"-->
<!--                                   class="form-control --><?php //echo (!empty($data['lastname_err'])) ? 'is-invalid' : ''; ?><!--"-->
<!--                                   id="addLastname"-->
<!--                                   placeholder="Last name"-->
<!--                                   value="--><?php //echo $data['lastname']; ?><!--">-->
<!--                            <span class="invalid-feedback">--><?php //echo $data['lastname_err']; ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group row">-->
<!--                        <label for="addPassword2" class="col-sm-2 col-form-label">Password</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input type="password" name="password"-->
<!--                                   class="form-control --><?php //echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?><!--"-->
<!--                                   id="password1"-->
<!--                                   placeholder="Password"-->
<!--                                   value="--><?php //echo $data['password']; ?><!--">-->
<!--                            <span class="invalid-feedback">--><?php //echo $data['password_err']; ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group row">-->
<!--                        <label for="editPassword2" class="col-sm-2 col-form-label">Re-Password</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input type="password" name="rePassword"-->
<!--                                   class="form-control --><?php //echo (!empty($data['rePassword_err'])) ? 'is-invalid' : ''; ?><!--"-->
<!--                                   id="addPassword2"-->
<!--                                   placeholder="Re-Password"-->
<!--                                   value="--><?php //echo $data['rePassword']; ?><!--">-->
<!--                            <span class="invalid-feedback">--><?php //echo $data['rePassword_err']; ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group row">-->
<!--                        <label for="privilege" class="col-sm-2 col-form-label">Privilege</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <select class="form-control" id="privilege" name="privilege"-->
<!--                                    value="--><?php //echo $data['privilege']; ?><!--">-->
<!--                                <option value="2">User</option>-->
<!--                                <option value="1">Admin</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <span class="invalid-feedback">--><?php //echo $data['privilege_err']; ?><!--</span>-->
<!--                    </div>-->
<!--                    <input type="submit" value="Edit" class="btn btn-success mr-2" name="edit">-->
<!--                    <a href="--><?php //echo URLROOT; ?><!--/admins" class="btn" id="cancelEdit">Cancel</a>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<?php //require APPROOT . '/views/inc/footer.php' ?>

<?php require APPROOT . '/views/inc/headerAdmin.php' ?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php require APPROOT . '/views/inc/sidebarAdmin.php' ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require APPROOT . '/views/inc/navAdmin.php' ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="container justify-content-center" id="editBox">
                    <div class="col-md-7 m-auto">
                        <h1 class="text-center">Edit</h1>
                        <form action="" method="post" class="d-flex justify-content-center flex-column">
                            <input type="text" id="userid" name="userid" style="display: none;">
                            <div class="form-group row">
                                <label for="editFirstname" class="col-sm-2 col-form-label">First name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname"
                                           class="form-control <?php echo (!empty($data['firstname_err'])) ? 'is-invalid' : ''; ?>"
                                           id="addFirstname"
                                           placeholder="First name"
                                           value="<?php echo $data['firstname']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['firstname_err']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="editLastname" class="col-sm-2 col-form-label">Last name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname"
                                           class="form-control <?php echo (!empty($data['lastname_err'])) ? 'is-invalid' : ''; ?>"
                                           id="addLastname"
                                           placeholder="Last name"
                                           value="<?php echo $data['lastname']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['lastname_err']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="addPassword2" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password"
                                           class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                           id="password1"
                                           placeholder="Password"
                                           value="<?php echo $data['password']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="editPassword2" class="col-sm-2 col-form-label">Re-Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="rePassword"
                                           class="form-control <?php echo (!empty($data['rePassword_err'])) ? 'is-invalid' : ''; ?>"
                                           id="addPassword2"
                                           placeholder="Re-Password"
                                           value="<?php echo $data['rePassword']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['rePassword_err']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="privilege" class="col-sm-2 col-form-label">Privilege</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="privilege" name="privilege"
                                            value="<?php echo $data['privilege']; ?>">
                                        <option value="2">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <span class="invalid-feedback"><?php echo $data['privilege_err']; ?></span>
                            </div>
                            <input type="submit" value="Edit" class="btn btn-success mr-2" name="edit">
                            <a href="<?php echo URLROOT; ?>/admins/users" class="btn" id="cancelEdit">Cancel</a>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Tiki 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo URLROOT; ?>/admins/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footerAdmin.php' ?>


