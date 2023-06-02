<?php

class Modal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Modal_model');

	}

	public function index()
	{

		$data = $this->Modal_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['modal'] = $this->Modal_model->get_data('modal')->result();
		$data['dataukm'] = $this->Modal_model->getdata();

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/modal', $data);
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

		$this->Modal_model->tambah_data ($data);
		redirect('modal');
	}	

	public function hapus ($id_modal)
	{
		$where = array ('id_modal' => $id_modal);
		$this->Modal_model->hapus_data($where, 'modal');
		redirect('modal');
	}

	public function edit($id_modal)
	{
		$where = array ('id_modal' => $id_modal);
		$data['modal'] = $this->Modal_model->edit_data($where,'modal')->result();
		$data1['title'] = 'Modal';
		$data['dataukm'] = $this->Modal_model->getdata();

		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('admin/edit_modal', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_modal = $this->input->post('id_modal');
		$nilai = $this->input->post('nilai');
		$id_ukm= $this->input->post('id_ukm');


		$data = array(
			'nilai'				=> $nilai,
			'id_ukm'				=> $id_ukm,

			
		);
		$where = array(
			$id_modal => $id_modal
		);

		$this->Modal_model->update_data($id_modal,$data);
		redirect('modal');
	}

}
