<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    public function ambilBarang()
    {
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('pengirim p', 'tm.id=p.id');  
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
        return $this->db->get('transaksi_masuk')->result_array();
    }

    public function ambilBarangById($id)
    {	
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('pengirim p', 'tm.id=p.id');  
        $this->db->where('id_transaksi_masuk', $id);
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
        return $this->db->get('transaksi_masuk')->result_array();

    }

    public function filterBarang ($tanggal_awal = null, $tanggal_akhir = null, $nama_barang = null, $sumber = null){
       

    $data = array(
        'tanggal_awal'=> $this->input->post('tanggal_awal'),
        'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        'nama_barang' => $this->input->post('nama_barang'),
        'sumber' => $this->input->post('sumber')

    );

        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('pengirim p', 'tm.id=p.id');  
        $this->db->where('tm.tanggal_masuk >=',$data['tanggal_awal']);
        $this->db->where('tm.tanggal_masuk <=',$data['tanggal_akhir']);
        // $this->db->where('b.nama_barang',$data['nama_barang']);
        // $this->db->where('p.sumber_2',$data['sumber']);
        // $this->db->where('p.sumber',$data['sumber']);

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }

    

    public function updateBarang($id)
    {
        $data = array(
            'nama_barang'     => $this->input->post('nama_barang'),
            'barcode'    => $this->input->post('barcode'),
            'stock'      => $this->input->post('stock')
        );
 
        $data2 = array(
            'tanggal_masuk'     => $this->input->post('tanggal_masuk')
        );
 
        $data3 = array(
            'sumber'      => $this->input->post('sumber'),
            'sumber_2'      => $this->input->post('sumber_2')
        );
 
        // $this->db->select('*');
        // $this->db->from('transaksi_masuk tm'); 
        // $this->db->join('pengirim', 'transaksi_masuk.id= pengirim.id');
        // $this->db->join('barang b', 'b.id_barang = tm.id_barang');
        // $this->db->where('tm.id_transaksi_masuk', $id);
        // $last = $this->db->select('id_barang');
        $last_row = $this->db->select('id_barang')->where('id_transaksi_masuk', $id)->get('transaksi_masuk')->row();
     
        // $this->db->select('*');
        // $this->db->from('barang');
        $this->db->where('id_barang', $last_row->id_barang);
        $this->db->update('barang', $data);
       
        // $query = $this->db->get();
        // $result = $query->result_array();
        // return $result;
        // $this->db->update('pengirim', $data3);
        // $this->db->update('transaksi_masuk', $data2);

        //$last_row = $this->db->select('id_barang')->order_by('id_barang', "desc")->limit(1)->get('barang')->row();
    }


    public function hapusBarangMasuk($id){
        $this->db
        ->where('id_transaksi_masuk', $id)
        ->delete('transaksi_masuk');
    }

    public function tambahBarangMasuk()
    {
        $data = array(
            'barcode' => $this->input->post('barcode'),
            'nama_barang' => $this->input->post('nama_barang'),
            'stock' => $this->input->post('stock'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->insert('barang', $data);
        $last_row = $this->db->select('id_barang')->order_by('id_barang', "desc")->limit(1)->get('barang')->row();

        $data2 = array(
            'sumber' => $this->input->post('sumber'),
            'sumber_2' => $this->input->post('sumber_2'),
            'column' => $this->input->post('column'),
            'kode_sumber' => $this->input->post('kode')
        );
        $this->db->insert('pengirim', $data2);
        $last_row2 = $this->db->select('id')->order_by('id', "desc")->limit(1)->get('pengirim')->row();

        $data3 = array(
            'id_barang' => $last_row->id_barang,
            'id' => $last_row2->id,
            'tanggal_masuk' => $this->input->post('tanggal_masuk')
        );
        $this->db->insert('transaksi_masuk', $data3);
    }
    
}