<?php

class User_chart_pengeluaran_model extends CI_Model
{

	public function get_data()
	{
		$a = $this->session->userdata('id_ukm');
		$this->db->select('*');
		$this->db->from('pengeluaran');
		$this->db->join('akun_ukm', 'akun_ukm.id_ukm = pengeluaran.id_ukm');
		$this->db->where('pengeluaran.id_ukm', $a);
		return $this->db->get('');
	}
}