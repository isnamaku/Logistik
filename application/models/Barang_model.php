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
 
        $this->db->join('pengirim', 'barang.id_barang = pengirim.id');
        $this->db->join('transaksi_masuk', 'barang.id_barang = transaksi_masuk.id_transaksi_masuk');
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
        $this->db->update('pengirim', $data3);
        $this->db->update('transaksi_masuk', $data2);
    }


    public function hapusBarangMasuk($id){
        $this->db
        ->where('id_transaksi_masuk', $id)
        ->delete('transaksi_masuk');
    }

    public function tambahBarangMasuk(){
        $data = array(
            'barcode'=> $this->input->post('barcode'),
            'nama_barang'=> $this->input->post('nama_barang'),
            'stock'=> $this->input->post('stock'),
            'satuan'=> $this->input->post('satuan'),
            'keterangan'=> $this->input->post('keterangan')
        );
        $this->db->insert('barang', $data);
                    
        // $data = $this->db->get_where('barang', array('id_barang' => $id));
       
        $data2 = array(
            'sumber'=> $this->input->post('sumber'),
            'sumber_2'=> $this->input->post('sumber_2'),
            'column'=> $this->input->post('column'),
            'kode'=> $this->input->post('kode')
        );
        $this->db->insert('pengirim', $data2);

        // $data2 = $this->db->get_where('barang', array('id' => $id), $limit, $offset);

        // $data1 =  $this->db->last_query();
        // $data1 =  $this->db->get_where('barang', array('id_barang' => $id));
        
        // $data3 =  $this->db->last_query();
        // $data3 =  $this->db->get_where('pengirim', array('id' => $id2));

        // $data4  = array(
        //     'id_pengirim'=> $this->db->last_query();,
        //     'id_barang'=> $id2
        // );
        // $this->db->insert('transaksi_masuk', $data3);
        // $data3 = get_where();

        $data3 = array(
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
           
        );
        $this->db->insert('transaksi_masuk', $data3);

    }
    
}