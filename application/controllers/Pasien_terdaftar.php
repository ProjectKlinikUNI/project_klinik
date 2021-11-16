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
        $data['pasien'] = $this->pasien->view();
        $data['list'] = $this->pasien->listPasien();
        $data['title'] = 'Pasien';
        $data['content_wrapper'] = $this->load->view('pasien/pasien_terdaftar', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->pasien->create();
        // $this->pasien->create();
        redirect('Pasien_terdaftar');
    }
    public function printPasien()
    {
        $this->pasien->create();
        redirect('Pasien');
    }
}
