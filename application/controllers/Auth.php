<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        $this->load->helper('url');
    }
    public function login()
    {
        $data['session'] = 'Admin';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/login',$data);
            $this->load->view('auth/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

            if ($admin) {
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'email' => $admin['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/index');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah!</div>');
                redirect('Auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar!</div>');
            redirect('Auth/login');
            }
        }
    }

    public function register()
    {
        $data['session'] = 'Admin';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'min_length' => 'Password too short!',
            'matches' => 'Password dont match!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/register');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->load->model('Auth_model');
            $this->Auth_model->ambil($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun Anda telah terdaftar. Silahkan masuk!
            </div>');
            redirect('Auth/register');
        }
    }



// Anggota

public function login_Anggota()
    {   
        $data['session'] = 'Anggota';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/login',$data);
            $this->load->view('auth/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $anggota = $this->db->get_where('anggota', ['email' => $email])->row_array();

            if ($anggota) {
                if (password_verify($password, $anggota['password'])) {
                    $data = [
                        'email' => $anggota['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/index');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah!</div>');
                redirect('Auth/login_Anggota');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar!</div>');
            redirect('Auth/login_Anggota');
            }
        }
    }

    public function register_Anggota()
    {
        $data['session'] = 'Anggota';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'min_length' => 'Password too short!',
            'matches' => 'Password dont match!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/register',$data);
            $this->load->view('auth/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->load->model('Auth_model');
            $this->Auth_model->ambil_Anggota($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun Anda telah terdaftar. Silahkan masuk!
            </div>');
            redirect('Auth/login_Anggota');
        }
    }


}

