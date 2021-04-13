<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    public function ambilBarang()
    {
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
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

    public function ambilBarangMasuk()
    {
        $this->db->select('*');
        $this->db->from('transaksi_masuk tm');
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query;
        } else {
            return false;
        }
        return $this->db->get('transaksi_masuk');
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

    public function countHargaBarangKeluar()
    {
        $this->db->select('*');
        $this->db->from('distribusi db');
        $this->db->join('barang b', 'db.id_barang=b.id_barang');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('distribusi')->result_array();
    }

    public function filterBarang ($tanggal_awal = null, $tanggal_akhir = null, $nama_barang = null){
    
        $data = array(
        'tanggal_awal'=> $this->input->post('tanggal_awal'),
        'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        'nama_barang' => $this->input->post('nama_barang'),

    );

        $this->db->select('*');
        $this->db->from('transaksi_masuk tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->where('tm.tanggal_masuk >=',$data['tanggal_awal']);
        $this->db->where('tm.tanggal_masuk <=',$data['tanggal_akhir']);
        $this->db->like('b.nama_barang',$data['nama_barang']);

        
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }

    
    public function updateBarang($id)
    {
        $data = array(
            'nama_barang'     => $this->input->post('nama_barang'),
            'barcode'    => $this->input->post('barcode'),
            'stock'      => $this->input->post('stock'),
            'harga' => $this->input->post('harga'),
            'satuan' => $this->input->post('satuan'),
            'keterangan' => $this->input->post('keterangan')

        );
 
        $data2 = array(
            'tanggal_masuk'     => $this->input->post('tanggal_masuk')
        );

        $last_row = $this->db->select('id_barang')->where('id_transaksi_masuk', $id)->get('transaksi_masuk')->row();

        $this->db->where('id_barang', $last_row->id_barang);
        $this->db->update('barang', $data);
        $this->db->update('transaksi_masuk', $data2);
       
    }


    public function hapusBarangMasuk($id)
    {
        $this->db->where('id_transaksi_masuk', $id);
        $this->db->delete('transaksi_masuk');
    }

    public function hapusBarang($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
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

        $data3 = array(
            'id_barang' => $last_row->id_barang,
            'tanggal_masuk' => $this->input->post('tanggal_masuk')
        );
        $this->db->insert('transaksi_masuk', $data3);
    }


    public function ambilBarangKeluar()
    {
        $this->db->select('*');
        $this->db->from('distribusi');
        $this->db->join('penerima', 'distribusi.id_penerima = penerima.id_penerima');
        $this->db->join('barang', 'distribusi.id_barang = barang.id_barang');
        $this->db->order_by('id_distribusi', "asc");
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

    public function ambilBarangKeluar2()
    {
        $this->db->select('*');
        $this->db->from('distribusi');
        $this->db->join('penerima', 'distribusi.id_penerima = penerima.id_penerima');
        $this->db->join('barang', 'distribusi.id_barang = barang.id_barang');

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query;
        } else {
            return false;
        }
        return $this->db->get('distribusi');
    }

    public function hapusBarangKeluar($id){
        $id_barang = $this->db->select('id_barang')->where('id_distribusi', $id)->get('distribusi')->row();
        $barang = $this->db->select('*')->where('id_barang =',$id_barang->id_barang)->get('barang')->row();
        $jumlah_keluar = $this->db->select('jumlah_keluar')->where('id_distribusi', $id)->get('distribusi')->row();
        $stock = ((int)$barang->stock) + ((int)$jumlah_keluar->jumlah_keluar);
        $this->db
        ->set('stock', $stock)
        ->where('id_barang', $barang->id_barang)
        ->update('barang');

        $this->db
        ->where('id_distribusi', $id)
        ->delete('distribusi');

    }


public function updateBarangKeluar($id)
    {
        $data = array(
            'nama_barang'     => $this->input->post('nama_barang'),
            'barcode'    => $this->input->post('barcode')
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
        $this->db->where('id_penerima', $last_row3->id_penerima);
        $this->db->update('penerima', $data3);
        $this->db->where('id_distribusi', $id);
        $this->db->update('distribusi', $data4);
    }


public function tambahBarangKeluar()
    {
        $barcode  = $this->input->post('barcode');
        $barang = $this->db->select('*')->where('barcode =',$barcode)->get('barang')->row();
 
        $data = array(
            'nama_penerima'      => $this->input->post('nama_penerima'),
            'jabatan_penerima'      => $this->input->post('jabatan_penerima'),
            'instansi_penerima'      => $this->input->post('instansi_penerima')
        );
        $this->db->insert('penerima', $data);
        $last_row = $this->db->select('id_penerima')->order_by('id_penerima', "desc")->limit(1)->get('penerima')->row();
 
        $data2 = array(
            'id_barang' => $barang->id_barang,
            'id_penerima' => $last_row->id_penerima,
            'tanggal_keluar'     => $this->input->post('tanggal_keluar'),
            'jumlah_keluar' => $this->input->post('jumlah_keluar'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->insert('distribusi', $data2);
        
        //Update stock
        $stock = (int)$barang->stock- ((int)$data2['jumlah_keluar']);
        $this->db
        ->set('stock', $stock)
        ->where('id_barang', $barang->id_barang)
        ->update('barang');
    }

    public function tambahBarangKeluarOtomatis()
    {
        $penerima = $this->input->post('nama');
        $nip_penerima = $this->input->post('nip_penerima');

        $cek_penerima = $this->db->select('nama_penerima')->where('nama_penerima =', $penerima)->get('penerima')->row();

        if ($cek_penerima < '1') {
            $data = array(
                'id_penerima' => '',
                'nama_penerima' => $this->input->post('nama'),
                'nip_penerima' => $this->input->post('nip'),
                'jabatan_penerima' => $this->input->post('jabatan'),
                'instansi_penerima' => $this->input->post('instansi'),
                'telp_penerima' => $this->input->post('telepon')
            );
            $this->db->insert('penerima', $data);
            $last_row = $this->db->select('id_penerima')->order_by('id_penerima', "desc")->limit(1)->get('penerima')->row();

            $barcode = $this->input->post('barcode');

            $jumlahKeluar = $this->input->post('jumlah_keluar[]');

            for ($i = 0; $i < count($jumlahKeluar); $i++) {
                $barang = $this->db->select('*')->where('barcode =', $barcode[$i])->get('barang')->row();
                $data3 = array(
                    'id_distribusi' => '',
                    'tanggal_keluar' => $this->input->post('tanggal_BA'),
                    'jumlah_keluar' => $jumlahKeluar[$i],
                    'id_penerima' => $last_row->id_penerima,
                    'id_barang' => $barang->id_barang,
                    'satuan' => $barang->satuan
                );

                //update stock
                $stock = (int)$barang->stock - ((int)$jumlahKeluar[$i]);
                $this->db
                    ->set('stock', $stock)
                    ->where('id_barang', $barang->id_barang)
                    ->update('barang');

                $this->db->insert('distribusi', $data3);
            }
        } else {
            $nama_penerima = $this->db->select('*')->where('nama_penerima =', $penerima)->get('penerima')->row();

            $barcode = $this->input->post('barcode');

            $jumlahKeluar = $this->input->post('jumlah_keluar[]');

            for ($i = 0; $i < count($jumlahKeluar); $i++) {
                $barang = $this->db->select('*')->where('barcode =', $barcode[$i])->get('barang')->row();
                $nama_penerima = $this->db->select('*')->where('nama_penerima', $penerima)->get('penerima')->row();

                $data3 = array(
                    'id_distribusi' => '',
                    'tanggal_keluar' => $this->input->post('tanggal_BA'),
                    'jumlah_keluar' => $jumlahKeluar[$i],
                    'id_penerima' => $nama_penerima->id_penerima,
                    'id_barang' => $barang->id_barang,
                    'satuan' => $barang->satuan
                );

                //update stock
                $stock = (int)$barang->stock - ((int)$jumlahKeluar[$i]);
                $this->db
                    ->set('stock', $stock)
                    ->where('id_barang', $barang->id_barang)
                    ->update('barang');

                $this->db->insert('distribusi', $data3);
            }
        }
    }

    public function filterBarangKeluar ($tanggal_awal = null, $tanggal_akhir = null, $nama_barang = null){
    
        $data = array(
        'tanggal_awal'=> $this->input->post('tanggal_awal'),
        'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        'nama_barang' => $this->input->post('nama_barang'),

    );

        $this->db->select('*');
        $this->db->from('distribusi tm'); 
        $this->db->join('barang b', 'tm.id_barang=b.id_barang');
        $this->db->join('penerima p', 'tm.id_penerima=p.id_penerima');  
        $this->db->where('tm.tanggal_keluar >=',$data['tanggal_awal']);
        $this->db->where('tm.tanggal_keluar <=',$data['tanggal_akhir']);
        $this->db->like('b.nama_barang',$data['nama_barang']);
  

        
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

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

    public function ambilPihakPertama()
    {
        return $this->db->get('pihak_pertama')->result_array();
    }

    public function updatePihakPertama()
    {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'NIP'    => $this->input->post('NIP'),
            'jabatan'      => $this->input->post('jabatan'),
            'alamat'   => $this->input->post('alamat'),
            'telepon'      => $this->input->post('telepon')
        );

        $this->db
            ->where('id_pihak_pertama', '1')
            ->update('pihak_pertama', $data);
    }

    
    
}