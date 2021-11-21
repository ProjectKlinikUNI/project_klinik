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
            'id_poli' => $this->input->post('id_poli'),
            'nama_poli' => $this->input->post('nama_poli'),
        ];
        $this->db->insert('dm_poli', $data);
    }
    public function update()
    {
        $id_poli = $this->input->post('id_poli');
        $nama_poli = $this->input->post('nama_poli');

        $this->db->set('nama_poli', $nama_poli);
        $this->db->set('id_poli', $id_poli);
        $this->db->where('id_poli', $id_poli);
        $this->db->update('dm_poli');
    }
    public function delete($id_poli)
    {
        $this->db->where('id_poli', $id_poli);
        $this->db->delete('dm_poli');
    }
}
