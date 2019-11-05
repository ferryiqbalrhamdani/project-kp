<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function urutNIP()
    {
        $this->db->order_by('nip', 'ASC');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function tambahDataUser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'telp' => htmlspecialchars($this->input->post('telp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 3,
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }

    public function editDataUser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'telp' => htmlspecialchars($this->input->post('telp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function editUser()
    {
        $data = [
            'is_active' => htmlspecialchars($this->input->post('is_active', true)),
            'role_id' => htmlspecialchars($this->input->post('role_id', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function setrules_login()
    {
        // set rules
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim', [
            'required' => 'NIP harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => 'password harus diisi!',
            'min_length' => 'Password minimal 3 karakter!'
        ]);
    }

    public function setrules_registration()
    {
        // set rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim|max_length[5]|is_unique[user.nip]', [
            'required' => 'Nip harus diisi!',
            'max_length' => 'NIP maksimal 5 angka',
            'is_unique' => 'NIP sudah terdaftar'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email harus diisi!',
            'valid_email' => 'Harus berupa email',
            'is_unique' => 'Email sudah terdaftar'
        ]);
        $this->form_validation->set_rules('telp', 'No Telp', 'required|trim|numeric|max_length[12]|is_unique[user.telp]', [
            'required' => 'No. Telephone harus diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat harus diisi!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal Lahir harus diisi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'password harus diisi!',
            'min_length' => 'Password minimal 3 karakter',
            'matches' => 'Passord tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    }

    public function setrules_editUser()
    {
        // set rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi!',
            'valid_email' => 'Harus berupa email'
        ]);
        $this->form_validation->set_rules('telp', 'No Telp', 'required|trim|numeric|max_length[12]', [
            'required' => 'No. Telephone harus diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat harus diisi!'
        ]);
    }

    public function setrules_edit()
    {
        $this->form_validation->set_rules('role_id', 'Role Id', 'required|trim|numeric', [
            'required' => 'Role Id harus diisi!',
            'numeric' => 'Harus Berupa angka 2 & 3'
        ]);
        $this->form_validation->set_rules('is_active', 'Status Active', 'required|trim|numeric', [
            'required' => 'Status Active harus diisi!',
            'numeric' => 'Harus Berupa angka 1 & 0'
        ]);
    }

    public function jumlahUser()
    {
        $query = $this->db->get_where('user', ['is_active' => 1]);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
