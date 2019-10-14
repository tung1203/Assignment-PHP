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

                <div class="container justify-content-center">
                    <div class="col-md-7 m-auto">
                        <h1 class="text-center">Add Product</h1>
                        <form action="<?php echo URLROOT; ?>/admins/addProduct" method="post"
                              class="d-flex justify-content-center flex-column" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label for="productName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="productName"
                                           class="form-control <?php echo (!empty($data['productName_err'])) ? 'is-invalid' : ''; ?>"
                                           id="productName"
                                           placeholder="Product Name"
                                           value="<?php echo $data['productName']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['productName_err']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="productImage" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="productImage" class="form-control-file" id="productImage">
                                    <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="productPrice" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="productPrice"
                                           class="form-control <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>"
                                           id="productPrice"
                                           placeholder="Product Price"
                                           value="<?php echo $data['price']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>

                                </div>
                            </div>
                            <input type="submit" value="Upload" class="btn btn-success mr-2" name="uploadProduct">
                            <a href="<?php echo URLROOT; ?>/admins/products" class="btn" id="cancelAdd">Cancel</a>
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
                    <span>Copyright &copy; Your Tiki 2019</span>
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
