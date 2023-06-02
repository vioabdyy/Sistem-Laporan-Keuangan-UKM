<?php

class User_modal_model extends CI_Model
{

	public function get_data()
	{
		$a = $this->session->userdata('id_ukm');
		$this->db->select('*');
		$this->db->from('modal');
		$this->db->join('akun_ukm', 'akun_ukm.id_ukm = modal.id_ukm');
		$this->db->where('modal.id_ukm', $a);
		return $this->db->get('');
	}

	public function tambah_data($data)
	{
		$this->db->insert('modal', $data);
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

	public function update_data ($id_modal,$data)
	{
		$this->db->where('id_modal', $id_modal);
		$this->db->update('modal',$data);
	}
	public function getdata()
	{
		$query = $this->db->query("SELECT * FROM akun_ukm ORDER BY id_ukm");

		return $query->result();
	}
}
