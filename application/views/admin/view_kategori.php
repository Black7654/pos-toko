<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-tags"></span>&nbspKategori</h1>
</div>

<!-- ini tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-success">
            <span class="fa fa-file-alt"></span>&nbsp&nbspData Kategori
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
                        <th class="text-center">ID Kategori</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Aktif</th>
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
                                <td class="text-center"><?php echo $row->id; ?></td>
                                <td class="text-center"><?php echo $row->idToko; ?></td>
                                <td class="text-center"><?php echo $row->idKat; ?></td>
                                <td class="text-center"><?php echo $row->nama; ?></td>
                                <td class="text-center"><?php echo $row->aktif; ?></td>
                                <td class="text-center">
                                    <a class="fa fa-edit" href="" data-toggle="modal" data-target="#exampleModal2" onclick="edit('<?php echo $row->id; ?>')"></a>
                                    &nbsp||&nbsp
                                    <a class="fa fa-trash" href="<?php echo base_url(); ?>kategori/delete/<?php echo $row->id; ?>"></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-tags"></span>&nbsp&nbspForm Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- content modal -->
                <form action="<?php echo base_url(); ?>kategori/simpan" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <label for="exampleInputNamaKelas1">ID Toko</label>
                                <input type="text" class="form-control" id="idToko" name="idToko" value="" /readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="exampleInputNamaKelas1">ID Kategori</label>
                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $this->session->userData('id');?>" /readonly>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputNamaKelas1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAktif1">Status</label>
                        <select class="form-control" name="aktif" id="aktif">
                            <option value="">--Pilih--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-edit"></span>&nbsp&nbspForm Edit Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="edit_kategori">
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit(id) {
        var id = id;
        $.ajax({
            type: 'POST',
            data: 'id=' + id,
            url: '<?php echo base_url(); ?>kategori/edit',
            success: function(data) {
                $('#edit_kategori').html(data);
            }
        });
    }
</script>