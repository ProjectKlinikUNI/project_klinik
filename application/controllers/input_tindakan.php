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
        // $n =  $this->tindakan->view();

        // var_dump($n);
        // die;

        $data['title'] = 'Input Tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/input_tindakan_dokter', $data, true);
        $this->load->view('main', $data);
    }
    public function diagnosa()
    {
        // $data['tindakan'] = $this->tindakan->viewById($id);
        $data['title'] = 'Input Tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/input_tindakan_dokter', $data, true);
        $this->load->view('main', $data);
    }
}
