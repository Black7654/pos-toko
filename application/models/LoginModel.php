<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function cek($email, $pass)
	{ //fungsi Cek email apakah ada dalam tabel admin
		$this->db->where('email', $email);
		$this->db->where('password', md5($pass));
		//$this->db->where('is_aktif', 'yes');
		$data = $this->db->get('tb_toko');
		if ($data->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function cekAdmin($email, $pass)
	{ //fungsi Cek email apakah ada dalam tabel admin
		$this->db->where('email', $email);
		$this->db->where('password', md5($pass));
		//$this->db->where('is_aktif', 'yes');
		$data = $this->db->get('tb_admin');
		if ($data->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function updateIsAktif($idToko)
	{
		$data = array(
			'is_aktif' => 'no'
		);
		$this->db->where('idToko', $idToko);
		$this->db->update('tb_toko', $data);
	}

	function updateIsLogin($idToko)
	{
		$data = array(
			'is_login' => 'yes',
			'last_login' => date('Y-m-d')
		);
		$this->db->where('idToko', $idToko);
		$this->db->update('tb_toko', $data);
	}

	//mencari id user dari email dan password

	function GetIdToko($email, $pass)
	{
		$data = $this->db->where('email', $email);
		$data = $this->db->where('password', md5($pass));
		$data = $this->db->get('tb_toko');
		return $data;
	}
	function GetIdaktif($id)
	{
		$data = $this->db->where('idToko', $id);
		$data = $this->db->get('tb_toko');
		return $data;
	}
	function GetIdAdmin($email, $pass)
	{
		$data = $this->db->where('email', $email);
		$data = $this->db->where('password', md5($pass));
		$data = $this->db->get('tb_admin');
		return $data;
	}
}
