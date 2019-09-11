<?php

class Kehadiran_model extends CI_Model
{
    public function getAllKehadiran()
    {
        $this->db->select('*, timediff(jam_pulang, jam_datang) AS jam_kerja');
        $this->db->from('tb_kehadiran');
        $this->db->join('tb_karyawan', 'tb_karyawan.karyawan_id=tb_kehadiran.karyawan_id', 'left');
        $this->db->order_by('tgl_kehadiran', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function tambahDataKehadiran()
    {
        $data = [
            'karyawan_id' => $this->input->post('karyawan_nama', true),
            'tgl_kehadiran' => $this->input->post('tgl_kehadiran', true),
            'jam_datang' => $this->input->post('jam_datang', true),
            'jam_pulang' => $this->input->post('jam_pulang', true)
        ];

        $this->db->insert('tb_kehadiran', $data);
    }

    public function getKehadiranById($id)
    {
        return $this->db->get_where('tb_kehadiran', ['kehadiran_id' => $id])->row_array();
    }

    public function ubahDataKehadiran($id)
    {
        $data = [
            'karyawan_id' => $this->input->post('karyawan_nama', true),
            'tgl_kehadiran' => $this->input->post('tgl_kehadiran', true),
            'jam_datang' => $this->input->post('jam_datang', true),
            'jam_pulang' => $this->input->post('jam_pulang', true)
        ];

        $this->db->where('kehadiran_id', $this->input->post('kehadiran_id'));
        $this->db->update('tb_kehadiran', $data);
    }

    public function hapusDataKehadiran($id)
    {
        $this->db->where('kehadiran_id', $id);
        $this->db->delete('tb_kehadiran');
    }
}
