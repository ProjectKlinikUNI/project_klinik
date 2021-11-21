<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('users_modal', 'users');
    }
    public function index()
    {
        $data['view'] = $this->users->view();
        $data['title'] = 'Users';
        $data['content_wrapper'] = $this->load->view('Auth/users', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->users->create();
        $this->session->flashdata('Message', 'Data users Berhasil Ditambahkan');
        redirect('Users');
    }
    public function update()
    {
        $this->users->update();
        redirect('Users');
    }
    public function delete($id_pengguna)
    {
        $this->users->delete($id_pengguna);
        redirect('Users');
    }
}
