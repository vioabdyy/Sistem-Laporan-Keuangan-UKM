<?php
class User_pemasukan_model extends CI_Model
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
		$a = $this->session->userdata('id_ukm');
		$this->db->select('nilai');
		$this->db->from('pemasukan');
		$this->db->join('akun_ukm', 'akun_ukm.id_ukm = pemasukan.id_ukm');
		$this->db->where('pemasukan.id_ukm', $a);
		$sql = "SELECT sum(nilai) as nilai FROM pemasukan";
		$result = $this->db->query($sql);
		return $result->row()->nilai;
		return $this->db->get('');
	}
	public function get_keyword($keyword){
		$this->db->from('pemasukan');
		$this->db->like('ket', $keyword);
		$this->db->or_like('nilai', $keyword);
		$this->db->or_like('tanggal', $keyword);	
		$this->db->or_like('id_ukm', $keyword);
		return $this->db->get()->result(); 
	}

}
