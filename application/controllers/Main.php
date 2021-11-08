<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Dasboard';
		$data['content_wrapper'] = $this->load->view('dashboard', $data, true);
		$this->load->view('main', $data);
	}
}
