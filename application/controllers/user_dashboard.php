<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_dashboard extends CI_Controller
{

	public function index()
	{
		
		$data['title'] = 'Sistem Keuangan ';
		

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_content', $data);
		$this->load->view('user/user_footer');
	}
}
