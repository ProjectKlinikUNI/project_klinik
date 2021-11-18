<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('dm_pasien')->result_array();
    }
    public function create()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'kontak_lain' => $this->input->post('kontak_lain'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->insert('dm_pasien', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_hp = $this->input->post('no_hp');
        $kontak_lain = $this->input->post('kontak_lain');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');

        $this->db->set('tempat_lahir', $tempat_lahir);
        $this->db->set('tgl_lahir', $tgl_lahir);
        $this->db->set('jenis_kelamin', $jenis_kelamin);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('kontak_lain', $kontak_lain);
        $this->db->set('pekerjaan', $pekerjaan);
        $this->db->set('alamat', $alamat);
        $this->db->set('nama', $nama);
        $this->db->where('id', $id);
        $this->db->update('dm_pasien');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dm_pasien');
    }
}
