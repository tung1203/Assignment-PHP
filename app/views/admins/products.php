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
                <?php echo flash('user_message'); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <a href="<?php echo URLROOT; ?>/admins/addproduct" class="btn btn-success mb-3"
                               id="addUserBtn">Add Product</a>
                        </div>
                    </div>
                </div>
                <table class="table products-table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['products'] as $product): ?>
                        <tr>
                            <th class="userid" scope="row"><?php echo $product->productid ?></th>
                            <td class="firstname"><?php echo $product->productname ?></td>
                            <td class="product-image"><img src="<?php echo URLROOT . '/' . $product->productimage ?>"
                                                           alt="">
                            </td>
                            <td class="price"><?php echo number_format($product->price); ?>VNĐ</td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/admins/editproduct/<?php echo $product->productid ?>"
                                   class="btn btn-success edit">Edit</a>
                            </td>
                            <td>
                                <form method="post"
                                      action="<?php echo URLROOT; ?>/admins/deleteproduct/<?php echo $product->productid ?>" onsubmit="checkDelete(event)">
                                    <button class="btn btn-danger" >Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?php echo ($data['currentPage'] == 1) ? 'disabled' : '' ?>">
                            <a class="page-link"
                               href="<?php echo URLROOT; ?>/admins/products/<?php echo $data['currentPage'] - 1; ?>">Previous</a>
                        </li>
                        <?php for ($i = 1; $i <= $data['totalPages']; $i++): ?>
                            <li class="page-item <?php echo ($data['currentPage'] == $i) ? 'active' : ''; ?>">
                                <a class="page-link"
                                   href="<?php echo URLROOT; ?>/admins/products/<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?php echo ($data['currentPage'] == $data['totalPages']) ? 'disabled' : '' ?>">
                            <a class="page-link"
                               href="<?php echo URLROOT; ?>/admins/products/<?php echo $data['currentPage'] + 1; ?>">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Page Heading -->


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
