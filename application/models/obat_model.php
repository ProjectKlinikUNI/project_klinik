<?php
defined('BASEPATH') or exit('No direct script access allowed');

class obat_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_obat')->result_array();
    }
    public function create()
    {
        $data = [
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'satuan' => $this->input->post('satuan'),
            'kategori' => $this->input->post('kategori'),
            'stock' => $this->input->post('stock'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->insert('dm_obat', $data);
    }
    public function update()
    {
        $id_obat = $this->input->post('id_obat');
        $nama_obat = $this->input->post('nama_obat');
        $satuan = $this->input->post('satuan');
        $kategori = $this->input->post('kategori');
        $stock = $this->input->post('stock');
        $harga = $this->input->post('harga');

        $this->db->set('satuan', $satuan);
        $this->db->set('kategori', $kategori);
        $this->db->set('stock', $stock);
        $this->db->set('harga', $harga);
        $this->db->set('nama_obat', $nama_obat);
        $this->db->where('id_obat', $id_obat);
        $this->db->update('dm_obat');
    }
    public function delete($id_obat)
    {
        $this->db->where('id_obat', $id_obat);
        $this->db->delete('dm_obat');
    }
    public function kode()
    {
        $obat = "SELECT MAX(id_obat) as id_obat FROM dm_obat ORDER BY id_obat DESC";
        $p = $this->db->query($obat)->row_array();
        $kode = $p['id_obat'];
        $noUrut = (int)substr($kode, 6, 4);
        $noUrut++;
        $char = "OBT";
        $date = date('Y');
        $kodeObat = $char . $date . sprintf("%04s", $noUrut);
        return $kodeObat;
    }
}
