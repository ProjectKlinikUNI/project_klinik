<?php
defined('BASEPATH') or exit('No direct script access allowed');

class input_tindakan_model extends CI_Model
{
    public function view()
    {
        $session = $this->db->get_where('sys_users', ['username' => $this->session->userdata('username')])
            ->row_array();
        $s = $session['id_users'];
        // var_dump($s);
        // die;
        $v = "SELECT tbl_kunjungan.id_kunjungan, tbl_kunjungan.tanggal_kunjungan,tbl_kunjungan.layanan, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id_pasien,dm_pasien.nama_pasien FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id_pasien = tbl_kunjungan.id_pasien WHERE tbl_kunjungan.id_dokter='$s' ";
        return $this->db->query($v)->result_array();
    }
    public function viewById()
    {
        //$id = $this->input->post('id_kunjung');
        $v = "SELECT *, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id_pasien, dm_pasien.tgl_lahir  FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id_pasien = tbl_kunjungan.id_pasien ORDER BY tbl_kunjungan.id_kunjungan desc ";
        return $this->db->query($v)->row_array();
    }
    public function getObat()
    {
        return $this->db->get('dm_obat')->result_array();
    }
    public function getPenyakit()
    {
        return $this->db->get('dm_diagnosa')->result_array();
    }
    public function getTindakan()
    {
        return $this->db->get('dm_tindakan')->result_array();
    }
    public function update_pasien()
    {
        $id_kunjungan = $this->input->post('id_kunjungan');
        $tanggal_kunjungan = date('Y-m-d H:i:s');

        $this->db->set('tanggal_kunjungan', $tanggal_kunjungan);
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->update('tbl_kunjungan');
    }
}
