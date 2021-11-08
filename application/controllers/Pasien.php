<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pasien';
        $data['content_wrapper'] = $this->load->view('pasien/pasien', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
    }
    public function update()
    {
    }
}
