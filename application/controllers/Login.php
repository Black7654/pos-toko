<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("LoginModel");
        $this->load->model("TokoModel");
    }
    
    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function cek() { 
		$email=$this->input->post('email',TRUE);
		$password=$this->input->post('password',TRUE);
		
		$cek=$this->LoginModel->cek($email,$password);
			if($cek == TRUE) {
                   
			$data=array('email'=>$email,'logged_in'=>TRUE );
			$this->session->set_userdata($data);
			var_dump($this->session->userdata());
            redirect('dashboard');
            // var_dump('$data');
				// echo "bisa";
			} else {			
            redirect('login','refresh');	
            
				//  echo "gagal";
			}	
		
    }
    
    public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

    public function register()
    {
        $data['provinsi'] = $this->TokoModel->getData('tb_provinsi');
        $data['kota'] = $this->TokoModel->getData('tb_kabupaten');
        $this->load->view('login/register.php',$data);
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
            $enkripsi = md5($password);
            $data = array(
                'id' => $id, //database
                'idToko' => $idToko,
                'email' => $email,
                'password' => $enkripsi,
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
                'is_aktif' => 'no',
                'reg_date' => $reg_date,
                'exp_date' => $exp_date
            );
            //var_dump($data);
            $simpan = $this->TokoModel->simpanData('tb_toko', $data);
            $this->session->set_flashdata('SUCCESS', 'Pendaftaran Berhasil');
            redirect('login');
            return $simpan;
            // echo "berhasil";
        } else { //jika gagal upload
            $this->session->set_flashdata('SUCCESS', 'Pendaftaran Berhasil');
            redirect('login');
            // echo "gagal";
        }
    }
}