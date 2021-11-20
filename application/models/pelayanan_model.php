<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelayanan_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_pelayanan')->result_array();
    }
    public function create()
    {
        $data = [
            'id_pelayanan' => $this->input->post('id_pelayanan'),
            'jenis_layanan' => $this->input->post('jenis_layanan'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->insert('dm_pelayanan', $data);
    }
    public function update()
    {
        // $id_pelayanan = $this->input->post('id_pelayanan');
        $jenis_layanan = $this->input->post('jenis_layanan');
        $harga = $this->input->post('harga');

        $this->db->set('harga', $harga);
        $this->db->set('jenis_layanan', $jenis_layanan);
        // $this->db->set('id_pelayanan', $id_pelayanan);
        $this->db->update('dm_pelayanan');
    }
    public function delete($id_pelayanan)
    {
        $this->db->where('id_pelayanan', $id_pelayanan);
        $this->db->delete('dm_pelayanan');
    }
}
