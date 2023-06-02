<?php

class Akun extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Akun_model');

	}

	public function index()
	{
		$data['title'] = 'Sistem Keuangan';
		$data['akun_ukm'] = $this->Akun_model->get_data('akun_ukm')->result();

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/akun', $data);
		$this->load->view('footer');
	}

	public function tambah_aksi()
	{

		$nomor_ukm	   = $this->input->post('nomor_ukm');
		$username	   = $this->input->post('username');
		$password   = $this->input->post('password');
		$nama_ukm   = $this->input->post('nama_ukm');
		$alamat   = $this->input->post('alamat');
		$nohp   = $this->input->post('nohp');
		$email   = $this->input->post('email');
		$level   = $this->input->post('level');



		$data = array(
			'nomor_ukm'		=> $nomor_ukm,
			'username'		=> $username,
			'password'	=> $password,
			'nama_ukm'	=> $nama_ukm,
			'alamat'		=> $alamat,
			'nohp'		=> $nohp,
			'email'	=> $email,
			'level'	=> $level,
		);

		$this->Akun_model->tambah_data ($data);
		redirect('akun');
	}	

	public function hapus ($id_ukm)
	{
		$where = array ('id_ukm' => $id_ukm);
		$this->Akun_model->hapus_data($where, 'akun_ukm');
		redirect('akun');
	}

	public function edit($id_ukm)
	{
		$where = array ('id_ukm' => $id_ukm);
		$data['akun'] = $this->Akun_model->edit_data($where,'akun_ukm')->result();
		$data1['title'] = 'Akun UKM';
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('admin/edit_akun', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_ukm = $this->input->post('id_ukm');
		$nomor_ukm	   = $this->input->post('nomor_ukm');
		$username	   = $this->input->post('username');
		$password   = $this->input->post('password');
		$nama_ukm   = $this->input->post('nama_ukm');
		$alamat   = $this->input->post('alamat');
		$nohp   = $this->input->post('nohp');
		$email   = $this->input->post('email');
		$level   = $this->input->post('level');


		$data = array(
			'nomor_ukm'		=> $nomor_ukm,
			'username'		=> $username,
			'password'	=> $password,
			'nama_ukm'	=> $nama_ukm,
			'alamat'		=> $alamat,
			'nohp'		=> $nohp,
			'email'	=> $email,
			'level'	=> $level,
		);
		$where = array(
			$id_ukm => $id_ukm
		);

		$this->Akun_model->update_data($id_ukm,$data);
		redirect('akun');
	}

}
