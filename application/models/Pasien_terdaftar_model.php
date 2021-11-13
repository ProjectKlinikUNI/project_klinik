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
}
