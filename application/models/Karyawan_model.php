<?php

class Karyawan_model extends CI_Model
{
    public function getAllKaryawan()
    {
        return $this->db->get('tb_karyawan')->result_array();
    }

    public function tambahDataKaryawan()
    {
        $data = array(
            'karyawan_nama' => $this->input->post('karyawan_nama', true),
            'jekel' => $this->input->post('jekel', true),
            'jabatan' => $this->input->post('jabatan', true),
            'no_hp' => $this->input->post('no_hp', true),
            'alamat' => $this->input->post('alamat', true)
        );

        $this->db->insert('tb_karyawan', $data);
    }

    public function hapusDataKaryawan($id)
    {
        $this->db->where('karyawan_id', $id);
        $this->db->delete('tb_karyawan');
    }

    public function getKaryawanById($id)
    {
        return $this->db->get_where('tb_karyawan', ['karyawan_id' => $id])->row_array();
    }

    public function ubahDataKaryawan()
    {
        $data = array(
            'karyawan_nama' => $this->input->post('karyawan_nama', true),
            'jekel' => $this->input->post('jekel', true),
            'jabatan' => $this->input->post('jabatan', true),
            'no_hp' => $this->input->post('no_hp', true),
            'alamat' => $this->input->post('alamat', true)
        );

        $this->db->where('karyawan_id', $this->input->post('id'));
        $this->db->update('tb_karyawan', $data);
    }

    public function cariDataKaryawan()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('karyawan_nama', $keyword);
        $this->db->or_like('jekel', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('no_hp', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('tb_karyawan')->result_array();
    }
}
