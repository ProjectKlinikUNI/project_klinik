<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien_terdaftar_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('tbl_kunjungan')->result_array();
    }
    public function create()
    {
        $data = [
            'id_catat_pasien' => $this->input->post('id_catat_pasien'),
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'riwayat_alergi' => $this->input->post('riwayat_alergi'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'tensi' => $this->input->post('tensi'),
            'cacat_badan' => $this->input->post('cacat_badan'),
            'buta_warna' => $this->input->post('buta_warna'),
            'golongan_darah' => $this->input->post('golongan_darah'),
            'catatan' => $this->input->post('catatan'),
            'tanggal' => date('y/m/d'),
        ];

        $this->db->insert('trans_catat_pasien', $data);
    }
    public function update()
    {
        $id_catat_kunjungan = $this->input->post('id_catat_kunjungan');
        $id_kunjungan = $this->input->post('id_kunjungan');
        $id_pasien = $this->input->post('id_pasien');
        $id_dokter = $this->input->post('id_dokter');
        $riwayat_alergi = $this->input->post('riwayat_alergi');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $tensi = $this->input->post('tensi');
        $cacat_badan = $this->input->post('cacat_badan');
        $buta_warna = $this->input->post('buta_warna');
        $golongan_darah = $this->input->post('golong_darah');
        $catatan = $this->input->post('catatan');
        $tanggal = $this->input->post('tanggal');

        $this->db->set('tanggal', $tanggal);
        $this->db->set('catatan', $catatan);
        $this->db->set('golongan_darah', $golongan_darah);
        $this->db->set('buta_warna', $buta_warna);
        $this->db->set('cacat_badan', $cacat_badan);
        $this->db->set('tensi', $tensi);
        $this->db->set('berat_badan', $berat_badan);
        $this->db->set('tinggi_badan', $tinggi_badan);
        $this->db->set('riwayat_alergi', $riwayat_alergi);
        $this->db->set('id_dokter', $id_dokter);
        $this->db->set('id_pasien', $id_pasien);
        $this->db->set('id_catat_kunjungan', $id_catat_kunjungan);
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->update('trans_catat_pasien');
    }

    // public function delete($id_kunjungan)
    // {
    //     $this->db->where('id_kunjungan', $id_kunjungan);
    //     $this->db->delete('tbl_kunjungan');
    // }
    public function kode()
    {
        $pasien = "SELECT MAX(id_kunjungan) as id_kunjungan FROM tbl_kunjungan ORDER BY id_kunjungan DESC";
        $p = $this->db->query($pasien)->row_array();
        $kode = $p['id_kunjungan'];
        $noUrut = (int)substr($kode, 11, 4);
        $noUrut++;
        $char = "PN";
        $date = date('ydm');
        $kodePasien = $char . $date . sprintf("%04s", $noUrut);
        return $kodePasien;
    }
    public function listPasien()
    {
    }
}
