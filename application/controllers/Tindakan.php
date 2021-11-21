<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tindakan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tindakan_model', 'tindakan');
    }

    public function index()
    {
        $data['view'] = $this->tindakan->view();
        $data['title'] = 'tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/tindakan', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->tindakan->create();
        redirect('tindakan');
    }
    public function update()
    {
        $this->tindakan->update();
        redirect('tindakan');
    }
    public function delete($id_tindakan)
    {
        $this->tindakan->delete($id_tindakan);
        redirect('tindakan');
    }
}
