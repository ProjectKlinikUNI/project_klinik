<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien_terdaftar_model extends CI_Model
{
    public function view()
    {
        $keyword = $this->input->post('keyword');
        // $this->db->like('id', $keyword);
        // $this->db->or_like('nama', $keyword);
        return $this->db->get_where('dm_pasien', ['id' => $keyword])->row_array();
    }
    public function create()
    {
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'layanan' => $this->input->post('layanan'),
            'tanggal_kunjungan' => date('y/m/d')
        ];
        $this->db->insert('tbl_kunjungan', $data);
    }
}
