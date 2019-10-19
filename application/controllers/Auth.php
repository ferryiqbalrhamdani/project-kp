<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Login';

        $this->User_model->setrules_login();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            // validasi success
            $this->_login();
        }
    }

    private function _login()
    {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nip' => $user['nip'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 3) {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">NIP anda tidak aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">NIP belum di registrasi!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['title'] = 'Registration';

        $this->User_model->setrules_registration();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $this->User_model->tambahDataUser();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Akun berhasil terdaftar.</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kamu berhasil logout!</div>');
        redirect('auth');
    }
}
