<?php

class User_chart_model extends CI_Model
{

	public function get_data()
	{
		$a = $this->session->userdata('id_ukm');
		$this->db->select('*');
		$this->db->from('pemasukan');
		$this->db->join('akun_ukm', 'akun_ukm.id_ukm = pemasukan.id_ukm');
		$this->db->where('pemasukan.id_ukm', $a);
		return $this->db->get('');
	}
}