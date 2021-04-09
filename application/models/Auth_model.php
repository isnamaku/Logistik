<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public  function ambil($data)
    {
        $this->db->insert('admin', $data);
    }

    public  function ambil_Anggota($data)
    {
        $this->db->insert('anggota', $data);
    }

    public function tampilAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }


 public function updateStatusAnggota($id)
    {
        $this->db
            ->set('active', '1')
            ->where('id', $id)
            ->update('anggota');
    }

    public function ambilAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function updateProfil($id)
    {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'email'    => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );

        $this->db
            ->where('id', $id)
            ->update('anggota', $data);
    }

    public function ambilAnggotaById($id)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('anggota')->result_array();
    }

    public function hapusAnggota($id)
    {
        $this->db
            ->where('id', $id)
            ->delete('anggota');
    }

    //Profil Admin
    public function ambilAdminById($id)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
        return $this->db->get('admin')->result_array();
    }

public function updateProfilAdmin($id)
    {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'email'    => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );

        $this->db
            ->where('id', $id)
            ->update('admin', $data);
    }
}