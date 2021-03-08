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

    public function tambah_barang_masuk(){
        $data['judul'] = "Tambah Barang";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/tambah_barang_masuk');
    }

    public function tambah_barang_keluar(){
        $data['judul'] = "Tambah Barang";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/tambah_barang_keluar');
    }

    public function edit_barang_masuk(){
        $data['judul'] = "Edit Barang";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/edit_barang_masuk');
    }

    public function edit_barang_keluar(){
        $data['judul'] = "Barang Keluar";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/edit_barang_keluar');
    }

    public function info_barang_masuk(){
        $data['judul'] = "Info Barang";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/info_barang_masuk');
    }

    public function info_barang_keluar(){
        $data['judul'] = "Info Barang";
        $this->load->view('admin/template/header_data', $data);
        $this->load->view('admin/info_barang_keluar');
    }



}
