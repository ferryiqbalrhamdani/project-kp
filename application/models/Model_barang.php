<?php

class Model_barang extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }



    // ======================================== Perhitungan ===========================================
    public function jumlahBarang()
    {
        $query = $this->db->get('barang');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahBarangRusak()
    {
        $query = $this->db->get_where('barang', ['status' => 'Rusak']);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahAP()
    {
        $query = $this->db->get_where('barang', ['id_barang' => 1]);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahPOE()
    {
        $query = $this->db->get_where('barang', ['id_barang' => 2]);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahRouter()
    {
        $query = $this->db->get_where('barang', ['id_barang' => 3]);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahBreket()
    {
        $query = $this->db->get_where('barang', ['id_barang' => 4]);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahBarangReady()
    {
        $query = $this->db->get_where('barang', ['status' => 'Ready']);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // ======================================== AP ===========================================

    public function urutAp()
    {
        $this->db->order_by('merk', 'ASC');
        $query = $this->db->get_where('barang', ['id_barang' => 1]);
        return $query->result_array();
    }

    public function getAllAP()
    {
        return $this->db->get_where('barang', ['id_barang' => 1])->result_array();
    }

    public function CariAP()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('sn', $cari);
        return $this->db->get_where('barang', ['id_barang' => 1])->result_array();
    }

    // function get_ap_list()
    // {
    //     $query = $this->db->get_where('barang', ['jenis_barang' => 'AP']);

    //     $config['total_rows'] = $this->jumlahAP(); //total row
    //     $config['per_page'] = 5;
    //     $config['uri_segment'] = 3;
    //     $config['num_links'] = 3;

    //     // Style Pagination
    //     // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
    //     $config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
    //     $config['full_tag_close']  = '</ul>';

    //     $config['first_link']      = 'First';
    //     $config['first_tag_open']  = '<li>';
    //     $config['first_tag_close'] = '</li>';

    //     $config['last_link']       = 'Last';
    //     $config['last_tag_open']   = '<li>';
    //     $config['last_tag_close']  = '</li>';

    //     $config['next_link']       = ' <i class="glyphicon glyphicon-menu-right"></i> ';
    //     $config['next_tag_open']   = '<li>';
    //     $config['next_tag_close']  = '</li>';

    //     $config['prev_link']       = ' <i class="glyphicon glyphicon-menu-left"></i> ';
    //     $config['prev_tag_open']   = '<li>';
    //     $config['prev_tag_close']  = '</li>';

    //     $config['cur_tag_open']    = '<li class="active"><a href="#">';
    //     $config['cur_tag_close']   = '</a></li>';

    //     $config['num_tag_open']    = '<li>';
    //     $config['num_tag_close']   = '</li>';
    //     // End style pagination

    //     $this->pagination->initialize($config); // Set konfigurasi paginationnya

    //     $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    //     $query .= " LIMIT " . $page . ", " . $config['per_page'];

    //     $data['limit'] = $config['per_page'];
    //     $data['total_rows'] = $config['total_rows'];
    //     $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
    //     $data['siswa'] = $this->db->query($query)->result();

    //     return $data;
    // }

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

    public function setrules_ap_edit()
    {
        // set rules
        $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
            'required' => 'Merk Barang harus diisi!'

        ]);
        $this->form_validation->set_rules('sn', 'SN', 'required|trim', [
            'required' => 'SN harus diisi!'

        ]);
        $this->form_validation->set_rules('mac', 'MAC', 'required|trim', [
            'required' => 'MAC harus diisi!'

        ]);
        $this->form_validation->set_rules('status', 'Status', 'required|trim', [
            'required' => 'status harus diisi!'

        ]);
    }

    public function getApById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function getAllmerkAp()
    {
        return $this->db->get_where('merk_barang', ['id_barang' => 1])->result_array();
    }

    public function hapusAp($id)
    {
        return $this->db->delete('barang', ['id' => $id]);
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
            'id_barang' => 1,
            'date_created' => time()
        ];
        $this->db->insert('barang', $data);
    }

    public function editAp()
    {
        $data = [
            'merk' => htmlspecialchars($this->input->post('merk', true)),
            'sn' => htmlspecialchars($this->input->post('sn', true)),
            'mac' => htmlspecialchars($this->input->post('mac', true)),
            'status' => htmlspecialchars($this->input->post('status', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }

    // =================================== Brekeet ===================================

    public function getAllBreket()
    {
        return $this->db->get_where('barang', ['id_barang' => 4])->result_array();
    }

    public function getAllJenisBarangBreket()
    {
        return $this->db->get_where('jenis_barang', ['id' => 4])->result_array();
    }

    // public function hapusBreket($id)
    // {
    //     return $this->db->delete('barang', ['id' => $id]);
    // }

    public function setrules_breket()
    {
        // set rules
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|numeric', [
            'required' => 'jumlah harus diisi!',
            'numeric' => 'Harus Berupa Angka'

        ]);
    }

    public function tambahDataBreket()
    {
        for($i=0; $i<$this->input->post('jumlah'); $i++) {
            $data = [
                'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
                'status' => 'Ready',
                'is_active' => 1,
                'id_barang' => 4,
                'date_created' => time()
            ];
            $this->db->insert('barang', $data);
        }
    }

    public function hapusBreket()
    {
        for($i=0; $i<$this->input->post('jumlah'); $i++) {
            $this->db->delete('barang', ['jenis_barang' => 'Breket']);
        }
    }

    // =================================== poe ===================================

    public function getAllPoe()
    {
        return $this->db->get_where('barang', ['id_barang' => 2])->result_array();
    }

    public function getPoeById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function hapusPoe($id)
    {
        return $this->db->delete('barang', ['id' => $id]);
    }

    public function getAllJenisBarangPoe()
    {
        return $this->db->get_where('jenis_barang', ['id' => 2])->row_array();
    }

    public function getAllMerkPoe()
    {
        return $this->db->get_where('merk_barang', ['id_barang' => 2])->result_array();
    }

    public function setrules_poe()
    {
        // set rules
        $this->form_validation->set_rules('sn', 'SN', 'required|trim|is_unique[barang.sn]', [
            'required' => 'SN harus diisi!',
            'is_unique' => 'SN sudah ada!'

        ]);
        $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
            'required' => 'Merk Barang harus diisi!'

        ]);
    }

    public function setrules_poe_edit()
    {
        // set rules
        $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
            'required' => 'Merk Barang harus diisi!'

        ]);
        $this->form_validation->set_rules('sn', 'SN', 'required|trim', [
            'required' => 'SN harus diisi!'

        ]);
        $this->form_validation->set_rules('status', 'Status', 'required|trim', [
            'required' => 'status harus diisi!'

        ]);
    }

    public function tambahDataPoe()
    {
        $data = [
            'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
            'merk' => htmlspecialchars($this->input->post('merk', true)),
            'sn' => htmlspecialchars($this->input->post('sn', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'is_active' => 1,
            'id_barang' => 2,
            'date_created' => time()
        ];
        $this->db->insert('barang', $data);
    }


    // =================================== jenis barang ===================================
    public function setrules_jenisbarang()
    {
        // set rules
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim', [
            'required' => 'Nama Barang harus diisi!'
        ]);
    }

    public function getJeniBarangId($id)
    {
        return $this->db->get_where('jenis_barang', ['id' => $id])->row_array();
    }

    public function hapusJenisBarang($id)
    {
        return $this->db->delete('jenis_barang', ['id' => $id]);
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

    public function ubahDataJenisBarang()
    {
        $data = [
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jenis_barang', $data);
    }

    // =================================== merk barang ===================================
    public function getAllmerk()
    {
        return $this->db->get('merk_barang')->result_array();
    }

    public function urutMerk()
     {
         $this->db->order_by('jenis_barang', 'ASC');
         $query = $this->db->get('merk_barang');
         return $query->result_array();
     }

    public function getMerkById($id)
    {
        return $this->db->get_where('merk_barang', ['id' => $id])->row_array();
    }

    public function hapusMerkBarang($id)
    {
        return $this->db->delete('merk_barang', ['id' => $id]);
    }

    public function tambahDataMerkBarang()
    {
        $data = [
            'id_barang' => htmlspecialchars($this->input->post('id_barang', true)),
            'nama_merk' => htmlspecialchars($this->input->post('nama_merk', true)),
            'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
            'date_created' => time()
        ];
        $this->db->insert('merk_barang', $data);
    }

    public function ubahDataMerkBarang()
    {
        $data = [
            'nama_merk' => htmlspecialchars($this->input->post('nama_merk', true)),
            'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
            'id_barang' => htmlspecialchars($this->input->post('id_barang', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('merk_barang', $data);
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
        $this->form_validation->set_rules('id_barang', 'Jenis Barang', 'required|trim|numeric', [
            'required' => 'Jenis Barang harus diisi!',
            'numeric' => 'Harus Berupa Angka!'
        ]);
    }

     // ======================================== ROUTER ===========================================

     public function urutRouter()
     {
         $this->db->order_by('merk', 'ASC');
         $query = $this->db->get_where('barang', ['id_barang' => 3]);
         return $query->result_array();
     }

     public function setrules_router()
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
 
     public function setrules_router_edit()
     {
         // set rules
         $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
             'required' => 'Merk Barang harus diisi!'
 
         ]);
         $this->form_validation->set_rules('sn', 'SN', 'required|trim', [
             'required' => 'SN harus diisi!'
 
         ]);
         $this->form_validation->set_rules('mac', 'MAC', 'required|trim', [
             'required' => 'MAC harus diisi!'
 
         ]);
         $this->form_validation->set_rules('status', 'Status', 'required|trim', [
             'required' => 'status harus diisi!'
 
         ]);
     }
 
     public function getRouterById($id)
     {
         return $this->db->get_where('barang', ['id' => $id])->row_array();
     }
 
     public function getAllmerkRouter()
     {
         return $this->db->get_where('merk_barang', ['id_barang' => 3])->result_array();
     }
 
     public function hapusRouter($id)
     {
         return $this->db->delete('barang', ['id' => $id]);
     }
 
     public function tambahDataRouter()
     {
         $data = [
             'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
             'merk' => htmlspecialchars($this->input->post('merk', true)),
             'sn' => htmlspecialchars($this->input->post('sn', true)),
             'mac' => htmlspecialchars($this->input->post('mac', true)),
             'status' => htmlspecialchars($this->input->post('status', true)),
             'is_active' => 1,
             'id_barang' => 3,
             'date_created' => time()
         ];
         $this->db->insert('barang', $data);
     }
 
     public function editRouter()
     {
         $data = [
             'merk' => htmlspecialchars($this->input->post('merk', true)),
             'sn' => htmlspecialchars($this->input->post('sn', true)),
             'mac' => htmlspecialchars($this->input->post('mac', true)),
             'status' => htmlspecialchars($this->input->post('status', true))
         ];
         $this->db->where('id', $this->input->post('id'));
         $this->db->update('barang', $data);
     }


     // ======================================== KABEL ===========================================

     public function urutKabel()
     {
         $this->db->order_by('merk', 'ASC');
         $query = $this->db->get_where('barang', ['id_barang' => 5]);
         return $query->result_array();
     }

     public function setrules_kabel()
     {
         // set rules
         $this->form_validation->set_rules('panjang', 'Panjang Kabel', 'required|numeric|trim', [
             'required' => 'Panjang Kabel harus diisi!',
             'numeric' => 'Panjang Kabel harus berupa angka'
 
         ]);
         $this->form_validation->set_rules('merk', 'Merk Barang', 'required|trim', [
             'required' => 'Merk Barang harus diisi!'
 
         ]);
         $this->form_validation->set_rules('satuan', 'Satuan Panjang', 'required|trim', [
             'required' => 'Satuan Panjang harus diisi!'
 
         ]);
     }
 
     public function getKabelById($id)
     {
         return $this->db->get_where('barang', ['id' => $id])->row_array();
     }
 
     public function getAllmerkKabel()
     {
         return $this->db->get_where('merk_barang', ['id_barang' => 5])->result_array();
     }

     public function getAllSatuanKabel()
     {
         return $this->db->get('satuan')->result_array();
     }
 
     public function hapusKabel($id)
     {
         return $this->db->delete('barang', ['id' => $id]);
     }
 
     public function tambahDataKabel()
     {
         $data = [
             'jenis_barang' => htmlspecialchars($this->input->post('jenis_barang', true)),
             'merk' => htmlspecialchars($this->input->post('merk', true)),
             'panjang' => htmlspecialchars($this->input->post('panjang', true)),
             'satuan' => htmlspecialchars($this->input->post('satuan', true)),
             'is_active' => 1,
             'id_barang' => 5,
             'date_created' => time()
         ];
         $this->db->insert('barang', $data);
     }
 
     public function editKabel()
     {
         $data = [
             'merk' => htmlspecialchars($this->input->post('merk', true)),
             'satuan' => htmlspecialchars($this->input->post('satuan', true)),
             'panjang' => htmlspecialchars($this->input->post('panjang', true))
         ];
         $this->db->where('id', $this->input->post('id'));
         $this->db->update('barang', $data);
     }
}
