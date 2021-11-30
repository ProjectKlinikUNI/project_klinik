<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Farmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('farmasi_model', 'farmasi');
    }

    public function index()
    {
        $data['title'] = 'Farmasi';
        $data['view'] = $this->farmasi->view();
        $data['detailPasien'] = $this->farmasi->detailPasien();
        $data['detailObat'] = $this->farmasi->detailObat();
        $data['content_wrapper'] = $this->load->view('farmasi/farmasi', $data, true);
        $this->load->view('main', $data);
    }
}
