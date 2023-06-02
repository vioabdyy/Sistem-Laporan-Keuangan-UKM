	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class dashboard extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('');

		}

		public function index()
		{

			$data['title'] = 'Sistem Keuangan ';

			$this->load->view('header', $data);
			$this->load->view('sidebar', $data);
			$this->load->view('content', $data);
			$this->load->view('footer');
		}

	}
