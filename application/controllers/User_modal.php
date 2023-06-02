<?php

class User_modal extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('User_modal_model');

	}

	public function index()
	{
		$a = $this->session->userdata('id_ukm');
		$data = $this->User_modal_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['modal'] = $this->User_modal_model->get_data('modal')->result();
		$data['dataukm'] = $this->User_modal_model->get_data('modal')->result();

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_modal', $data);
		$this->load->view('footer');
	}

	public function tambah_aksi()
	{		
		$nilai	   = $this->input->post('nilai');
		$id_ukm   = $this->input->post('id_ukm');
		$data = array(
			'nilai'		=> $nilai,
			'id_ukm'	=> $id_ukm,
		);

		$this->User_modal_model->tambah_data ($data);
		redirect('user_modal');
	}	

	public function hapus ($id_modal)
	{
		$where = array ('id_modal' => $id_modal);
		$this->User_modal_model->hapus_data($where, 'modal');
		redirect('user_modal');
	}

	public function edit($id_modal)
	{
		$where = array ('id_modal' => $id_modal);
		$data['modal'] = $this->User_modal_model->edit_data($where,'modal')->result();
		$data1['title'] = 'Modal';
		$data['dataukm'] = $this->User_modal_model->getdata();

		$this->load->view('user/user_header', $data1);
		$this->load->view('user/user_sidebar', $data1);
		$this->load->view('user/user_edit_modal', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_modal = $this->input->post('id_modal');
		$nilai = $this->input->post('nilai');
		


		$data = array(
			'nilai'				=> $nilai,
			

			
		);
		$where = array(
			$id_modal => $id_modal
		);

		$this->User_modal_model->update_data($id_modal,$data);
		redirect('user_modal');
	}

}
