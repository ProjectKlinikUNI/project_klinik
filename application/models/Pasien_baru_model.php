<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien_baru_model extends CI_Model
{
    public function view()
    {
        $keyword = $this->input->post('keyword');
        // $this->db->like('id', $keyword);
        // $this->db->or_like('nama', $keyword);
        return $this->db->get_where('dm_pasien', ['nama_pasien' => $keyword])->row_array();
    }
    public function listPasien()
    {
        return $this->db->get('dm_pasien')->result_array();
    }
    public function create()
    {
        $data = [
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_poli' => $this->input->post('id_poli'),
            'layanan' => $this->input->post('layanan'),
            'tanggal_kunjungan' => date('y/m/d'),
            'jam_kunjungan' => date("H:i:sa"),
        ];
        $this->db->insert('tbl_kunjungan', $data);
    }
    public function kode()
    {
        $kunjungan = "SELECT MAX(id_kunjungan) as id_kunjungan FROM tbl_kunjungan ORDER BY id_kunjungan DESC";
        $p = $this->db->query($kunjungan)->row_array();
        $kode = $p['id_kunjungan'];
        $noUrut = (int)substr($kode, 8, 4);
        $noUrut++;
        $char = "PN";
        $date = date('ydm');
        $kodeKunjungan = $char . $date . sprintf("%04s", $noUrut);
        return $kodeKunjungan;
    }
}
