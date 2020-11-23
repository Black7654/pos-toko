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
        $data['provinsi'] = $this->TokoModel->getData('tb_provinsi');
        $data['kota'] = $this->TokoModel->getData('tb_kabupaten');
        $data['data'] = $this->TokoModel->getData('tb_toko');
        $this->template->display_admin('admin/view_toko.php', $data);
    }

    public function _uploadImg($idToko, $jenis, $image)
    {
        $config['upload_path'] = './upload/' . $jenis . '/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5120;
        $config['overwrite'] = true;
        $config['file_name'] = date('dmYHis') . '_' . $idToko;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($image)) {
            return false;
            // var_dump($this->upload->display_errors());
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function _delImg($id_user, $jenis)
    {
        if ($jenis == 'tb_user') { //hapus data file di tb_user
            $userdata = $this->TokoModel->get_where($jenis, array('id_user' => $id_user))->row();
            $imagektp = $userdata->ktp;
            $imagefoto = $userdata->foto;
            if (($imagektp != null) && ($imagefoto != null)) {
                unlink('./upload/foto/' . $imagefoto);
                return true;
            } else {
                return false;
            }
        }
    }


    public function simpan()
    {
        $id =  $this->input->post('id');
        $idToko = 'TKO' . random_string('numeric', 12);
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
        // $foto_profil = $this->input->post('foto_profil');
        $reg_date = $this->input->post('reg_date');
        $exp_date = $this->input->post('exp_date');

        $uploadFoto = $this->_uploadImg($idToko, 'foto', 'foto_profil');
        if ($uploadFoto) {
            // var_dump($uploadFoto);
            $filefoto = $uploadFoto;
            $data = array(
                'id' => $id, //database
                'idToko' => $idToko,
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
                'foto_profil' => $filefoto,
                'reg_date' => $reg_date,
                'exp_date' => $exp_date
            );
            //var_dump($data);
            $simpan = $this->TokoModel->simpanData('tb_toko', $data);
            redirect('toko');
            return $simpan;
            // echo "berhasil";
        } else { //jika gagal upload
            $this->session->set_flashdata('message', 'Format Gambar Foto hanya boleh JPG, JPEG, PNG atau Ukuran file dari 5 MB!');
            redirect('toko');
            // echo "gagal";
        }
    }

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

        $edit = $this->TokoModel->updateData('tb_toko', $data);
        redirect('toko');
        return $edit;
    }

    public function edit($data)
    {

        $this->template->display_admin('admin/view_edit_admin.php', $data);
        $id = $this->input->post('id', true);
        $data = $this->TokoModel->getById($id);
        $result = $data->row();

        echo '
        <form action="<?php echo base_url(); ?>admin/simpan" enctype="multipart/form-data" method="POST">
        <input type="hidden" class="form-control" id="id_admin" name="id_admin" value=' . $result->id . '>

                        <div class="col-md">
                            <input type="hidden" class="form-control" id="idToko" name="idToko" value=' . $result->idToko . '>
                        </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">E - Mail</label>
                        <input type="email" class="form-control" id="email" name="email" value=' . $result->email . '>
                    </div>
    
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value=' . $result->password . '>
                    </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                  <div class="col-md-6">
                        <label for="exampleInputPassword1">Nama Toko</label>
                        <input type="text" class="form-control" id="nama_toko" name="nama_toko" value=' . $result->nama_toko . '>
                    </div>

                  <div class="col-md-6">
                        <label for="exampleInputPassword1">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik"  value=' . $result->pemilik . ' >
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
                        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value=' . $result->tmp_lahir . ' >
                    </div>

                    <div class="col-md-8">
                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value=' . $result->tgl_lahir . ' >
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md">
                        <label for="exampleInputPassword1">No Telephone</label>
                        <input type="text" class="form-control" id="telp" name="telp" value=' . $result->telp . ' >
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md">
                        <label for="exampleInputPassword1">Alamat</label>
                        <textarea type="" class="form-control" id="alamat" name="alamat" value=' . $result->alamat . ' placeholder="Masukkan Alamat"></textarea>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">NO KTP</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" value=' . $result->no_ktp . ' placeholder="Masukkan No KTP">
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Kota/Kab</label>
                        <input type="text" class="form-control" id="kota_kab" name="kota_kab" value=' . $result->kota_kab . ' placeholder="Masukkan Kota/Kab">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value=' . $result->provinsi . ' placeholder="Masukkan Provinsi">
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Foto Profile</label>
                        <input type="text" class="form-control" id="foto_profil" name="foto_profil" value=' . $result->foto_profil . ' placeholder="Masukkan Foto Profile">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Tanggal Registrasi</label>
                        <input type="date" class="form-control" id="reg_date" name="reg_date" value=' . $result->reg_date . ' placeholder="Masukkan Tanggal Registrasi">
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Tanggal Kadaluarsa</label>
                        <input type="date" class="form-control" id="exp_date" name="exp_date" value=' . $result->exp_date . ' placeholder="Masukkan Tanggal Kadaluarsa">
                    </div>
                    </div>
                    </div>

        <!-- end content modal -->

<div class="modal-footer">
<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>&nbspSimpan</button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspClose</button>
</div>
</form>
        ';
    }


    public function delete($id)
    {
        $delete = $this->TokoModel->deleteData('tb_toko', array('id' => $id));
        redirect('toko');
        return $delete;
    }
}
