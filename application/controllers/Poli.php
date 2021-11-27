<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('poli_model', 'poli');
    }

    public function index()
    {
        $data['view'] = $this->poli->view();
        $data['title'] = 'Poliklinik';
        $data['content_wrapper'] = $this->load->view('poli/poli', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->poli->create();
        redirect('poli');
    }
    public function update()
    {
        $this->poli->update();
        redirect('poli');
    }
    public function delete($id_poli)
    {
        $this->poli->delete($id_poli);
        redirect('poli');
    }
}
