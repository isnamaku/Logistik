<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    public function ambilBarang()
    {
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('pengirim p', 'tm.id_pengirim=p.id');  
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
        $this->db->join('pengirim p', 'tm.id_pengirim=p.id');  
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

    public function updateBarang($id){
        //barang
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'barcode' => $this->input->post('barcode'),
            'stock' => $this->input->post('stock')
          );
          $this->db->join('barang b', 'tm.id_barang=b.id_barang');
          $this->db->update('barang', $data);
          return $this->db->get('barang')->result_array();

        //pengirim
        //   $data2 = array(
        //     'stock' => $this->input->post('stock'),
        //     'sumber' => $this->input->post('sumber'),
        //     'sumber_2' => $this->input->post('sumber_2')
        //   )
        //transaksii masuk
        
    //     $this->db->set($data);
    //     $this->db->where('barang.id_barang', 'transaksi_masuk'.$id);
    //     $this->db->where('pengirim.id', 'transaksi_masuk'.$id);
    //     $this->db->update('transaksi_masuk', $data);


    }

    public function hapusBarangMasuk($id){
        $this->db
        ->where('id_transaksi_masuk', $id)
        ->delete('transaksi_masuk');
    }

    
}