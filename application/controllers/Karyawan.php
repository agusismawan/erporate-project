<?php

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Karyawan';
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        if ($this->input->post('keyword')) {
            $data['karyawan'] = $this->Karyawan_model->cariDataKaryawan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('karyawan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Karyawan';

        $this->form_validation->set_rules('karyawan_nama', 'Nama', 'required');
        $this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('karyawan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Karyawan_model->tambahDataKaryawan();
            $this->session->set_flashdata('flash', 'Ditambahkan.');
            redirect('karyawan');
        }
    }

    public function hapus($id)
    {
        $this->Karyawan_model->hapusDataKaryawan($id);
        if ($this->db->affected_rows() == 1) {
            $this->session->set_flashdata('flash', 'Dihapus.');
            redirect('karyawan');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Karyawan';
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('karyawan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Karyawan';
        $data['jabatan'] = ['Programmer', 'Analisis', 'Android Dev', 'Bisnis Develop'];
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);

        $this->form_validation->set_rules('karyawan_nama', 'Nama', 'required');
        $this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('karyawan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $data['karyawan'] = $this->Karyawan_model->ubahDataKaryawan($id);
            if ($this->db->affected_rows() == 1) {
                $this->session->set_flashdata('flash', 'Diubah.');
                redirect('karyawan');
            } else {
                redirect('karyawan');
            }
        }
    }
}
