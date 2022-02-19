<?php

class Masuk_model extends CI_Model
{
    public function getAllMasuk()
    {
        return $this->db->get('barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true),   //ditambah true supaya lebih aman
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($kode)
    {
        // Cara 1
        // $this->db->where('kode', $kode);
        // $this->db->delete('barang');

        // Cara 2
        $this->db->delete('barang', ['kode' => $kode]);
    }

    public function getDataById($kode)
    {
        return $this->db->get_where('barang', ['kode' => $kode])->row_array();
    }

    public function EditBarang()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'harga' => $this->input->post('harga', true)
        ];

        $this->db->where('kode', $this->input->post('kode'));
        $this->db->update('barang', $data);
    }

    public function cariBarang()
    {
        $cari = $this->input->post('cari');
        $this->db->like('nama', $cari);
        $this->db->or_like('kode', $cari);
        $this->db->or_like('harga', $cari);
        return $this->db->get('barang')->result_array();
    }
}
