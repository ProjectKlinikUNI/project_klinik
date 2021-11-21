<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('obat_model', 'obat');
    }

    public function index()
    {
        $data['view'] = $this->obat->view();
        $data['kode'] = $this->obat->kode();
        $data['title'] = 'Obat';
        $data['content_wrapper'] = $this->load->view('obat/obat', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->obat->create();
        redirect('Obat');
    }
    public function update()
    {
        $this->obat->update();
        redirect('obat');
    }
    public function delete($id_obat)
    {
        $this->obat->delete($id_obat);
        redirect('obat');
    }
}
