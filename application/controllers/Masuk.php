<?php

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Barang Masuk';
        $data['barang_masuk'] = $this->Masuk_model->getAllMasuk();
        if ($this->input->post('cari')) {
            $data['barang_masuk'] = $this->Masuk_model->cariBarang();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('masuk/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Form Tambah Barang";

        $this->form_validation->set_rules('kode', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('masuk/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Masuk_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Masuk');
        }
    }

    public function hapus($kode)
    {
        $this->Masuk_model->hapusDataBarang($kode);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Masuk');
    }

    public function detail($kode)
    {
        $data['judul'] = 'Detail Barang Masuk';
        $data['barang'] = $this->Masuk_model->getDataById($kode);
        $this->load->view('templates/header', $data);
        $this->load->view('masuk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode)
    {
        $data['judul'] = 'Edit Barang Masuk';
        $data['barang'] = $this->Masuk_model->getDataById($kode);

        $this->form_validation->set_rules('kode', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('masuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Masuk_model->EditBarang();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('Masuk');
        }
    }
}
