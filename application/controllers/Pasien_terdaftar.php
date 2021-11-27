<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_terdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_terdaftar_model', 'pasien');
    }

    public function index()
    {
        $data['view'] = $this->pasien->view();
        $data['kode'] = $this->pasien->kode();
        $data['title'] = 'Pasien_terdaftar';
        $data['content_wrapper'] = $this->load->view('pasien/pasien_terdaftar', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->pasien->create();
        $this->session->flashdata('Message', 'Catatan Pasien Berhasil Ditambahkan');
        redirect('Pasien_terdaftar');
    }
    public function update()
    {
        $this->pasien->update();
        redirect('pasien_terdaftar');
    }
    // public function delete($id_pasien)
    // {
    //     $this->pasien->delete($id_pasien);
    //     redirect('pasien_terdaftar');
    // }
}
