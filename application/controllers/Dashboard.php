<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['content_wrapper'] = $this->load->view('dashboard', $data, true);
		$this->load->view('main', $data);
	}
}
