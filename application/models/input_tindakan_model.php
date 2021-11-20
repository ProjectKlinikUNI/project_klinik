<?php
defined('BASEPATH') or exit('No direct script access allowed');

class input_tindakan_model extends CI_Model
{
    public function view()
    {
        $session = $this->db->get_where('sys_users', ['username' => $this->session->userdata('username')])
            ->row_array();
        $s = $session['username'];
        $v = "SELECT *, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id as id_pasien FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id = tbl_kunjungan.id_pasien WHERE tbl_kunjungan.id_dokter='$session' ";
        return $this->db->query($v)->result_array();
    }
    public function viewById()
    {
        $id = $this->input->post('id');
        $v = "SELECT *, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id as id_pasien FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id = tbl_kunjungan.id_pasien WHERE tbl_kunjungan.id_kunjungan='$id' ";
        return $this->db->query($v)->row_array();
    }
    public function update()
    {
        $this->db->update('tbl_jadwal_dokter');
    }
    public function delete()
    {
    }
}
