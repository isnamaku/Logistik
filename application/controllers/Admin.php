<?php
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as WriterXlsx;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Auth_model');
    }

    public function index(){
        if (logged_in()){
            $data['judul'] = "Index";
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['total_barangmasuk'] = $this->Barang_model->countAllBarangMasuk();
            $data['total_barangkeluar'] = $this->Barang_model->countAllBarangKeluar();
            $data['total_anggota'] = $this->Barang_model->countAnggota();
            $data['post'] = $this->Barang_model->countHarga();
            // $data['post2'] = $this->Barang_model->countTotalHargaDistribusi();
            
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/index');
            $this->load->view('admin/template/footer');
        }
        else {
            redirect('Beranda');
        }
    }

    // Barang Masuk
    public function barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Barang Masuk";
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['post'] = $this->Barang_model->ambilBarang();

            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/barang_masuk', $data);
            $this->load->view('admin/template/footer');
        }
        else {
            redirect('Beranda');
        }
    }

    public function tambah_barang_masuk(){
        if (logged_in()){
            $data['judul'] = "Tambah Barang";

            $last_row_barcode = $this->db->select('barcode')->order_by('barcode', "desc")->limit(1)->get('barang')->row();

            $noUrut = (int)substr($last_row_barcode->barcode, 2, 6);
            $noUrut++;

            $str = '51';
            $newKode = $str . sprintf('%04s', $noUrut);

            $this->load->view('admin/template/header_data', $data, $newKode);
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

    public function info_barang_masuk($id){
        if (logged_in()){
            $data['judul'] = "Info Barang";
            $data['post'] = $this->Barang_model->ambilBarangById($id);
            $last_row_barcode = $this->db->select('barcode')->order_by('barcode', "desc")->limit(1)->get('barang')->row();

            $noUrut = (int)substr($last_row_barcode->barcode, 2, 6);
            $noUrut++;

            $str = '51';
            $newKode = $str . sprintf('%04s', $noUrut);

            $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();

            $this->load->view('admin/template/header_data', $data. $generator);
            $this->load->view('admin/info_barang_masuk');
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

     // Barang Keluar

     
    public function barang_keluar()
    {
        if (logged_in()) {
            $data['judul'] = "Barang Keluar";
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['post'] = $this->Barang_model->ambilBarangKeluar();
 
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/barang_keluar');
            $this->load->view('admin/template/footer');
        } else {
            redirect('Beranda');
        }
    }

    public function tambah_barang_keluar()
    {
        if (logged_in()) {
            $data['judul'] = "Tambah Barang";
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/tambah_barang_keluar');
        } else {
            redirect('Beranda');
        }
    }

    public function proses_tambah_barang_keluar()
    {
        $this->Barang_model->tambahBarangKeluar();
        redirect(base_url() . "admin/barang_keluar");
    }


    public function update_barang_keluar($id)
    {
 
        if (logged_in()) {
            $this->Barang_model->updateBarangKeluar($id);
 
            redirect(base_url() . "admin/barang_keluar");
        } else {
            redirect('Beranda');
        }
    }

    public function info_barang_keluar($id)
    {
        if (logged_in()) {
            $data['judul'] = "Info Barang";
            $data['post'] = $this->Barang_model->ambilBarangKeluarById($id);
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/info_barang_keluar', $data);
        } else {
            redirect('Beranda');
        }
    }

    public function edit_barang_keluar($id){
        if (logged_in()){
            $data['judul'] = "Barang Keluar";
            $data['post'] = $this->Barang_model->ambilBarangKeluarById($id);
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/edit_barang_keluar');
        }
        else {
            redirect('Beranda');
        }
    }


    // Berita Acara

    public function berita_acara(){
        if (logged_in()){
            $data['judul'] = "Berita Acara";
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/berita_acara',$data);
            $this->load->view('admin/template/footer' );
        }
        else {
            redirect('Beranda');
        }
    }

 // Print Beirta Acara
    public function a_print()
    { 
        $data['judul'] = "Berita Acara";
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $dataBarcode = [];
        $barcode = $this->input->post('barcode[]');
        for ($i=0; $i < count($barcode); $i++) { 
            $getBarcode = $this->Barang_model->detailBarangById($barcode[$i]);
            array_push($dataBarcode, $getBarcode);
           
        }
        $this->Barang_model->tambahBarangKeluarOtomatis();
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
            
       $this->load->view('admin/print_BA', $data);
       
    }

    //Detail Barang BA

	public function detail_barang($barcode)
	{

       $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['post'] = $this->Barang_model->detailBarangById($barcode);

		$data['judul'] = 'Detail Barang';

        $this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita_acara', $data);
		$this->load->view('admin/template/footer');	
	}

    public function getDataBarcode()
    {
        $barcode = $this->input->post('barcode');

        if ($barcode != null) {
            $data= $this->Barang_model->detailBarangById($barcode);
            echo json_encode($data);
        }else {
            echo json_encode('kosong');
        }
    }


    public function aktivasi_anggota()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        if (logged_in()){
        $data['judul'] = "Aktivasi Anggota";
        $data['post'] = $this->Barang_model->ambilAnggota();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/aktivasi_anggota');
        $this->load->view('admin/template/footer' );
    }else{
        redirect('Beranda');
    }
    }

    public function update_status_anggota($id)
    {

        if (logged_in()) {
            $this->Auth_model->updateStatusAnggota($id);

            redirect(base_url() . "admin/aktivasi_anggota");
        } else {
            redirect('Beranda');
        }
    }

    public function pihak_pertama()
    {
        if (logged_in()) {
            $data['judul'] = "Pihak Pertama";
            $data['post'] = $this->Barang_model->ambilPihakPertama();
            $this->load->view('admin/template/header_data', $data);
            $this->load->view('admin/pihak_pertama', $data);
        } else {
            redirect('Beranda');
        }
    }

    public function updatePihakPertama()
    {
        $this->Barang_model->updatePihakPertama();
        redirect(base_url() . "admin/pihak_pertama");
    }
    // Excel
    public function export_transaksi_masuk()
    {
        $data['transaksi_masuk'] = $this->Barang_model->ambilBarang();
        $this->load->view('admin/export_excel', $data);
    }

    public function export_distribusi()
    {
        $data['distribusi'] = $this->Barang_model->ambilBarangKeluar();
        $this->load->view('admin/export_excel_distribusi', $data);
    }

    public function proses_export_transaksi_masuk()
    {
        $transaksi_masuk = $this->Barang_model->ambilBarangMasuk()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'tanggal_masuk')
            ->setCellValue('C1', 'barcode')
            ->setCellValue('D1', 'nama_barang')
            ->setCellValue('E1', 'stock')
            ->setCellValue('F1', 'satuan');

        $kolom = 2;
        $nomor = 1;
        if (isset($transaksi_masuk)) {
            foreach ($transaksi_masuk as $transaksi_masuk) {

                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, date('j F Y', strtotime($transaksi_masuk->tanggal_masuk)))
                    ->setCellValue('C' . $kolom, $transaksi_masuk->barcode)
                    ->setCellValue('D' . $kolom, $transaksi_masuk->nama_barang)
                    ->setCellValue('E' . $kolom, $transaksi_masuk->stock)
                    ->setCellValue('F' . $kolom, $transaksi_masuk->satuan);

                $kolom++;
                $nomor++;
            }
        }

        $writer = new WriterXlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Barang_Masuk_Logistik.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function proses_export_distribusi()
    {
        $distribusi = $this->Barang_model->ambilBarangKeluar2()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'tanggal_keluar')
            ->setCellValue('C1', 'sumber_2')
            ->setCellValue('D1', 'pengirim')
            ->setCellValue('E1', 'nama_penerima')
            ->setCellValue('F1', 'jabatan_penerima')
            ->setCellValue('G1', 'instansi_penerima')
            ->setCellValue('H1', 'barcode')
            ->setCellValue('I1', 'nama_barang')
            ->setCellValue('J1', 'jumlah_keluar')
            ->setCellValue('K1', 'satuan')
            ->setCellValue('L1', 'keterangan');;

        $kolom = 2;
        $nomor = 1;
        $pengirim = 'BPBD DIY';
        if (isset($distribusi)) {
            foreach ($distribusi as $distribusi) {

                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, date('j F Y', strtotime($distribusi->tanggal_keluar)))
                    ->setCellValue('C' . $kolom, $distribusi->sumber_2)
                    ->setCellValue('D' . $kolom, $pengirim)
                    ->setCellValue('E' . $kolom, $distribusi->nama_penerima)
                    ->setCellValue('F' . $kolom, $distribusi->jabatan_penerima)
                    ->setCellValue('G' . $kolom, $distribusi->instansi_penerima)
                    ->setCellValue('H' . $kolom, $distribusi->barcode)
                    ->setCellValue('I' . $kolom, $distribusi->nama_barang)
                    ->setCellValue('J' . $kolom, $distribusi->jumlah_keluar)
                    ->setCellValue('K' . $kolom, $distribusi->satuan)
                    ->setCellValue('L' . $kolom, $distribusi->keterangan);

                $kolom++;
                $nomor++;
            }
        }

        $writer = new WriterXlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Distribusi.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function print_barcode($id)
    {
        $data['post'] = $this->Barang_model->ambilBarangById($id);
        $last_row_barcode = $this->db->select('barcode')->order_by('barcode', "desc")->limit(1)->get('barang')->row();

        $noUrut = (int)substr($last_row_barcode->barcode, 2, 6);
        $noUrut++;

        $str = '51';
        $newKode = $str . sprintf('%04s', $noUrut);

        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();

        $this->load->view('admin/barcode', $data, $generator);
    }

}
