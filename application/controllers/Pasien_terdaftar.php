<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_terdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_terdaftar_model', 'pasien');
    }

    public function index()
    {
<<<<<<< HEAD
        $data['pasien'] = $this->pasien->view();
        $data['list'] = $this->pasien->listPasien();
        $data['title'] = 'Pasien Terdaftar';
=======
        $data['view'] = $this->pasien->view();
        $data['kode'] = $this->pasien->kode();
        $data['title'] = 'Pasien_terdaftar';
>>>>>>> 47df4ad28791222a649e14dd873ffe0e39c5db6b
        $data['content_wrapper'] = $this->load->view('pasien/pasien_terdaftar', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->pasien->create();
        $this->session->flashdata('Message', 'Catatan Pasien Berhasil Ditambahkan');
        redirect('Pasien_terdaftar');
    }
    public function update()
    {
        $this->pasien->update();
        redirect('pasien_terdaftar');
    }
    // public function delete($id_pasien)
    // {
    //     $this->pasien->delete($id_pasien);
    //     redirect('pasien_terdaftar');
    // }
}
