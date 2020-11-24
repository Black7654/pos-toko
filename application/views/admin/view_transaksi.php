<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-sync-alt"></span>&nbspTransaksi</h1>
</div>
<form>
    <!-- row -->
    <div class="row">

        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputPassword1">ID Transaksi:</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kode Barang</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Barang" readonly="readonly" id="id_jamaah" name="id_jamaah">
                            <input type="hidden" name="" id="">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-jamaah"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=" col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Barang</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Qty</label>
                        <input type="number" class="form-control" id="" name="" placeholder="Masukkan">
                    </div>
                    <button type="button" class="btn btn-success" style="width: 100%;">Add</button>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                Total Harga:</div><br><br>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">Rp.215.000</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Diskon</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>D4342322</td>
                                    <td>Kopi</td>
                                    <td>2500</td>
                                    <td>2</td>
                                    <td>500</td>
                                    <td>4500</td>
                                    <td>
                                        <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2">Ubah</a>
                                        &nbsp||&nbsp
                                        <a class="fa fa-trash" href="#">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">subtotal:</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Diskon</label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Total Semua</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <br><br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Uang:</label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kembalian</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">

                    <button type="button" class="btn btn-warning" style="width: 100%;">Batal</button>
                    <br><br>
                    <button type="button" class="btn btn-success" style="width: 100%;">Simpan</button>

                </div>
            </div>
        </div>

    </div>
</form>