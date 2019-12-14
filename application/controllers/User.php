
<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class User extends CI_controller

{
	public function index()
	{
		$data['title'] = 'Halaman |';
		$this->load->view('templates/headerlte',$data);
		$this->load->view('backend/guru/home');
		$this->load->view('backend/guru/sidebar');
		$this->load->view('templates/footerlte');	
	}



	public function lihat_jadwal_mengajar()
	{
		$data['title'] = 'Halaman |';
		$this->load->view('templates/headerlte',$data);
		$this->load->view('backend/guru/data/jadwal_guru');
		$this->load->view('backend/guru/sidebar');
		$this->load->view('templates/footerlte');	
	}

	public function lihat_absen()
	{
		$this->load->view('templates/headerlte');
		$this->load->view('backend/guru/data/absen_guru');
		$this->load->view('backend/guru/sidebar');
		$this->load->view('templates/footerlte');	
	}
}


 ?>