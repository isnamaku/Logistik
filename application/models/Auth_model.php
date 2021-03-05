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
}