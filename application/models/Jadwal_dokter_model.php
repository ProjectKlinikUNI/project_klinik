<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jadwal_dokter_model extends CI_Model
{
    public function view()
    {
        $v = "SELECT *, dm_dokter.nama_dokter, dm_poliklinik.poliklinik FROM tbl_jadwal_dokter JOIN dm_dokter ON dm_dokter.id_dokter = tbl_jadwal_dokter.id_dokter JOIN dm_poliklinik ON dm_poliklinik.id = tbl_jadwal_dokter.id_poliklinik";
        return $this->db->query($v)->result_array();
    }
    public function create()
    {
        $data = [
            'id_dokter' => $this->input->post('id_dokter'),
            'id_poliklinik' => $this->input->post('id_poliklinik'),
            'hari' => $this->input->post('hari'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_berakhir' => $this->input->post('jam_berakhir')
        ];

        $this->db->insert('tbl_jadwal_dokter', $data);
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
