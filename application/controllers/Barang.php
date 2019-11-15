<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
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

    // ========================================== jenis barang ==========================================
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

    public function jenisBarangDelete($id)
    {
        $this->Model_barang->hapusJenisBarang($id);
        $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data berhasil di hapus.</div>');
        redirect('barang/jenis_barang');
    }

    public function jenisBarangUpdate($id)
    {
        $data['title'] = 'Ubah Jenis Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jenis_barang'] = $this->Model_barang->getJeniBarangId($id);

        $this->Model_barang->setrules_jenisbarang();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jenis-barang/ubah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->ubahDataJenisBarang($id);

            $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data berhasil di ubah.</div>');
            redirect('barang/jenis_barang');
        }
    }

    public function add_jenis_barang()
    {
        $data['title'] = 'Jenis Barang';
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

            $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/jenis_barang');
        }
    }

    // ========================================== merk barang ==========================================
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
        $data['title'] = 'Merk Barang';
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

            $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/merk_barang');
        }
    }

    public function editMerk($id)
    {
        $data['title'] = 'Tambah Merk Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk'] = $this->Model_barang->getMerkById($id);

        $this->Model_barang->setrules_merkbarang();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('merk-barang/ubah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->ubahDataMerkBarang();

            $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data berhasil di ubah.</div>');
            redirect('barang/merk_barang');
        }
    }

    public function deleteMerk($id)
    {
        $this->Model_barang->hapusMerkBarang($id);
        $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data berhasil di hapus.</div>');
        redirect('barang/merk_barang');
    }

    // ========================================== ap ==========================================
    public function ap()
    {
        $data['title'] = 'Daftar Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->urutAp();

        // $data['ap'] = $this->Model_barang->get_ap_list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/ap/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_ap()
    {
        $data['title'] = 'Tambah Barang';
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerkAp();
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

    public function edit_ap($id)
    {
        $data['title'] = 'Daftar Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getApById($id);
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerkAp();
        $data['kondisi'] = ['Ready', 'Rusak'];

        $this->Model_barang->setrules_ap_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/ap/ubah-ap', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->editAp($id);

            $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data berhasil di ubah.</div>');
            redirect('barang/ap');
        }
    }

    public function hapus_ap($id)
    {
        $this->Model_barang->hapusAp($id);
        $this->session->set_flashdata('pesan', '<div class="mt-2 alert alert-success" role="alert">
            Data berhasil di hapus.</div>');
        redirect('barang/ap');
    }

    // ========================================== breket ==========================================
    public function breket()
    {
        $data['title'] = 'Daftar Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getAllBreket();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/breket/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_breket()
    {
        $data['title'] = 'Tambah Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getAllJenisBarangBreket();

        $this->Model_barang->setrules_breket();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/breket/tambah-breket', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->tambahDataBreket();

            $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/breket');
        }
    }

    public function edit_breket($id)
    {
        $data['title'] = 'Akses Point';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getbreketById($id);
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerkBreket();
        $data['kondisi'] = ['Ready', 'Rusak'];

        $this->Model_barang->setrules_breket_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/breket/ubah-breket', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->editbreket($id);

            $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data berhasil di ubah.</div>');
            redirect('barang/breket');
        }
    }

    public function hapus_breket($id)
    {
        $this->Model_barang->hapusBreket($id);
        $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data berhasil di hapus.</div>');
        redirect('barang/breket');
    }

    // ========================================== poe ==========================================
    public function poe()
    {
        $data['title'] = 'Daftar Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getAllPoe();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/poe/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_poe()
    {
        $data['title'] = 'Tambah Barang';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['merk_barang'] = $this->Model_barang->getAllMerkPoe();

        $this->Model_barang->setrules_poe();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/poe/tambah-poe', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->tambahDataPoe();

            $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data baru berhasil di tambahkan.</div>');
            redirect('barang/poe');
        }
    }

    public function edit_poe($id)
    {
        $data['title'] = 'Akses Point';
        $data['user'] = $this->db->get_where('user', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['barang'] = $this->Model_barang->getPoeById($id);
        $data['jenis_barang'] = $this->Model_barang->getAllJenisBarang();
        $data['merk_barang'] = $this->Model_barang->getAllmerkPoe();
        $data['kondisi'] = ['Ready', 'Rusak'];

        $this->Model_barang->setrules_poe_edit();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/poe/ubah-poe', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Model_barang->editPoe($id);

            $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data berhasil di ubah.</div>');
            redirect('barang/poe');
        }
    }

    public function hapus_poe($id)
    {
        $this->Model_barang->hapusPoe($id);
        $this->session->set_flashdata('pesan', '<div class="mt-3 alert alert-success" role="alert">
            Data berhasil di hapus.</div>');
        redirect('barang/poe');
    }
}
