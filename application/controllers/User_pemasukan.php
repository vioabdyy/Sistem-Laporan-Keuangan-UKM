<?php

class User_pemasukan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_pemasukan_model');

	}

	public function index()
	{
		$a = $this->session->userdata('id_ukm');
		$data = $this->User_pemasukan_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pemasukan'] = $this->User_pemasukan_model->get_data('pemasukan')->result();
		$data['dataukm'] = $this->User_pemasukan_model->get_data('pemasukan')->result();
		$data['dataukma'] = $this->User_pemasukan_model->getsum();
		

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_pemasukan', $data);
		$this->load->view('user/user_footer');
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

		$this->User_pemasukan_model->tambah_data ($data);
		redirect('user_pemasukan');
	}	

	public function hapus ($id_pemasukan)
	{
		$where = array ('id_pemasukan' => $id_pemasukan);
		$this->User_pemasukan_model->hapus_data($where, 'pemasukan');
		redirect('user_pemasukan');
	}

	public function edit($id_pemasukan)
	{

		$where = array ('id_pemasukan' => $id_pemasukan);
		$data['pemasukan'] = $this->User_pemasukan_model->edit_data($where,'pemasukan')->result();
		$data['dataukm'] = $this->User_pemasukan_model->getdata();
		$data1['title'] = 'Pemasukan';
		$this->load->view('user/user_header', $data1);
		$this->load->view('user/user_sidebar', $data1);
		$this->load->view('user/user_edit_pemasukan', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_pemasukan = $this->input->post('id_pemasukan');
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('nilai');
		$tanggal = $this->input->post('tanggal');	
		

		$data = array(
			'ket'		=> $ket,
			'nilai'				=> $nilai,
			'tanggal'				=> $tanggal,
			

		);
		$where = array(
			$id_pemasukan => $id_pemasukan
		);

		$this->User_pemasukan_model->update_data($id_pemasukan,$data);
		redirect('user_pemasukan');
	}

	public function search(){
		$data['keyword'] = $this->input->post('keyword');
		$data['pemasukan']=$this->User_pemasukan_model->get_keyword($data['keyword']);	
		$data['dataukma'] = $this->User_pemasukan_model->getsum();
		
		
		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_pemasukan', $data);
		$this->load->view('user/user_footer');
		

	}

}
