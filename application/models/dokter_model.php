<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dokter_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_dokter')->result_array();
    }
    public function create()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'spesialis' => $this->input->post('spesialis'),
        ];
        $this->db->insert('dm_dokter', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $spesialis = $this->input->post('spesialis');

        $this->db->set('spesialis', $spesialis);
        $this->db->set('nama', $nama);
        $this->db->set('id', $id);
        $this->db->update('dm_dokter');
    }
}
