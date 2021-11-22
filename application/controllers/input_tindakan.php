<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_tindakan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('input_tindakan_model', 'tindakan');
    }
    public function index()
    {

        $data['view'] = $this->tindakan->view();
        $data['tindakan'] = $this->tindakan->viewById();
        $data['diagnosa'] = $this->tindakan->getPenyakit();
        $data['obat'] = $this->tindakan->getObat();
        $data['diagosa'] = $this->tindakan->getTindakan();
        $data['title'] = 'Input Tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/input_tindakan_dokter', $data, true);
        $this->load->view('main', $data);
    }
    public function diagnosa()
    {
        $data['view'] = $this->tindakan->view();
        $data['title'] = 'Input Tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/input_tindakan_dokter', $data, true);
        $this->load->view('main', $data);
    }
    public function data()
    {
        $diagnosa = $this->tindakan->obat();

        echo json_encode($diagnosa);
    }
}
