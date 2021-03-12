<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index(){
        if (logged_in()){
            $data['judul'] = "Index";
            $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('anggota/template/header' , $data);
            $this->load->view('anggota/index');
            $this->load->view('anggota/template/footer');
        }
        else {
            redirect('anggota');
        }
    }

    public function barang_masuk(){
        if (logged_in()){
        $data['judul'] = "Barang Masuk";
        $data['post'] = $this->Barang_model->ambilBarang();
        $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_masuk');
        $this->load->view('anggota/template/footer');
        }
        else{
            redirect('anggota');
        }
    }

    public function barang_keluar(){
        if (logged_in()){
        $data['judul'] = "Barang Keluar";
        $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_keluar');
        $this->load->view('anggota/template/footer');
        }
        else{
            redirect('anggota');
        }
    }


}
