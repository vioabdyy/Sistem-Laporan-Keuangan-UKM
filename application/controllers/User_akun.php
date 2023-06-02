<?php

class User_akun extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_akun_model');

	}

	public function index()
	{
		$data['title'] = 'Sistem Keuangan';
		$data['akun_ukm'] = $this->User_akun_model->get_data('akun_ukm')->result();

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_akun', $data);
		$this->load->view('user/user_footer');
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


		$data = array(
			'nomor_ukm'		=> $nomor_ukm,
			'username'		=> $username,
			'password'	=> $password,
			'nama_ukm'	=> $nama_ukm,
			'alamat'		=> $alamat,
			'nohp'		=> $nohp,
			'email'	=> $email,
		);

		$this->User_akun_model->tambah_data ($data);
		redirect('akun');
	}	

	public function hapus ($id_ukm)
	{
		$where = array ('id_ukm' => $id_ukm);
		$this->User_akun_model->hapus_data($where, 'akun_ukm');
		redirect('akun');
	}

	public function edit($id_ukm)
	{
		$where = array ('id_ukm' => $id_ukm);
		$data['akun'] = $this->User_akun_model->edit_data($where,'akun_ukm')->result();
		$data1['title'] = 'Akun UKM';
		$this->load->view('user/user_header', $data1);
		$this->load->view('user/user_sidebar', $data1);
		$this->load->view('user/user_edit_akun', $data, $data1);
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


		$data = array(
			'nomor_ukm'		=> $nomor_ukm,
			'username'		=> $username,
			'password'	=> $password,
			'nama_ukm'	=> $nama_ukm,
			'alamat'		=> $alamat,
			'nohp'		=> $nohp,
			'email'	=> $email
		);
		$where = array(
			$id_ukm => $id_ukm
		);

		$this->User_akun_model->update_data($id_ukm,$data);
		redirect('user_akun');
	}

}
