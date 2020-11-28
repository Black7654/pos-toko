<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model("Model_admin");
    }
    
    public function index()
    {
        $this->load->view('login/index.php');
    }

    public function register()
    {
        $this->load->view('login/register.php');
    }
}