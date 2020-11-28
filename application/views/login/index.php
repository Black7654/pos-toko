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
			<form action="<?php echo base_url(); ?>dashboard" enctype="multipart/form-data" method="POST">
				<img src="<?php echo base_url() . 'assets/'; ?>img/avatar.svg">
				<h4 class="head">SELAMAT DATANG DI APLIKASI</h4>
				<h2 class="title">POS-KITA</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	
            	<button type="submit" class="btn btn-success">Login</button>
				<hr>
				<a class="btn btn-success text-light" data-toggle="modal" data-target=".bd-example-modal-xl">REGISTER</a>
				
            </form>
        </div>
	</div>
	
	<!-- Modal 1 -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fas fa-fw fa-store"></span>&nbsp&nbspForm Toko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- content modal -->
                <form enctype="multipart/form-data" action="<?php echo base_url(); ?>toko/simpan" method="POST">

                    <input type="hidden" class="form-control" id="id" name="id">

                    <div class="col-md">
                        <input type="hidden" class="form-control" id="idtoko" name="idtoko" placeholder="Masukkan ID Toko">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">E - Mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan">
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Nama Toko</label>
                                <input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder="Masukkan Nama Toko">
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Pemilik</label>
                                <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Masukkan Pemilik">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md">
                            <label for="exampleInputAktif1">Jenis Kelamin</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="">--Pilih--</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputPassword1">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>

                            <div class="col-md-8">
                                <label for="exampleInputPassword1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md">
                                <label for="exampleInputPassword1">No Telephone</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan No Telephone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md">
                                <label for="exampleInputPassword1">Alamat</label>
                                <textarea type="" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">NO KTP</label>
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan No KTP">
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Kota/Kab</label>
                                <select class="form-control" name="kota_kab" id="kota_kab">
                                    <option value="">--Pilih Kota/Kabupaten--</option>
                                    <?php foreach ($kota as $row) : ?>
                                        <option value="<?php echo $row->id_kab ?>"><?php echo $row->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Provinsi</label>
                                <select class="form-control search" name="provinsi" id="provinsi">
                                    <option value="">--Pilih Provinsi--</option>
                                    <?php foreach ($provinsi as $row) : ?>
                                        <option value="<?php echo $row->id_prov ?>"><?php echo $row->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Foto Profile</label>
                                <input type="file" class="form-control" name="foto_profil" id="foto_profil" accept="image/jpg, image/jpeg" placeholder="Upload Foto" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Tanggal Registrasi</label>
                                <input type="date" class="form-control" id="reg_date" name="reg_date" placeholder="Masukkan Tanggal Registrasi">
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" id="exp_date" name="exp_date" placeholder="Masukkan Tanggal Kadaluarsa">
                            </div>
                        </div>
                    </div>


                    <!-- end content modal -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal 1 -->

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