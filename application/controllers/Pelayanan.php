<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelayanan_model', 'pelayanan');
    }

    public function index()
    {
        $data['view'] = $this->pelayanan->view();
        $data['title'] = 'Pelayanan';
        $data['content_wrapper'] = $this->load->view('pelayanan/pelayanan', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->pelayanan->create();
        redirect('Pelayanan');
    }
    public function update()
    {
        $this->pelayanan->update();
        redirect('pelayanan');
    }
    public function delete($id_pelayanan)
    {
        $this->pelayanan->delete($id_pelayanan);
        redirect('pelayanan');
    }
}
