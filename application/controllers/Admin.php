<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        $data['judul'] = "Index";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }

    public function barang_masuk(){
        $data['judul'] = "Barang Masuk";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/barang_masuk');
        $this->load->view('admin/template/footer');
    }

    public function barang_keluar(){
        $data['judul'] = "Barang Keluar";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/barang_keluar');
        $this->load->view('admin/template/footer');
    }

}
