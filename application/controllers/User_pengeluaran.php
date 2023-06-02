<?php 

class User_pengeluaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_pengeluaran_model');

	}

	public function index()
	{

		$a = $this->session->userdata('id_ukm');
		$data = $this->User_pengeluaran_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pengeluaran'] = $this->User_pengeluaran_model->get_data('pengeluaran')->result();
		$data['dataukm'] = $this->User_pengeluaran_model->get_data('pengeluaran')->result();
		$data['dataukma'] = $this->User_pengeluaran_model->getsum();

		$this->load->view('user/user_header', $data);
		$this->load->view('user/user_sidebar', $data);
		$this->load->view('user/user_pengeluaran', $data);
		$this->load->view('user/user_footer');
	}

	public function tambah_aksi()
	{
		$ket	   = $this->input->post('ket');
		$nilai	   = $this->input->post('nilai');
		$tanggal   = $this->input->post('tanggal');
		$id_ukm   = $this->input->post('id_ukm');

		$data = array(
			'ket'		=> $ket,
			'nilai'		=> $nilai,
			'tanggal'	=> $tanggal,
			'id_ukm'	=> $id_ukm,
		);

		$this->User_pengeluaran_model->tambah_data ($data);
		redirect('user_pengeluaran');
	}	

	public function hapus ($id_pengeluaran)
	{
		$where = array ('id_pengeluaran' => $id_pengeluaran);
		$this->User_pengeluaran_model->hapus_data($where, 'pengeluaran');
		redirect('user_pengeluaran');
	}

	public function edit($id_pengeluaran)
	{
		$where = array ('id_pengeluaran' => $id_pengeluaran);
		$data['pengeluaran'] = $this->User_pengeluaran_model->edit_data($where,'pengeluaran')->result();
		$data['dataukm'] =	 $this->User_pengeluaran_model->getdata();
		$data1['title'] = 'Pengeluaran';
		$this->load->view('user/user_header', $data1);
		$this->load->view('user/user_sidebar', $data1);
		$this->load->view('user/user_edit_pengeluaran', $data, $data1);
		$this->load->view('user/user_footer');
	}	

	public function update()
	{
		$id_pengeluaran = $this->input->post('id_pengeluaran');
		$data['dataukm'] =	 $this->User_pengeluaran_model->getdata();
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('nilai');
		$tanggal = $this->input->post('tanggal');
		
		

		$data = array(
			'ket'		=> $ket,
			'nilai'				=> $nilai,
			'tanggal'			=> $tanggal,
			
		);
		$where = array(
			$id_pengeluaran => $id_pengeluaran
		);

		$this->User_pengeluaran_model->update_data($id_pengeluaran,$data);
		redirect('user_pengeluaran');
	}
}

?>