<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
        $this->load->library('template');
    }
    public function index()
    {
        $data['data'] = $this->KategoriModel->getData('tb_kategori');
        $this->template->display_admin('admin/view_kategori.php', $data);
    }
    public function edit()
    {
        $id = $this->input->post('id', true);
        $data = $this->KategoriModel->getById($id);
        $result = $data->row();
        if (!(strcmp($result->is_aktif, "yes"))) {
            $aktif = "selected";
            $tidak = "";
        } else {
            $aktif = "";
            $tidak = "selected";
        }

        echo '
        <!-- content modal -->
                <form action="kategori/update" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <div class="row">
                    
                        <div class="col-md-6">
                            <label for="exampleInputNamaKelas1">ID Toko</label>
                            <input type="text" class="form-control" id="idToko" name="idToko" value=' . $result->idToko . ' /readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInputNamaKelas1">ID Kategori</label>
                            <input type="text" class="form-control" id="idKat" name="idKat" value=' . $result->idKat . ' /readonly>
                        </div>

                    </div>
                </div>
                    <div class="form-group">
                        <label for="exampleInputNamaKelas1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value=' . $result->nama . '>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAktif1">Status</label>
                        <select class="form-control" name="is_aktif" id="is_aktif">
                            <option value="yes" ' . $aktif . '>Yes</option>
                            <option value="no" ' . $tidak . '>No</option>
                        </select>
                    </div>

                    <!-- end content modal -->
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
            </div>
            </form>
            ';
    }
    public function simpan()
    {
        $idToko = 'TOKO' . random_string('numeric', 12);  //name=""
        $idKat = 'KAT' . random_string('numeric', 12);  //name=""
        $nama = $this->input->post('nama');
        $is_aktif = $this->input->post('is_aktif');

        $data = array(
            'idToko' => $idToko,
            'idKat' => $idKat,
            'nama' => $nama,
            'is_aktif' => $is_aktif

        );

        $simpan = $this->KategoriModel->simpanData('tb_kategori', $data);
        redirect('kategori');
        return $simpan;
    }
    public function update()
    {
        $idToko = $this->input->post('idToko');
        $idKat = $this->input->post('idKat');
        $nama = $this->input->post('nama');
        $is_aktif = $this->input->post('is_aktif');
        $data = array(
            'idToko' => $idToko,
            'idKat' => $idKat,
            'nama' => $nama,
            'is_aktif' => $is_aktif
        );
        $update = $this->KategoriModel->updateData('tb_kategori', $data, array('idToko' => $idToko));
        redirect('kategori');
        return $update;
    }

    public function delete($id)
    {
        $deleteKategori = $this->KategoriModel->deleteData('tb_kategori', array('id' => $id));
        redirect('kategori');
        return $deleteKategori;
    }
}
