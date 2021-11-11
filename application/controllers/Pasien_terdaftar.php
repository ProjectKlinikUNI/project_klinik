<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_terdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model', 'pasien');
    }
    public function index()
    {
        $data['view'] = $this->pasien->cari();
        $data['title'] = 'Pasien';
        $data['content_wrapper'] = $this->load->view('pasien/pasien_terdaftar', $data, true);
        $this->load->view('main', $data);
    }
}
