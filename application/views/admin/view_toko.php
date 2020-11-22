<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-store"></span>&nbspToko</h1>
</div>

<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-success">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Toko
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
                        <th class="text-center">ID Toko</th>
                        <th class="text-center">E - mail</th>
                        <th class="text-center">Nama Toko</th>
                        <th class="text-center">Pemilik</th>
                        <!-- <th class="text-center">Gender</th>
                        <th class="text-center">Tempat Lahir</th>
                        <th class="text-center">Tanggal Lahir</th> -->
                        <th class="text-center">No Telephone</th>
                        <th class="text-center">Alamat</th>
                        <!-- <th class="text-center">No KTP</th> -->
                        <th class="text-center">Kota/Kab</th>
                        <th class="text-center">Provinsi</th>
                        <th class="text-center">Foto Profile</th>
                        <!-- <th class="text-center">Tanggal Registrasi</th>
                        <th class="text-center">Tanggal Kadaluarsa</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($data)) {
                        $no = 0;
                        foreach ($data as $row) {
                            $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo $no; ?></td>
                                <td class="text-center"><?php echo $row->idToko; ?></td>
                                <td class="text-center"><?php echo $row->email; ?></td>
                                <td class="text-center"><?php echo $row->nama_toko; ?></td>
                                <td class="text-center"><?php echo $row->pemilik; ?></td>
                                <!-- <td class="text-center"><?php echo $row->gender; ?></td>
                                <td class="text-center"><?php echo $row->tmp_lahir; ?></td>
                                <td class="text-center"><?php echo $row->tgl_lahir; ?></td> -->
                                <td class="text-center"><?php echo $row->telp; ?></td>
                                <td class="text-center"><?php echo $row->alamat; ?></td>
                                <!-- <td class="text-center"><?php echo $row->no_ktp; ?></td> -->
                                <td class="text-center"><?php echo $row->kota_kab; ?></td>
                                <td class="text-center"><?php echo $row->provinsi; ?></td>
                                <td class="text-center"><img src="<?php echo base_url() . 'upload/foto/' . $row->foto_profil; ?>" width="80px" height="60px"></td>
                                <!-- <td class="text-center"><?php echo $row->reg_date; ?></td>
                                <td class="text-center"><?php echo $row->exp_date; ?></td> -->
                                <td class="text-center">

                                    <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2" onclick="edit('<?php echo $row->id; ?>')"></a>
                                    &nbsp||&nbsp
                                    <a class="fa fa-trash" href="<?php echo base_url(); ?>toko/delete/<?php echo $row->idToko; ?>"></a>

                                </td>

                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end tabel -->

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

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-edit"></span>&nbsp&nbspEdit Data Toko</h5>
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
<script src="<?php echo base_url() . 'assets/'; ?>toko/formtoko.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>@endsection
<script type="text/javascript">
    function edit(id) {
        var id = id;
        $.ajax({
            type: 'POST',
            data: 'id=' + id,
            url: '<?php echo base_url(); ?>toko/edit/',
            success: function(data) {
                $('#edit_admin').html(data);
            }
        });
    }
</script>