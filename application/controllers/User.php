<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_barang');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['users'] = $this->User_model->jumlahUser();
        $data['barang'] = $this->Model_barang->getAllJenisBarang();
        $data['ap'] = $this->Model_barang->jumlahAP();
        $data['jumlah_barang'] = $this->Model_barang->jumlahBarang();
        $data['jumlahBarangRusak'] = $this->Model_barang->jumlahBarangRusak();
        $data['jumlahBarangReady'] = $this->Model_barang->jumlahBarangReady();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Data User';
        $data['users'] = $this->User_model->getUserById($id);
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->User_model->getUserById($id);

        $this->User_model->setrules_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->editUser($id);

            $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data user berhasil diubah.</div>');
            redirect('admin/users');
        }
    }

    public function editUser($id)
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->User_model->getUserById($id);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];

        $this->User_model->setrules_editUser();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit-user', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->editDataUser($id);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="max-width: 800px;">
            Profile berhasil diubah.</div>');
            redirect('user/profile');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak sama!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('nip', $this->session->userdata('nip'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil di ubah!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
