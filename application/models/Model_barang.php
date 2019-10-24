<?php

class Model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }

    public function tambahDataAp()
    {
        $data = [
            'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
            'merk' => htmlspecialchars($this->input->post('merk', true)),
            'sn' => htmlspecialchars($this->input->post('sn', true)),
            'mac' => htmlspecialchars($this->input->post('mac', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('barang', $data);
    }

    // jenis barang
    public function setrules_jenisbarang()
    {
        // set rules
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim', [
            'required' => 'Nama Barang harus diisi!'
        ]);
    }

    public function getAllJenisBarang()
    {
        return $this->db->get('jenis_barang')->result_array();
    }

    public function tambahDataJenisBarang()
    {
        $data = [
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
            'date_created' => time()
        ];
        $this->db->insert('jenis_barang', $data);
    }
    //end jenis barang

    // merk barang
    public function getAllmerk()
    {
        return $this->db->get('merk_barang')->result_array();
    }

    public function setrules_ap()
    {
        // set rules
        $this->form_validation->set_rules('sn', 'SN', 'required|trim|is_unique[barang.sn]', [
            'required' => 'SN harus diisi!',
            'is_unique' => 'SN sudah ada!'

        ]);
        $this->form_validation->set_rules('mac', 'MAC', 'required|trim|is_unique[barang.mac]', [
            'required' => 'MAC harus diisi!',
            'is_unique' => 'MAC sudah ada!'

        ]);
        $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
            'required' => 'Merk Barang harus diisi!'

        ]);
    }

    public function tambahDataMerkBarang()
    {
        $data = [
            'nama_merk' => htmlspecialchars($this->input->post('nama_merk', true)),
            'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
            'date_created' => time()
        ];
        $this->db->insert('merk_barang', $data);
    }


    public function setrules_merkbarang()
    {
        // set rules
        $this->form_validation->set_rules('nama_merk', 'Nama Merk', 'required|trim', [
            'required' => 'Nama Merk harus diisi!'
        ]);
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required|trim', [
            'required' => 'Jenis Barang harus diisi!'
        ]);
    }
}
