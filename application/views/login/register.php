<!DOCTYPE html>
<html>

<head>
	<!-- Tittle Logo -->
	<link rel="icon" type="img/svg" href="assets/img/tittle/shop.png">
	<title>POS KITA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- Custom fonts for this template-->
<link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() . 'assets/'; ?>fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url() . 'assets/'; ?>css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this template-->    
 <!-- Custom fonts for this template-->
 <link href="<?php echo base_url() . 'assets/'; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- style.css -->


<body background="<?php echo base_url() . 'assets/'; ?>img/wave.png">
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h1 text-gray-900 mb-4"><u><span class="fa fa-edit"></span>&nbspDaftar Akun Baru<u></h1>
					</div>
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
						<a href="login.html" class="btn btn-success btn-user btn-block">
							Register Account
						</a>
					</form>
					<hr>
					<!-- <div class="text-center">
						<a class="small" href="forgot-password.html">Forgot Password?</a>
					</div> -->
					<div class="text-center">
						<a class="small" href="<?php echo base_url(); ?>login">Jika Sudah Punya Akun Silahkan Login di Sini</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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