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
        $this->db->like('b.nama_barang',$data['nama_barang']);
        $this->db->like('p.sumber',$data['sumber']);

        
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


    public function ambilBarangKeluar()
    {
        $this->db->select('*');
        $this->db->from('distribusi');
        $this->db->join('penerima', 'distribusi.id_penerima = penerima.id_penerima');
        $this->db->join('pengirim', 'distribusi.id = pengirim.id');
        $this->db->join('barang', 'distribusi.id_barang = barang.id_barang');
 
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('distribusi')->result_array();
    }


public function ambilBarangKeluarById($id)
    {
        $this->db->select('*');
        $this->db->from('distribusi');
        $this->db->join('penerima', 'distribusi.id_penerima = penerima.id_penerima');
        $this->db->join('pengirim', 'distribusi.id = pengirim.id');
        $this->db->join('barang', 'distribusi.id_barang = barang.id_barang');
        $this->db->where('id_distribusi', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('distribusi')->result_array();
    }


public function updateBarangKeluar($id)
    {
        $data = array(
            'nama_barang'     => $this->input->post('nama_barang'),
            'barcode'    => $this->input->post('barcode')
        );
 
        $data2 = array(
            'sumber_2'      => $this->input->post('sumber_2')
        );
 
        $data3 = array(
            'nama_penerima'      => $this->input->post('nama_penerima'),
            'jabatan_penerima'      => $this->input->post('jabatan_penerima'),
            'instansi_penerima'      => $this->input->post('instansi_penerima')
        );
 
        $data4 = array(
            'tanggal_keluar'     => $this->input->post('tanggal_keluar'),
            'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan')
        );
 
        $last_row = $this->db->select('id_barang')->where('id_distribusi', $id)->get('distribusi')->row();
        $last_row2 = $this->db->select('id')->where('id_distribusi', $id)->get('distribusi')->row();
        $last_row3 = $this->db->select('id_penerima')->where('id_distribusi', $id)->get('distribusi')->row();
 
        $this->db->where('id_barang', $last_row->id_barang);
        $this->db->update('barang', $data);
        $this->db->where('id', $last_row2->id);
        $this->db->update('pengirim', $data2);
        $this->db->where('id_penerima', $last_row3->id_penerima);
        $this->db->update('penerima', $data3);
        $this->db->where('id_distribusi', $id);
        $this->db->update('distribusi', $data4);
    }


public function tambahBarangKeluar()
    {
        $data = array(
            'nama_barang'     => $this->input->post('nama_barang'),
            'barcode'    => $this->input->post('barcode')
        );
        $this->db->insert('barang', $data);
        $last_row = $this->db->select('id_barang')->order_by('id_barang', "desc")->limit(1)->get('barang')->row();
 
        $data2 = array(
            'sumber_2'      => $this->input->post('sumber_2')
        );
        $this->db->insert('pengirim', $data2);
        $last_row2 = $this->db->select('id')->order_by('id', "desc")->limit(1)->get('pengirim')->row();
 
        $data3 = array(
            'nama_penerima'      => $this->input->post('nama_penerima'),
            'jabatan_penerima'      => $this->input->post('jabatan_penerima'),
            'instansi_penerima'      => $this->input->post('instansi_penerima')
        );
        $this->db->insert('penerima', $data3);
        $last_row3 = $this->db->select('id_penerima')->order_by('id_penerima', "desc")->limit(1)->get('penerima')->row();
 
        $data4 = array(
            'id_barang' => $last_row->id_barang,
            'id' => $last_row2->id,
            'id_penerima' => $last_row3->id_penerima,
            'tanggal_keluar'     => $this->input->post('tanggal_keluar'),
            'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->insert('distribusi', $data4);
    }

    public function detailBarangById($id)
    {	
        $this->db->select('*');
        $this->db->from('barang'); 
        $this->db->where('barcode', $id);
        $query = $this->db->get(); 
        $result = $query->result_array();
        return $result;


    }

    public function countAllBarangMasuk()
    {
        return $this->db->get('transaksi_masuk')->num_rows();
    }

    public function countAnggota()
    {
        return $this->db->get('anggota')->num_rows();
    }

    public function countHarga()
    {
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm');
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('pengirim p', 'tm.id=p.id');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('transaksi_masuk')->result_array();
    }

    public function countAllBarangKeluar()
    {
        return $this->db->get('distribusi')->num_rows();
    }

    public function ambilAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function updateAnggota($id)
    {
        $this->db
            ->set('active', '1')
            ->where('id', $id)
            ->update('anggota');
    }

    
    
}