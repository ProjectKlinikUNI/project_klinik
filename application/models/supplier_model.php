<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplier_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_supplier')->result_array();
    }
    public function create()
    {
        $data = [
            'id_supplier' => $this->input->post('id_supplier'),
            'nama_supplier' => $this->input->post('nama_supplier'),
            'pic' => $this->input->post('pic'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->insert('dm_supplier', $data);
    }
    public function update()
    {
        $id_supplier = $this->input->post('id_supplier');
        $nama_supplier = $this->input->post('nama_supplier');
        $pic = $this->input->post('pic');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        $this->db->set('alamat', $alamat);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('pic', $pic);
        $this->db->set('nama_supplier', $nama_supplier);
        $this->db->set('id_supplier', $id_supplier);
        $this->db->where('id_supplier', $id_supplier);
        $this->db->update('dm_supplier');
    }
    public function delete($id_supplier)
    {
        $this->db->where('id_supplier', $id_supplier);
        $this->db->delete('dm_supplier');
    }
}
