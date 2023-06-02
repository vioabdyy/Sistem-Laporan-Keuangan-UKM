<?php

class User_gallery extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('');

	}

	public function index()
	{
		$data['title'] = 'Sistem Keuangan';

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('gallery', $data);
		$this->load->view('user/user_footer');
	}
}
