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
        // $n =  $this->tindakan->view();
        // var_dump($n);
        // die;
        $data['view'] = $this->tindakan->view();

        $data['tindakan'] = $this->tindakan->viewById();
        $data['diagnosa'] = $this->tindakan->getPenyakit();
        $data['obat'] = $this->tindakan->getObat();
        $data['list_tindakan'] = $this->tindakan->getTindakan();
        $data['title'] = 'Input Tindakan';
        $data['content_wrapper'] = $this->load->view('tindakan/input_tindakan_dokter', $data, true);
        $this->load->view('main', $data);
    }
    public function update_pasien()
    {
        $this->tindakan->update_pasien();
        redirect('Input_tindakan');
    }
    // public function data()
    // {
    //     $diagnosa = $this->tindakan->obat();

    //     echo json_encode($diagnosa);
    // }

}
