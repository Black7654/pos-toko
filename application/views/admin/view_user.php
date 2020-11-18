 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-user"></span>&nbsp User</h1>
 </div>

 <!-- Tabel -->
 <div class="card shadow mb-4">

     <div class="card-header py-3">
         <h3 class="h4 mb-0 font-weight-bold text-success">
             <span class="fa fa-file-alt"></span>&nbsp&nbspData User
             <a href="#" type="button" class="btn btn-success btn-icon-split float-right" data-toggle="modal" data-target=".bd-example-modal-xl">
                 <span class=" icon text-white-50">
                     <i class="fas fa-plus"></i>
                 </span>
                 <span class="text">Add</span>
             </a>
         </h3>
     </div>

     <div class="card-body">

         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th class="text-center">NO</th>
                         <th class="text-center">ID</th>
                         <th class="text-center">ID Toko</th>
                         <th class="text-center">Email</th>
                         <th class="text-center">Password</th>
                         <th class="text-center">Nama</th>
                         <th class="text-center">Gender</th>
                         <th class="text-center">Tempat Lahir</th>
                         <th class="text-center">Tanggal Lahir</th>
                         <th class="text-center">No Telp</th>
                         <th class="text-center">Alamat</th>
                         <th class="text-center">Alamat</th>
                         <th class="text-center">Kota/Kab</th>
                         <th class="text-center">Provinsi</th>
                         <th class="text-center">Foto Profile</th>
                         <th class="text-center">Status</th>
                         <th class="text-center">Status Login</th>
                         <th class="text-center">Terakhir Login</th>
                         <th class="text-center">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        // if (is_array($data)) {
                        //     $no = 0;
                        //     foreach ($data as $row) {
                        //         $no++; 
                        ?>
                     <tr>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center"></td>
                         <td class="text-center">
                             <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2"></a>
                             &nbsp||&nbsp
                             <a class="fa fa-trash" href="#"></a>
                         </td>

                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <!-- End Tabel -->


 <!-- Modal -->
 <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-user"></span>&nbsp&nbspForm Toko</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <!-- content modal -->
                 <form action="#" enctype="multipart/form-data" method="POST">
                     <input type="hidden" class="form-control" id="id_admin" name="id_admin">

                     <div class="container">

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">ID</label>
                                     <input type="text" class="form-control" id="id" name="id" placeholder="ID">
                                 </div>

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">ID Toko</label>
                                     <input type="text" class="form-control" id="idToko" name="idToko" placeholder="ID Toko">
                                 </div>

                             </div>
                         </div>
                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">E-Mail</label>
                                     <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
                                 </div>

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">Password</label>
                                     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md">
                                     <label for="exampleInputUsername1">Nama</label>
                                     <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md">
                                     <label for="exampleInputAktif1">Jenis Kelamin</label>
                                     <select class="form-control" name="gender" id="gender">
                                         <option value="">--Pilih--</option>
                                         <option value="L">Laki-Laki</option>
                                         <option value="P">Perempuan</option>
                                     </select>
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">Tempat Lahir</label>
                                     <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir">
                                 </div>

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">Tanggal Lahir</label>
                                     <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md">
                                     <label for="exampleInputUsername1">No Telephone</label>
                                     <input type="text" class="form-control" id="telp" name="telp" placeholder="No Telephone">
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                <div class="col-md-6">
                                     <label for="exampleInputUsername1">Alamat</label>
                                     <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                                 </div>

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">No KTP</label>
                                     <textarea class="form-control" id="no_ktp" name="no_ktp" placeholder="No KTP"></textarea>
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">Kota/Kab</label>
                                     <input type="text" class="form-control" id="kota_kab" name="kota_kab" placeholder="Kota/Kab">
                                 </div>

                                 <div class="col-md-6">
                                     <label for="exampleInputUsername1">Provinsi</label>
                                     <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi">
                                 </div>

                             </div>
                         </div>

                         <div class="form-group">
                             <div class="row">

                                 <div class="col-md" id="input_foto">
                                     <label for="foto">Upload Foto</label>
                                     <input type="file" class="form-control" name="foto" id="foto" accept="image/jpg, image/jpeg" placeholder="Upload Foto" required>
                                 </div>

                             </div>
                         </div>

                        <div class="form-group">
                             <div class="row">

                                 <div class="col-md">
                                     <label for="exampleInputAktif1">Status</label>
                                     <select class="form-control" name="status" id="status">
                                         <option value="">--Pilih--</option>
                                         <option value="A">Aktif</option>
                                         <option value="TA">Tidak Aktif</option>
                                     </select>
                                 </div>
<!-- 
                                 <div class="col-md-6">
                                     <label for="exampleInputAktif1">Status Login</label>
                                     <select class="form-control" name="stts_login" id="stts_login">
                                         <option value="">--Pilih--</option>
                                         <option value="L">Login</option>
                                         <option value="TL">Tidak Login</option>
                                     </select>
                                 </div> -->

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
