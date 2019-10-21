<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
    }

    public function index()
    {
        $data['title'] = 'Menu Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function jenis_barang()
    {
        $data['title'] = 'Jenis Barang';
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jenis-barang/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add_jenis_barang()
    {
        $data['title'] = 'Tambah Jenis Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->Model_barang->setrules_jenisbarang();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jenis-barang/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->tambahDataJenisBarang();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/jenis_barang');
        }
    }

    public function ap()
    {
        $data['title'] = 'Menu Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/ap', $data);
        $this->load->view('templates/footer', $data);
    }
}
