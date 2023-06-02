<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

	public function cek_user($username, $password){
		$this->db->select('*');
		$this->db->from('akun_ukm');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query;

	}
}
