<?php

class Chart_pengeluaran extends CI_Controller
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
		$this->load->view('Chart_pengeluaran', $data);
		$this->load->view('footer');
	}
}
