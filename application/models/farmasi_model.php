<?php
defined('BASEPATH') or exit('No direct script access allowed');

class farmasi_model extends CI_Model
{
    public function view()
    {
        $view = "SELECT tbl_kunjungan.id_kunjungan, dm_pasien.nama_pasien, dm_dokter.nama_dokter, dm_poli.nama_poli FROM tbl_kunjungan JOIN dm_pasien ON tbl_kunjungan.id_pasien = dm_pasien.id_pasien JOIN dm_dokter ON tbl_kunjungan.id_dokter = dm_dokter.id_dokter JOIN dm_poli ON tbl_kunjungan.id_poli = dm_poli.id_poli  WHERE tbl_kunjungan.status='Sudah Dibayar'";

        return $this->db->query($view)->result_array();
    }
}
