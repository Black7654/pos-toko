<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("TokoModel");
        $this->load->library('template');
    }
    public function index()
    {
        $data['data'] = $this->TokoModel->getData('tb_toko');
        $this->template->display_admin('admin/view_toko.php', $data);
    }
    public function edit()
    {

        // $this->template->display_toko('toko/view_edit_toko.php', $data);
        $id = $this->input->post('id', true);
        $data = $this->TokoModel->getById($id);
        $result = $data->row();
        echo '
        <form action="<?php echo base_url(); ?>toko/simpan" enctype="multipart/form-data" method="POST">
        <input type="hidden" class="form-control" id="id" name="id" value=' . $result->id . '>

        <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input type="text" class="form-control" id="idtoko" name="idtoko" placeholder="Masukkan Username" value=' . $result->idtoko . ' required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Password" value=' . $result->email . ' required>
        </div>

        <!-- end content modal -->

<div class="modal-footer">
<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbspSimpan</button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
</div>
</form>
        ';
    }
    
    public function simpan()
    {
        $id = $this->input->post('id'); //name=""
        $idtoko = $this->input->post('idtoko');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama_toko = $this->input->post('nama_toko');
        $pemilik = $this->input->post('pemilik');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $no_ktp = $this->input->post('no_ktp');
        $kota_kab = $this->input->post('kota_kab');
        $provinsi = $this->input->post('provinsi');
        $foto_profil = $this->input->post('foto_profil');
        
        $data = array(
            'id' => $id, //database
            'idtoko' => $idtoko,
            'email' => $email,
            'password' => $password,
            'nama_toko' => $nama_toko,
            'pemilik' => $pemilik,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'telp' => $telp,
            'alamat' => $alamat,
            'no_ktp' => $no_ktp,
            'kota_kab' => $kota_kab,
            'provinsi' => $provinsi,
            'foto_profil' => $foto_profil,


        );

        $simpan = $this->TokoModel->simpanData('tb_toko', $data);
        redirect('toko');
        return $simpan;
    }

    // Edit Data
    public function update()
    {
        $id = $this->input->post('id'); //name=""
        $idtoko = $this->input->post('idtoko');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama_toko = $this->input->post('nama_toko');
        $pemilik = $this->input->post('pemilik');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $no_ktp = $this->input->post('no_ktp');
        $kota_kab = $this->input->post('kota_kab');
        $provinsi = $this->input->post('provinsi');
        $foto_profil = $this->input->post('foto_profil');
        $reg_date = $this->input->post('reg_date');
        $exp_date = $this->input->post('exp_date');

        $data = array(
            'id' => $id, //database
            'idtoko' => $idtoko,
            'email' => $email,
            'password' => $password,
            'nama_toko' => $nama_toko,
            'pemilik' => $pemilik,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'telp' => $telp,
            'alamat' => $alamat,
            'no_ktp' => $no_ktp,
            'kota_kab' => $kota_kab,
            'provinsi' => $provinsi,
            'foto_profil' => $foto_profil,
            'reg_date' => $reg_date,
            'exp_date' => $exp_date,
        );

        $update = $this->TokoModel->updateData('tb_toko', $data, array('id' => $id));
        redirect('toko');
        return $update;
    }
    // End Edit Data

    public function delete($id)
    {
        $deleteAdmin = $this->TokoModel->deleteData('tb_toko', array('id' => $id));
        redirect('toko');
        return $delete;
    }
}
