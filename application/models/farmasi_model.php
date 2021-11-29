<?php
defined('BASEPATH') or exit('No direct script access allowed');

class farmasi_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_dokter')->result_array();
    }
    public function create()
    {
        $data = [
            'id_dokter' => $this->input->post('id_dokter'),
            'id_poli' => $this->input->post('id_poli'),
            'nama_dokter' => $this->input->post('nama_dokter'),
        ];
        $this->db->insert('dm_dokter', $data);
    }
    public function update()
    {
        $id_dokter = $this->input->post('id_dokter');
        $id_poli = $this->input->post('id_poli');
        $nama_dokter = $this->input->post('nama_dokter');

        $this->db->set('nama_dokter', $nama_dokter);
        $this->db->set('id_poli', $id_poli);
        $this->db->set('id_dokter', $id_dokter);
        $this->db->where('id_dokter', $id_dokter);
        $this->db->update('dm_dokter');
    }
    public function delete($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->delete('dm_dokter');
    }
    public function kode()
    {
        $dokter = "SELECT MAX(id_dokter) as id_dokter FROM dm_dokter ORDER BY id_dokter DESC";
        $p = $this->db->query($dokter)->row_array();
        $kode = $p['id_dokter'];
        $noUrut = (int)substr($kode, 6, 4);
        $noUrut++;
        $char = "DR";
        $date = date('ydm');
        $kodeDokter = $char . $date . sprintf("%04s", $noUrut);
        return $kodeDokter;
    }
}
