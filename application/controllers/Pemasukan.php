<?php

class Pemasukan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pemasukan_model');

	}
	
	public function index()
	{
		$data = $this->Pemasukan_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pemasukan'] = $this->Pemasukan_model->get_data('pemasukan')->result();
		$data['dataukm'] = $this->Pemasukan_model->getdata();
		$data['sum'] = $this->Pemasukan_model->getsum();
		
		

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/pemasukan', $data);
		$this->load->view('footer');

	}

	public function tambah_aksi()
	{

		$ket	   = $this->input->post('ket');
		$nilai	   = $this->input->post('nilai');
		$tanggal   = $this->input->post('tanggal');
		$id_ukm   = $this->input->post('id_ukm');

		$data = array(
			'ket'		=> $ket,
			'nilai'		=> $nilai,
			'tanggal'	=> $tanggal,
			'id_ukm'	=> $id_ukm,
		);

		$this->Pemasukan_model->tambah_data ($data);
		redirect('pemasukan');
	}	

	public function hapus ($id_pemasukan)
	{
		$where = array ('id_pemasukan' => $id_pemasukan);
		$this->Pemasukan_model->hapus_data($where, 'pemasukan');
		redirect('pemasukan');
	}

	public function edit($id_pemasukan)
	{

		$where = array ('id_pemasukan' => $id_pemasukan);
		$data['pemasukan'] = $this->Pemasukan_model->edit_data($where,'pemasukan')->result();
		$data['dataukm'] = $this->Pemasukan_model->getdata();
		$data1['title'] = 'Pemasukan';
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('admin/edit_pemasukan', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_pemasukan = $this->input->post('id_pemasukan');
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('nilai');
		$tanggal = $this->input->post('tanggal');	
		$id_ukm= $this->input->post('id_ukm');

		$data = array(
			'ket'		=> $ket,
			'nilai'				=> $nilai,
			'tanggal'				=> $tanggal,
			'id_ukm'				=> $id_ukm,

		);
		$where = array(
			$id_pemasukan => $id_pemasukan
		);

		$this->Pemasukan_model->update_data($id_pemasukan,$data);
		redirect('pemasukan');
	}

}
