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
        $data['title'] = 'Daftar Barang';
        $data['barang'] = $this->Model_barang->getAllJenisBarang();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Barang';
        $data['barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerk();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/tambah', $data);
        $this->load->view('templates/footer', $data);
    }

    //jenis barang
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

    // ap
    public function ap()
    {
        $data['title'] = 'Daftar Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getAllBarang();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/ap/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_ap()
    {
        $data['title'] = 'Akses Point';
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerk();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->Model_barang->setrules_ap();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/ap/tambah-ap', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->tambahDataAp();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/tambah_ap');
        }
    }

    // merk barang
    public function merk_barang()
    {
        $data['title'] = 'Merk Barang';
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerk();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('merk-barang/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add_merk_barang()
    {
        $data['title'] = 'Tambah Merk Barang';
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->Model_barang->setrules_merkbarang();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('merk-barang/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->tambahDataMerkBarang();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/merk_barang');
        }
    }
}
