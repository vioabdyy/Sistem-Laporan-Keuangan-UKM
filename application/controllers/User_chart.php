<?php

class User_chart extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_chart_model');

	}

	public function index()
	{
		$a = $this->session->userdata('id_ukm');
		$data = $this->User_chart_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pemasukan'] = $this->User_chart_model->get_data('pemasukan')->result();
		$data['dataukm'] = $this->User_chart_model->get_data('pemasukan')->result();

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/User_chart', $data);
		$this->load->view('user/user_footer');
	}
}
