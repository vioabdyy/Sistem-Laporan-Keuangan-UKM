<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		
		$data['title'] = 'Sistem Keuangan ';
		$this->load->view('login', $data);
	}

	public function login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$result   = $this->Login_model->cek_user($username, $password);
		if ($result->num_rows() > 0) {
			$data = $result->row_array();
			$name = $data['username'];
			$level = $data['level'];
			$id_ukm = $data['id_ukm'];
			$sesdata = array(
				'id_ukm' => $id_ukm,
				'username' => $username,
				'level' => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($level == 'admin'){
				redirect('dashboard');
			}elseif ($level == 'user') {
				redirect('user_dashboard');
			}
		}else {
			echo "<script>alert('acces di tolak');history.go(-1);<script>'";
			redirect('Welcome');
		}	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}

}