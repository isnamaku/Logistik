<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        if (logged_in()) {
            $anggota['post'] = $this->Barang_model->ambilAnggota();

            $anggota = $this->db->select('active')->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
            if ($anggota['active'] == 1) {
                $data['judul'] = "Index";
                $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
                $data['total_barangmasuk'] = $this->Barang_model->countAllBarangMasuk();
                $data['total_barangkeluar'] = $this->Barang_model->countAllBarangKeluar();
                $data['total_anggota'] = $this->Barang_model->countAnggota();
                $data['post'] = $this->Barang_model->countHarga();

                $this->load->view('anggota/template/header', $data);
                $this->load->view('anggota/index');
                $this->load->view('anggota/template/footer');
            } else {
                redirect('auth/login_anggota');
            }
        } else {
            redirect('anggota');
        }
    }


    public function barang_masuk(){
        if (logged_in()){
        $data['judul'] = "Barang Masuk";
        $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST['submit'])) {
            // $data['tanggal_awal'] = $this->input->post('tanggal_awal');
            // $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
            // echo $data['tanggal_awal'];
            // $data['post'] = $this->Barang_model->filterBarang($data['tanggal_awal'],$data['tanggal_akhir']);
            $data['post'] = $this->Barang_model->filterBarang();
        } else {
            $data['post'] = $this->Barang_model-> ambilBarang();
        }

        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_masuk',$data);
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

        if (isset($_POST['submit'])) {
            // $data['tanggal_awal'] = $this->input->post('tanggal_awal');
            // $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
            // echo $data['tanggal_awal'];
            // $data['post'] = $this->Barang_model->filterBarang($data['tanggal_awal'],$data['tanggal_akhir']);
            $data['post'] = $this->Barang_model->filterBarangKeluar();
        } else {
            $data['post'] = $this->Barang_model-> ambilBarangKeluar();
        }

        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/barang_keluar',$data);
        $this->load->view('anggota/template/footer');
        }
        else{
            redirect('anggota');
        }
    }

    public function print()
    {  $data['judul'] = "Berita Acara";
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['distribusi'] = $this->Barang_model->ambilBarangKeluar();
    
        $this->load->view('admin/print_BA', $data);
       
    }




}
