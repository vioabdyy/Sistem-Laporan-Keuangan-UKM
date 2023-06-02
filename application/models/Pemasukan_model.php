<?php

class Pemasukan_model extends CI_Model
{


	public function get_data()
	{

		$this->db->select('*');
		$this->db->from('akun_ukm');
		$this->db->join('pemasukan', 'pemasukan.id_ukm = akun_ukm.id_ukm');
		return $this->db->get('');
	}

	public function tambah_data($data)
	{
		$this->db->insert('pemasukan', $data);
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

	public function update_data ($id_pemasukan,$data)
	{
		$this->db->where('id_pemasukan', $id_pemasukan);
		$this->db->update('pemasukan',$data);
	}
	public function getdata()
	{
		$query = $this->db->query("SELECT * FROM akun_ukm ORDER BY id_ukm");

		return $query->result();
	}
	public function  getsum()
	{
		$sql = "SELECT sum(nilai) as nilai FROM pemasukan";
		$result = $this->db->query($sql);
		return $result->row()->nilai;
	}

}
