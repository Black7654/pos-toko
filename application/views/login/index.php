<!DOCTYPE html>
<html>

<head>
	<!-- Tittle Logo -->
	<link rel="icon" type="img/svg" href="assets/img/tittle/shop.png">
	<title>POS KITA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<!-- Css -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/style.css">    
 <!-- Custom fonts for this template-->
 <link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- style.css -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/style.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/sb-admin-2.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>css/sb-admin-2.min.css">



<body>
	<img class="wave" src="<?php echo base_url() . 'assets/'; ?>img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url() . 'assets/'; ?>img/shop.svg">
		</div>
		<div class="login-content">
			<form action="<?php echo base_url(); ?>login/cek" enctype="multipart/form-data" method="POST">
				<img src="<?php echo base_url() . 'assets/'; ?>img/avatar.svg">
				<h4 class="head">SELAMAT DATANG DI APLIKASI</h4>
				<h2 class="title">POS-KITA</h2>
        <?php if ($this->session->flashdata('SUCCESS')) {?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                 <?= $this->session->flashdata('SUCCESS')?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('DANGER')) {?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Gagal Login!</h4>
                 <?= $this->session->flashdata('DANGER')?>
            </div>
        <?php } ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
				</div>
				<button type="submit" class="btn btn-success"><span class="fa fa-sign-out-alt"></span>&nbspLogin</button>
				<hr>
				<a class="text-center" href="<?php echo base_url(); ?>login/register"><h6>Belum Punya Akun? Klik Untuk Daftar</h6></a>
				
            </form>
        </div>
	</div>
	

	<!-- javascript default -->
	<script src="<?php echo base_url() . 'assets/'; ?>js/main.js" > </script>
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