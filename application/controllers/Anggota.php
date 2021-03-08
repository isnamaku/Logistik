<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index(){
        $data['judul'] = "Index";
        $this->load->view('anggota/template/header' , $data);
        $this->load->view('anggota/index');
        $this->load->view('anggota/template/footer');
    }

    public function barang_masuk(){
        $data['judul'] = "Barang Masuk";
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_masuk');
        $this->load->view('anggota/template/footer');
    }

    public function barang_keluar(){
        $data['judul'] = "Barang Keluar";
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_keluar');
        $this->load->view('anggota/template/footer');
    }
}
