<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('supplier_model', 'supplier');
    }

    public function index()
    {
        $data['view'] = $this->supplier->view();
        $data['title'] = 'supplier';
        $data['content_wrapper'] = $this->load->view('supplier/supplier', $data, true);
        $this->load->view('main', $data);
    }
    public function create()
    {
        $this->supplier->create();
        redirect('supplier');
    }
    public function update()
    {
        $this->supplier->update();
        redirect('supplier');
    }
    public function delete($id_supplier)
    {
        $this->supplier->delete($id_supplier);
        redirect('supplier');
    }
}
