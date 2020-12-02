<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("RakModel");
        $this->load->library('template');
    }
    public function index()
    {
        $data['data'] = $this->RakModel->getData('tb_rak');
        $this->template->display_admin('admin/view_rak.php', $data);
    }
    public function edit()
    {
        $id = $this->input->post('id', true);
        $data = $this->RakModel->getById($id);
        $result = $data->row();
        if (!(strcmp($result->aktif, "yes"))) {
            $aktif = "selected";
            $tidak = "";
        } else {
            $aktif = "";
            $tidak = "selected";
        }

        echo '
        <!-- content modal -->
                <form action="<?php echo base_url(); ?>rak/simpan" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <div class="row">
                    
                        <div class="col-md-6">
                            <label for="exampleInputNamaKelas1">ID Toko</label>
                            <input type="text" class="form-control" id="idToko" name="idToko" value=' . $result->idToko. ' /readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInputNamaKelas1">ID Rak</label>
                            <input type="text" class="form-control" id="id" name="id" value=' . $result->idKat. ' /readonly>
                        </div>

                    </div>
                </div>
                    <div class="form-group">
                        <label for="exampleInputNamaKelas1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value=' . $result->nama. '>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAktif1">Status</label>
                        <select class="form-control" name="aktif" id="aktif">
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
        $id = 'ID' . random_string('numeric', 12);  //name=""
        $idToko = 'TOKO' . random_string('numeric', 12);  //name=""
        $idRak = 'RAK' . random_string('numeric', 12);  //name=""
        $nama = $this->input->post('nama');
        $aktif = $this->input->post('aktif');

        $data = array(
            'id' => $id, //Database
            'idToko' => $idToko, 
            'idRak' => $idRak, 
            'nama' => $nama,
            'aktif' => $aktif

        );

        $simpan = $this->RakModel->simpanData('tb_rak', $data);
        redirect('Rak');
        return $simpan;
    }

    public function delete($id)
    {
        $deleteKategori = $this->RakModel->deleteData('tb_rak', array('id' => $id));
        redirect('Rak');
        return $delete;
    }
}
