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
        $data['catat'] = $this->tindakan->getcatat();
        $data['tindakan'] = $this->tindakan->viewById();
        $data['raedtindakan'] = $this->tindakan->read_tindakan();
        $data['diagnosa'] = $this->tindakan->getPenyakit();
        $data['obat'] = $this->tindakan->getObat();
        $data['resep'] = $this->tindakan->read_resep();
        $data['readdiagnosa'] = $this->tindakan->read_diagnosa();
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
    public function create_diagnosa()
    {
        $this->tindakan->create_diagnosa();
        redirect('Input_tindakan');
    }
    public function update_diagnosa()
    {
        $this->tindakan->update_diagnosa();
        redirect('Input_tindakan');
    }
    public function create_resep()
    {
        $this->tindakan->create_resep();
        redirect('Input_tindakan');
    }
    public function update_resep()
    {
        $this->tindakan->update_resep();
        redirect('Input_tindakan');
    }
    public function create_tindakan()
    {
        $this->tindakan->create_tindakan();
        redirect('Input_tindakan');
    }
    public function update_tindakan()
    {
        $this->tindakan->update_tindakan();
        redirect('Input_tindakan');
    }
}
