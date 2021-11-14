<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dokter_model', 'dokter');
    }

    public function index()
    {
        $data['view'] = $this->dokter->view();
        $data['title'] = 'Dokter';
        $data['content_wrapper'] = $this->load->view('dokter/dokter', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->dokter->create();
        redirect('Dokter');
    }
    public function update()
    {
        $this->dokter->update();
        redirect('dokter');
    }
    public function delete($id_dokter)
    {
        $this->dokter->delete($id_dokter);
        redirect('dokter');
    }
}
