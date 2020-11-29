<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("LoginModel");
    }
    
    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function cek() { 
		$email=$this->input->post('email',TRUE);
		$password=$this->input->post('password',TRUE);
		
		$cek=$this->LoginModel->cek($email,$password);
			if($cek==TRUE) {
			$data=array('email'=>$email,'logged_in'=>TRUE );
			$this->session->set_userdata($data);
			// var_dump($this->session->userdata());
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
        $this->load->view('login/register.php');
    }
}