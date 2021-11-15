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
            'id_dokter' => $this->input->post('id_dokter'),
            'nama_dokter' => $this->input->post('nama_dokter'),
            'spesialis' => $this->input->post('spesialis'),
        ];
        $this->db->insert('dm_dokter', $data);
    }
    public function update()
    {
        $id_dokter = $this->input->post('id_dokter');
        $nama_dokter = $this->input->post('nama_dokter');
        $spesialis = $this->input->post('spesialis');

        $this->db->set('spesialis', $spesialis);
        $this->db->set('nama_dokter', $nama_dokter);
        $this->db->set('id_dokter', $id_dokter);
        $this->db->update('dm_dokter');
    }
    public function delete($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->delete('dm_dokter');
    }
}
