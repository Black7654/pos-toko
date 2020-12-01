<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-sync-alt"></span>&nbspTransaksi</h1>
</div>
<form>
    <!-- row -->
    <div class="row">

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kode Barang</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Barang" readonly="readonly" id="id_jamaah" name="id_jamaah">
                            <input type="hidden" name="" id="">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search"></i> Klik Untuk Cari</button>
                            </span>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Nama Barang</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Barang:</label>
                        <input type="number" class="form-control" id="" name="" placeholder="Masukkan">
                    </div>
                    <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                Harga Barang:</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.215.000</div>
                    <br>
                    <button type="button" class="btn btn-success" style="width: 100%;"><i class="fa fa-shopping-cart"></i>&nbspMasukkan keranjang</button>
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
                                        <button class="btn btn-default"><a href="#" class="fa fa-edit" data-toggle="modal" data-target="#exampleModal2"></a></button>
                                        &nbsp||&nbsp
                                        <button class="btn btn-default"><a href="#" class="fa fa-trash"></a></button>
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
                        <label for="exampleInputPassword1">Total:</label>
                        <input type="text" class="form-control" id="" name="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Diskon</label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Total Semua:</label>
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

                    <button type="button" class="btn btn-success" style="width: 100%;">Bayar Sekarang</button>
                    <br><br>
                    <button type="button" class="btn btn-warning" style="width: 100%;">Batal</button>
                    
                    
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pencarian Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Kode Barang</th>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">Harga Barang</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                     <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Masukkan Barang</button>                 
                                </td>

                            </tr>
            
                </tbody>
            </table>            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>