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


        // return $this->db
        // ->select('*')
        // ->where('id_transaksi_masuk', $id)
        // ->get('transaksi_masuk')
        // ->result_array();
    }

    
}