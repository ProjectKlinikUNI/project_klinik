<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_dokter_model', 'jadwal');
        $this->load->model('dokter_model', 'dokter');
    }

    public function index()
    {
        $data['view'] = $this->jadwal->view();
        $data['dokter'] = $this->dokter->view();
        $data['title'] = 'jadwal';
        $data['content_wrapper'] = $this->load->view('jadwal/jadwal_dokter', $data, true);
        $this->load->view('main', $data);
    }

    // public function list()
    // {
    //     $output = $this->jadwal->view();

    //     echo json_encode($output);
    // }

    public function create()
    {
        $this->jadwal->create();
        redirect('jadwal_dokter');
    }
    public function update()
    {
        $this->jadwal->update();
        redirect('jadwal_dokter');
    }
    public function delete()
    {
        $this->jadwal->delete();
        redirect('jadwal_dokter');
    }
}
