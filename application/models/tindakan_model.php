<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tindakan_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_tindakan')->result_array();
    }
    public function create()
    {
        $data = [
            'id_tindakan' => $this->input->post('id_tindakan'),
            'tindakan' => $this->input->post('tindakan'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->insert('dm_tindakan', $data);
    }
    public function update()
    {
        $id_tindakan = $this->input->post('id_tindakan');
        $tindakan = $this->input->post('tindakan');
        $harga = $this->input->post('harga');

        $this->db->set('harga', $harga);
        $this->db->set('tindakan', $tindakan);
        $this->db->set('id_tindakan', $id_tindakan);
        $this->db->where('id_tindakan', $id_tindakan);
        $this->db->update('dm_tindakan');
    }
    public function delete($id_tindakan)
    {
        $this->db->where('id_tindakan', $id_tindakan);
        $this->db->delete('dm_tindakan');
    }
}
