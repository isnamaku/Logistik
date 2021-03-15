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
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
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
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
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
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
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

    public function proses_tambah_barang_masuk()
    {
        $this->Barang_model->tambahBarangMasuk();
        redirect(base_url() . "admin/barang_masuk");
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

        if (logged_in()){
            $this->Barang_model->updateBarang($id);
          
            redirect(base_url() . "admin/barang_masuk");
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

    public function hapus_barang_masuk($id)
    {
            if (logged_in()) {
            $data['judul'] = "Hapus Barang";
            $this->Barang_model->hapusBarangMasuk($id);
            redirect(base_url() . "admin/barang_masuk");
        }
        else {
            redirect('admin/barang_masuk');
        }
    }

    public function no_barang(){
        if (logged_in()) {
            $data['post'] = $this->Barang_model->ambilNoBarang();

            redirect(base_url() . "admin/tambah_barang_masuk");
        }
        else {
            redirect('admin/barang_masuk');
        }
    }




}
