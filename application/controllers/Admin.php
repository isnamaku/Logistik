<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        if (logged_in()){
            $data['judul'] = "Index";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/index');
            $this->load->view('admin/template/footer');
        }
        else {
            redirect('Beranda');
        }
    }

    public function barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Barang Masuk";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/barang_masuk');
            $this->load->view('admin/template/footer');
        }
        else {
            redirect('Beranda');
        }
    }

    public function barang_keluar(){
        if (logged_in()){
            $data['judul'] = "Barang Keluar";
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/barang_keluar');
            $this->load->view('admin/template/footer');
        }
        else {
            redirect('Beranda');
        }
    }

    public function tambah_barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Tambah Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/tambah_barang_masuk');
        }
        else {
            redirect('Beranda');
        }
    }

    public function tambah_barang_keluar(){
        if (logged_in()){
            $data['judul'] = "Tambah Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/tambah_barang_keluar');
        }
        else {
            redirect('Beranda');
        }

    }

    public function edit_barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Edit Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/edit_barang_masuk');
        }
        else {
            redirect('Beranda');
        }
    }

    public function edit_barang_keluar(){
        if (logged_in()){
            $data['judul'] = "Barang Keluar";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/edit_barang_keluar');
        }
        else {
            redirect('Beranda');
        }
    }

    public function info_barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Info Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/info_barang_masuk');
        }
        else {
            redirect('Beranda');
        }
    }

    public function info_barang_keluar(){
        if (logged_in()){
            $data['judul'] = "Info Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/info_barang_keluar');
        }
        else {
            redirect('Beranda');
        }
    }



}
