<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-list"></span>&nbspOpname</h1>
</div>

<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="h4 mb-0 font-weight-bold text-primary">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Opname
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
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Toko</th>
                        <th class="text-center">Kode Barang</th>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">ID Suplier</th>
                        <th class="text-center">ID Rak</th>
                        <th class="text-center">Tanggal Barang</th>
                        <th class="text-center">Stock Toko</th>
                        <th class="text-center">Stock Gudang</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">ID User</th>
                        <th class="text-center">Aksi</th>
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
                                <td class="text-center">
                                    <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2"></a>
                                    ||
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
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-th-list"></span>&nbsp&nbspForm Opname</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- content modal -->

                <form action="#" enctype="multipart/form-data" method="POST">
                    <div class="container">
                       
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" placeholder="ID">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Toko</label>
                                    <input type="text" class="form-control" id="id_toko" name="id_toko" placeholder="ID Toko">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="exampleInputUsername1">Kode Barang</label>
                                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
                                </div>

                                <div class="col-md-8">
                                    <label for="exampleInputUsername1">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Suplier</label>
                                    <input type="text" class="form-control" id="idSup" name="idSup" placeholder="ID Suplier">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">ID Rak Barang</label>
                                    <input type="text" class="form-control" id="idRak" name="idRak" placeholder="ID Rak Barang">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                            <div class="col-md">
                                <label for="exampleInputUsername1">Tanggal Barang</label>
                                <input type="date" id="tgl" class="form-control">
                                </div>
                            </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Stock Toko</label>
                                    <input type="text" class="form-control" id="stok_toko" name="stok_toko" placeholder="Stock Toko">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputUsername1">Stock Gudang</label>
                                    <input type="text" class="form-control" id="stok_gudang" name="stok_gudang" placeholder="Stock Gudang">
                                </div>
                            </div>
                        </div>
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
                <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-edit"></span>&nbsp&nbspEdit Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="edit_admin">
                <!-- content modal -->

            </div>
        </div>
    </div>
</div>

