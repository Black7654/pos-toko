<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Tittle Logo -->
    <link rel="icon" type="img/svg" href="assets/img/tittle/shop.png">
    <title>POS KITA</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . 'assets/'; ?>fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/'; ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/'; ?>css/style2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url() . 'assets/'; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion " id="accordionSidebar">

            <?php echo $_sidebar; ?>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <?php echo $_header; ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php echo $_content; ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>@Copyright&copy; by CV.NMM All Right Reserved 2020</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Akan Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda Akan Keluar dari Halaman Ini....???</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-times"></span>&nbspBatal</button>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>login/logout"><span class="fa fa-sign-out-alt"></span>&nbspKeluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . 'assets/'; ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() . 'assets/'; ?>js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() . 'assets/'; ?>js/demo/datatables-demo.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url() . 'assets/'; ?>css/sweetalert2.min.js"></script>

</body>

</html>