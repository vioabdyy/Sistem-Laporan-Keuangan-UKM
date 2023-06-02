<?php 

class Pengeluaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengeluaran_model');

	}

	public function index()
	{

		$data = $this->Pemasukan_model->get_data()->result();
		$data['title'] = 'Sistem Keuangan';
		$data['pengeluaran'] = $this->Pengeluaran_model->get_data('pengeluaran')->result();
		$data['dataukm'] = $this->Pengeluaran_model->getdata();
		$data['sum'] = $this->Pengeluaran_model->getsum();

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/pengeluaran', $data);
		$this->load->view('footer');
	}

	public function tambah_aksi()
	{
		$id_pengeluaran = $this->input->post('id_pengeluaran');	
		$data['dataukm'] =	 $this->Pengeluaran_model->getdata();

		$ket	   = $this->input->post('ket');
		$nilai	   = $this->input->post('nilai');
		$tanggal   = $this->input->post('tanggal');
		$id_ukm   = $this->input->post('id_ukm');

		$data = array(
			'ket'		=> $ket,
			'nilai'		=> $nilai,
			'tanggal'	=> $tanggal,
			'id_ukm'	=> $id_ukm
		);

		$this->Pengeluaran_model->tambah_data ($data);
		redirect('pengeluaran');
	}	

	public function hapus ($id_pengeluaran)
	{
		$where = array ('id_pengeluaran' => $id_pengeluaran);
		$this->Pengeluaran_model->hapus_data($where, 'pengeluaran');
		redirect('pemasukan');
	}

	public function edit($id_pengeluaran)
	{
		$where = array ('id_pengeluaran' => $id_pengeluaran);
		$data['pengeluaran'] = $this->Pengeluaran_model->edit_data($where,'pengeluaran')->result();
		$data['dataukm'] =	 $this->Pengeluaran_model->getdata();
		$data1['title'] = 'Pengeluaran';
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('admin/edit_pengeluaran', $data, $data1);
		$this->load->view('footer');
	}	

	public function update()
	{
		$id_pengeluaran = $this->input->post('id_pengeluaran');
		$data['dataukm'] =	 $this->Pengeluaran_model->getdata();
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('nilai');
		$tanggal = $this->input->post('tanggal');
		$id_ukm = $this->input->post('id_ukm');	
		

		$data = array(
			'ket'		=> $ket,
			'nilai'				=> $nilai,
			'tanggal'			=> $tanggal,
			'id_ukm'		=> $id_ukm,
		);
		$where = array(
			$id_pengeluaran => $id_pengeluaran
		);

		$this->Pengeluaran_model->update_data($id_pengeluaran,$data);
		redirect('pengeluaran');
	}
}

?>