<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien_baru_model extends CI_Model
{
    public function create()
    {
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'nama_pasien' => $this->input->post('nama_pasien'),
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
}
