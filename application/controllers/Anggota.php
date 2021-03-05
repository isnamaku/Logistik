<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index(){
        $data['judul'] = "Index";
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/index');
        $this->load->view('anggota/template/footer');
    }
}
