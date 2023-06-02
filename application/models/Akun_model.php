<?php

class Akun_model extends CI_Model
{

	public function get_data()
	{
		return $this->db->get('akun_ukm');
	}

	public function tambah_data($data)
	{
		$this->db->insert('akun_ukm', $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data ($id_ukm,$data)
	{
		$this->db->where('id_ukm', $id_ukm);
		$this->db->update('akun_ukm',$data);
	}
}
