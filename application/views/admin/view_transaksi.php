<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-sync-alt"></span>&nbspTransaksi</h1>
</div>

<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="h4 mb-0 font-weight-bold text-primary">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Transaksi
            <a href="#" type="button" class="btn btn-primary btn-icon-split float-right" data-toggle="modal" data-target="#exampleModal1">
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
                        <th class="text-center">ID Toko</th>
                        <th class="text-center">ID Transaksi</th>
                        <th class="text-center">ID User</th>
                        <th class="text-center">Tanggal Transaksi</th>
                        <th class="text-center">Waktu Transaksi</th>
                        <th class="text-center">Diskon</th>
                        <th class="text-center">Valid</th>
                        <th class="text-center">Aksi</th>
                        
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-sync-alt"></span>&nbsp&nbspForm Transaksi</h5>
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
                                    <label for="exampleInputUsername1">ID Toko</label>
                                    <input type="text" class="form-control" id="idToko" name="idToko" placeholder="ID Toko">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Transaksi</label>
                                    <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" placeholder="ID Toko">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID User</label>
                                    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="E-Mail">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Password">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                            <div class="col-md">
                                <div class="md-form md-outline input-with-post-icon timepicker" twelvehour="true">
                                <label for="exampleInputUsername1">Waktu Transaksi</label>
                                <input type="time" id="light-version-examples" class="form-control" placeholder="Select time">
                                </div>
                            </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Diskon</label>
                                    <input type="text" class="form-control" id="diskon" name="diskon" placeholder="Diskon">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Valid</label>
                                    <input type="text" class="form-control" id="valid" name="valid" placeholder="Valid">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end content modal -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-edit"></span>&nbsp&nbspEdit Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="edit_admin">
                <!-- content modal -->

                <form action="#" enctype="multipart/form-data" method="POST">
                    <input type="hidden" class="form-control" id="id_admin" name="id_admin">
                    
                    <div class="container">
                       
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Toko</label>
                                    <input type="text" class="form-control" id="idToko" name="idToko" placeholder="ID Toko">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Transaksi</label>
                                    <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" placeholder="ID Toko">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID User</label>
                                    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="E-Mail">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Password">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                            <div class="col-md">
                                <div class="md-form md-outline input-with-post-icon timepicker" twelvehour="true">
                                <label for="exampleInputUsername1">Waktu Transaksi</label>
                                <input type="time" id="light-version-examples" class="form-control" placeholder="Select time">
                                </div>
                            </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Diskon</label>
                                    <input type="text" class="form-control" id="diskon" name="diskon" placeholder="Diskon">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Valid</label>
                                    <input type="text" class="form-control" id="valid" name="valid" placeholder="Valid">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end content modal -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
            </div>
            </form>

            </div>
        </div>
    </div>

