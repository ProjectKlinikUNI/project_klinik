<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Farmasi extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Farmasi';
        $data['content_wrapper'] = $this->load->view('farmasi/farmasi', $data, true);
        $this->load->view('main', $data);
    }
}
