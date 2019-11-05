<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function user_pengguna()
    {
        $data['title'] = 'Daftar User';
        $data['users'] = $this->User_model->getAllUser();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-pengguna', $data);
        $this->load->view('templates/footer', $data);
    }

    public function users()
    {
        $data['title'] = 'Data User';
        $data['users'] = $this->User_model->urutNIP();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data-user', $data);
        $this->load->view('templates/footer', $data);
    }

    public function is_active()
    {
        $data['title'] = 'Data User';
        $data['users'] = $this->User_model->getAllUser();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data-user-tidak-aktif', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pesan($id)
    {
        $data['title'] = 'Pesan';
        $data['users'] = $this->User_model->getAllUser();
        $data['pesan'] = $this->User_model->getUserById($id);
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pesan-user', $data);
        $this->load->view('templates/footer', $data);
    }
}
