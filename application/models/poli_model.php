<?php
defined('BASEPATH') or exit('No direct script access allowed');

class poli_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_poli')->result_array();
    }
    public function create()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama_poli' => $this->input->post('nama_poli'),
        ];
        $this->db->insert('dm_poli', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama_poli = $this->input->post('nama_poli');

        $this->db->set('nama_poli', $nama_poli);
        $this->db->set('id', $id);
        $this->db->update('dm_poli');
    }
}
