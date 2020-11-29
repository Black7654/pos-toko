<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct() {
			 parent:: __construct();
		}		

	public function cek($email,$pass) { //fungsi Cek email apakah ada dalam tabel admin
		 $this->db->where('email',$email);
		 $this->db->where('password',md5($pass));
		 $this->db->where('is_aktif','yes');
		 $data=$this->db->get('tb_toko');
		 if ($data->num_rows() > 0) {
		 	return TRUE;		
		 	}
		 else {
			return FALSE;	 	
		 	}
		}
}