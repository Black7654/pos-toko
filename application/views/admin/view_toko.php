<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-store"></span>&nbspToko</h1>
</div>
<?php if ($this->session->flashdata('SUCCESS')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        <?= $this->session->flashdata('SUCCESS') ?>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('DANGER')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        <?= $this->session->flashdata('DANGER') ?>
    </div>
<?php } ?>
<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-success">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Toko

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
                        <!-- <th class="text-center">Alamat</th> -->
                        <!-- <th class="text-center">No KTP</th> -->
                        <!-- <th class="text-center">Kota/Kab</th>
                        <th class="text-center">Provinsi</th> -->
                        <!-- <th class="text-center">Foto Profile</th> -->
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
                                <!-- <td class="text-center"><?php echo $row->alamat; ?></td> -->
                                <!-- <td class="text-center"><?php echo $row->no_ktp; ?></td> -->
                                <!-- <td class="text-center"><?php echo $row->kota_kab; ?></td>
                                <td class="text-center"><?php echo $row->provinsi; ?></td> -->
                                <!-- <td class="text-center"><img src="<?php echo base_url() . 'upload/foto/' . $row->foto_profil; ?>" width="80px" height="60px"></td> -->
                                <!-- <td class="text-center"><?php echo $row->reg_date; ?></td>
                                <td class="text-center"><?php echo $row->exp_date; ?></td> -->
                                <td class="text-center">

                                    <!-- <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2" onclick="edit('<?php echo $row->id; ?>')"></a> -->
                                    <a class="btn btn-success" href="<?php echo base_url(); ?>toko/aktifasi/<?php echo $row->idToko; ?>" onclick="return confirm('Yakin Akan Mengaktifkan Akun Ini Kembali?')"><i class="fa fa-check"></i></a>
                                    &nbsp||&nbsp
                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>toko/delete/<?php echo $row->idToko; ?> " onclick="return confirm('Yakin Akan Menghapus?')"><i class="fa fa-trash"></i></a>

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




<script src="<?php echo base_url() . 'assets/'; ?>toko/formtoko.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<!-- <script type="text/javascript">
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
</script> -->