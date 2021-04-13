<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Auth_model');
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
                $data['post2'] = $this->Barang_model->countHargaBarangKeluar();

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

    //Profil Anggota
    public function profil($id)
    {
        if (logged_in()) {
            $data['judul'] = "Profil";
            $data['anggota'] = $this->Auth_model->ambilAnggotaById($id);

            $this->load->view('Anggota/template/header_data', $data);
            $this->load->view('Anggota/profil_anggota', $data);
        } else {
            redirect('Beranda');
        }
    }

    public function update_profil($id)
    {
        if (logged_in()) {
            $this->Auth_model->updateProfil($id);

            redirect(base_url() . "Anggota/index");
        } else {
            redirect('Beranda');
        }
    }

    public function berita_acara(){

        $data['judul'] = "Berita Acara";
        $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('anggota/template/header', $data);
            $this->load->view('anggota/berita_acara',$data);
            $this->load->view('anggota/template/footer' );
    }

    public function a_print()
    { 
        $data['anggota'] = $this->db->get_where('anggota', ['email' => $this->session->userdata('email')])->row_array();
        $dataBarcode = [];
        $barcode = $this->input->post('barcode[]');
        for ($i=0; $i < count($barcode); $i++) { 
            $getBarcode = $this->Barang_model->detailBarangById($barcode[$i]);
            array_push($dataBarcode, $getBarcode);
           
        }
        $this->Barang_model->tambahBarangKeluarAnggotaOtomatis();
            $data = array(
                'pihak_pertama' => $this->Barang_model->ambilPihakPertama(),
                'tanggal_BA' => $this->input->post('tanggal_BA'),
                'nama' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'jabatan' => $this->input->post('jabatan'),
                'instansi' => $this->input->post('instansi'),
                'telepon' => $this->input->post('telepon'),
                'barcode' => $dataBarcode,
                'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            );
    
       $this->load->view('anggota/print_BA', $data);
       
    }



}
