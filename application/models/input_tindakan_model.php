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
        $v = "SELECT tbl_kunjungan.id_kunjungan, tbl_kunjungan.tanggal_kunjungan,tbl_kunjungan.layanan, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id_pasien,dm_pasien.nama_pasien FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id_pasien = tbl_kunjungan.id_pasien WHERE tbl_kunjungan.id_dokter='$s' AND tbl_kunjungan.status IS NULL  ";
        return $this->db->query($v)->result_array();
    }
    public function viewById()
    {
        //$id = $this->input->post('id_kunjung');
        $v = "SELECT *, max(tanggal_kunjungan) as tanggal_kunjungan, dm_dokter.nama_dokter, dm_poli.nama_poli, dm_pasien.id_pasien, dm_pasien.tgl_lahir  FROM tbl_kunjungan JOIN dm_dokter ON dm_dokter.id_dokter = tbl_kunjungan.id_dokter JOIN dm_poli ON dm_poli.id_poli = tbl_kunjungan.id_poli JOIN dm_pasien ON dm_pasien.id_pasien = tbl_kunjungan.id_pasien  WHERE tbl_kunjungan.status = 'Diproses Dokter'  ORDER BY tbl_kunjungan.id_kunjungan desc ";
        return $this->db->query($v)->row_array();
    }
    public function getcatat()
    {
        $catat = "SELECT trans_catat_pasien.id_pendaftaran, trans_catat_pasien.riwayat_alergi, trans_catat_pasien.tinggi_badan, trans_catat_pasien.berat_badan, trans_catat_pasien.tensi, trans_catat_pasien.cacat_badan,trans_catat_pasien.buta_warna,trans_catat_pasien.golongan_darah, trans_catat_pasien.catatan, max(tanggal_kunjungan) as tanggal_kunjungan FROM trans_catat_pasien JOIN tbl_kunjungan ON tbl_kunjungan.id_kunjungan = trans_catat_pasien.id_pendaftaran ";
        return $this->db->query($catat)->row_array();
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
        $status = $this->input->post('status');
        $id_kunjungan = $this->input->post('id_kunjungan');
        $tanggal_kunjungan = date('Y-m-d H:i:s');

        $this->db->set('tanggal_kunjungan', $tanggal_kunjungan);
        $this->db->set('status', $status);
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->update('tbl_kunjungan');
    }
    public function create_diagnosa()
    {
        $data = [
            'id_diagnosa' => $this->input->post('id_diagnosa'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
        ];
        $this->db->insert('trans_diagnosa_pasien', $data);
    }
    public function update_diagnosa()
    {
        $id_diagnosa_pasien = $this->input->post('id_diagnosa_pasien');
        $keterangan = $this->input->post('keterangan');
        $this->db->where('id_diagnosa_pasien', $id_diagnosa_pasien);
        $this->db->set('keterangan', $keterangan);
        $this->db->update('trans_diagnosa_pasien');
    }
    public function read_diagnosa()
    {
        $read = "SELECT dm_diagnosa.nama_diagnosa, trans_diagnosa_pasien.id_diagnosa_pasien, trans_diagnosa_pasien.keterangan, max(tanggal_kunjungan) as tanggal_kunjungan FROM trans_diagnosa_pasien JOIN dm_diagnosa ON dm_diagnosa.id_diagnosa = trans_diagnosa_pasien.id_diagnosa JOIN tbl_kunjungan ON trans_diagnosa_pasien.id_pendaftaran = tbl_kunjungan.id_kunjungan";

        return $this->db->query($read)->result_array();
    }
    public function create_resep()
    {
        $data = [
            'kode_obat' => $this->input->post('kode_obat'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
        ];
        $this->db->insert('trans_resep_pasien', $data);
    }
    public function read_resep()
    {
        $read = "SELECT dm_obat.nama_obat,dm_obat.satuan,dm_obat.kategori, trans_resep_pasien.keterangan, max(tanggal_kunjungan) as tanggal_kunjungan FROM trans_resep_pasien JOIN dm_obat ON dm_obat.id_obat = trans_resep_pasien.kode_obat JOIN tbl_kunjungan ON trans_resep_pasien.id_pendaftaran = tbl_kunjungan.id_kunjungan";

        return $this->db->query($read)->result_array();
    }
    public function create_tindakan()
    {
        $data = [
            'id_tindakan' => $this->input->post('id_tindakan'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
        ];
        $this->db->insert('trans_tindakan_pasien', $data);
    }
    public function read_tindakan()
    {
        $read = "SELECT dm_tindakan.nama_tindakan, dm_tindakan.harga_tindakan, max(tanggal_kunjungan) as tanggal_kunjungan FROM trans_tindakan_pasien JOIN dm_tindakan ON dm_tindakan.id_tindakan = trans_tindakan_pasien.id_tindakan JOIN tbl_kunjungan ON trans_tindakan_pasien.id_pendaftaran = tbl_kunjungan.id_kunjungan";

        return $this->db->query($read)->result_array();
    }
}
