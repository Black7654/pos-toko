<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailTransaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model("Model_admin");
    }
    public function index()
    {
        $this->template->display_admin('view_detailtransaksi.php');
    }
}