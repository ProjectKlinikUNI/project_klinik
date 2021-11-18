<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model', 'pasien');
    }

    public function index()
    {
        $data['view'] = $this->pasien->view();
        $data['kode'] = $this->pasien->kode();
        $data['title'] = 'Pasien';
        $data['content_wrapper'] = $this->load->view('pasien/pasien', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->pasien->create();
        $this->session->flashdata('Message', 'Data Pasien Berhasil Ditambahkan');
        redirect('Pasien');
    }
    public function update()
    {
        $this->pasien->update();
        redirect('pasien');
    }
    public function delete($id)
    {
        $this->dokter->delete($id);
        redirect('pasien');
    }
}
