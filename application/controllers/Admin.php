<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Barang_model');
    }

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
            $data['post'] = $this->Barang_model->ambilBarang();

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

    public function edit_barang_masuk($id){
        if (logged_in()){
            $data['judul'] = "Edit Barang";
            $data['post'] = $this->Barang_model->ambilBarangById($id);

            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/edit_barang_masuk', $data);
        }
        else {
            redirect('Beranda');
        }
    }

    public function update_barang_masuk($id){
        $this->Barang_model->updateBarang($id);
        echo "sampai sini";
        // redirect(base_url() . "admin");

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

    public function info_barang_masuk($id){
        if (logged_in()){
            $data['judul'] = "Info Barang";
            $data['post'] = $this->Barang_model->ambilBarangById($id);

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
