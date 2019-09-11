<?php

class Kehadiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kehadiran_model');
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Kehadiran';
        $data['kehadiran'] = $this->Kehadiran_model->getAllKehadiran()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('kehadiran/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kehadiran';
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();

        $this->form_validation->set_rules('karyawan_nama', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_kehadiran', 'Tanggal Kehadiran', 'required');
        $this->form_validation->set_rules('jam_datang', 'Jam Datang', 'required');
        $this->form_validation->set_rules('jam_pulang', 'Jam Pulang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kehadiran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kehadiran_model->tambahDataKehadiran();
            $this->session->set_flashdata('flash', 'Ditambahkan.');
            redirect('kehadiran');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Karyawan';
        $data['kehadiran'] = $this->Kehadiran_model->getKehadiranById($id);
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();

        $this->form_validation->set_rules('karyawan_nama', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_kehadiran', 'Tanggal Kehadiran', 'required');
        $this->form_validation->set_rules('jam_datang', 'Jam Datang', 'required');
        $this->form_validation->set_rules('jam_pulang', 'Jam Pulang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kehadiran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $data['kehadiran'] = $this->Kehadiran_model->ubahDataKehadiran($id);
            if ($this->db->affected_rows() == 1) {
                $this->session->set_flashdata('flash', 'Diubah.');
                redirect('kehadiran');
            } else {
                redirect('kehadiran');
            }
        }
    }

    public function hapus($id)
    {
        $this->Kehadiran_model->hapusDataKehadiran($id);
        if ($this->db->affected_rows() == 1) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('kehadiran');
        }
    }
}
