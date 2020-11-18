<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-users"></span>&nbspSupplier</h1>
</div>

<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="h4 mb-0 font-weight-bold text-success">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Supplier
            <a href="#" type="button" class="btn btn-success btn-icon-split float-right" data-toggle="modal" data-target="#exampleModal1">
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
                        <th class="text-center">ID Supplier</th>
                        <th class="text-center">Nama Supplier</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Telpon</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // if (is_array($data)) {
                    //     $no = 0;
                    //     foreach ($data as $row) {
                    //         $no++; ?>
                            <tr>
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
                                    <a class="fa fa-trash" href="#" ></a>                              
                                </td>

                            </tr>
            
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end tabel -->

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-users"></span>&nbsp&nbspForm Supplier</h5>
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
                                    <input type="text" class="form-control" id="id_toko" name="idToko" placeholder="ID Toko">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Supplier</label>
                                    <input type="text" class="form-control" id="id_supplier" name="idSupplier" placeholder="ID Supplier">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Nama Supplier</label>
                                    <input type="password" class="form-control" id="nama_supplier" name="namaSupplier" placeholder="Nama Supplier">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ID Supplier">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Telephone</label>
                                    <input type="password" class="form-control" id="telp" name="telp" placeholder="No Telephone">
                                </div>

                            </div>
                        </div>

                        <!-- Keaktifan Supplier -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                <label for="exampleInputAktif1">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">--Pilih--</option>
                                    <option value="A">Aktif</option>
                                    <option value="T">Tidak Aktif</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal registrasi</label>
                                    <input type="date" class="form-control" id="reg_date" name="reg_date" placeholder="Tanggal Registrasi">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal Experied</label>
                                    <input type="date" class="form-control" id="experied" name="experied" placeholder="Experied">
                                </div>

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
<!-- End Modal1 -->

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-edit"></span>&nbsp&nbspEdit Form Supplier</h5>
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
                                    <input type="text" class="form-control" id="id_toko" name="idToko" placeholder="ID Toko">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Supplier</label>
                                    <input type="text" class="form-control" id="id_supplier" name="idSupplier" placeholder="ID Supplier">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Nama Supplier</label>
                                    <input type="password" class="form-control" id="nama_supplier" name="namaSupplier" placeholder="Nama Supplier">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ID Supplier">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Telephone</label>
                                    <input type="password" class="form-control" id="telp" name="telp" placeholder="No Telephone">
                                </div>

                            </div>
                        </div>

                        <!-- Keaktifan Supplier -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                <label for="exampleInputAktif1">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">--Pilih--</option>
                                    <option value="A">Aktif</option>
                                    <option value="T">Tidak Aktif</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal registrasi</label>
                                    <input type="date" class="form-control" id="reg_date" name="reg_date" placeholder="Tanggal Registrasi">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal Experied</label>
                                    <input type="date" class="form-control" id="experied" name="experied" placeholder="Experied">
                                </div>

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
<!-- End Modal1 -->