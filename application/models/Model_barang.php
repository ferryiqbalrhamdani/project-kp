<?php

class Model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
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
        $this->form_validation->set_rules('sn', 'SN', 'required|trim|is_unique[barang.mac]', [
            'required' => 'MAC harus diisi!',
            'is_unique' => 'MAC sudah ada!'

        ]);
    }



    public function setrules_merkbarang()
    {
        // set rules
        $this->form_validation->set_rules('nama_merk', 'Nama Merk', 'required|trim', [
            'required' => 'Nama Merk harus diisi!'
        ]);

        $this->form_validation->set_rules('merk_id', 'Jenis Barang', 'required|trim', [
            'required' => 'Jenis Barang harus diisi!'
        ]);
    }
}
