<?php

class User_chart_pengeluaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_chart_pengeluaran_model');

	}

	public function index()
	{
		$a = $this->session->userdata('id_ukm');
		$data = $this->User_chart_pengeluaran_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pengeluaran'] = $this->User_chart_pengeluaran_model->get_data('pengeluaran')->result();
		$data['dataukm'] = $this->User_chart_pengeluaran_model->get_data('pengeluaran')->result();

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/User_chart_pengeluaran', $data);
		$this->load->view('user/user_footer');
	}
}
