<?php

class Chart extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('');

	}

	public function index()
	{
		$data['title'] = 'Sistem Keuangan';
		$data['akun_ukm'] = 

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('chart', $data);
		$this->load->view('footer');
	}
}
