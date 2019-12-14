
<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class admin extends CI_controller

{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
		$this->load->helper('my');
	}
	public function index()
	{
		$data['tb_absensi'] = $this->m_admin->get_data_absensi()->result();
		$data['tb_guru'] = $this->m_admin->get_data_guru()->result();
		$this->load->view('templates/headerlte');
		$this->load->view('backend/admin/home',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');
	}

	/*lihat data absensi*/
	public function lihat_data_absensi()
	{
		// $data['title'] = 'Halaman |';
		$data['tb_absensi'] = $this->m_admin->get_data_absensi()->result();
		$this->load->view('templates/headerlte');
		// $this->load->view('backend/berkas/absensi/v_absensi',$data);
		$this->load->view('backend/berkas/absensi/v_absensi2',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
		/*print_r($data);
		die();*/

	}

	public function lihat_data_guru()
	{
		// $data['title'] = 'Halaman |';
		$data['tb_guru'] = $this->M_admin->get_data_guru()->result();
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/data_guru/v_data_guru',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
		/*print_r($data);
		die();*/

	}



	/*Tambah Data Guru*/
	public function tambah_data_guru()
	{
		/*$data['tb_absensi'] = $this->M_admin->get_data_absensi();*/
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/data_guru/tambah');
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
	}
	public function proses_tambahdataguru()
	{
			// $this->form_validation->set_message('is_unique','Data {field} sudah terpakai');
			$this->form_validation->set_message('required','Kolom {field} harus diiisi');

			$this->form_validation->set_rules('id_guru','ID GURU',['required']);
			$this->form_validation->set_rules('nama','Nama',['required']);
			$this->form_validation->set_rules('mp','Mata Pelajaran',['required']);
			$this->form_validation->set_rules('tingkat_mengajar','Tingkat Mengajar');
			$this->form_validation->set_rules('kelas','Kelas',['required']);
			
			if ($this->form_validation->run()===FALSE ) {
				$data['title'] = 'Halaman Admin';
				$this->load->view('templates/headerlte');
				$this->load->view('backend/berkas/data_guru/tambah',$data);
				$this->load->view('backend/admin/sidebar');
				$this->load->view('templates/footerlte');	
			}
			else
			{
				$this->M_admin->masuk_dataguru();
					 $this->session->set_flashdata("sukses","Data berhasil masuk:)");
					redirect('admin/lihat_data_guru');
			}
	}

	/*Tambah Data Absen*/
		public function tambah_data_baru()
	{
		/*$data['tb_absensi'] = $this->M_admin->get_data_absensi();*/
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/absensi/tambah');
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
	}
	public function proses_tambah()
	{
			// $this->form_validation->set_message('is_unique','Data {field} sudah terpakai');
			$this->form_validation->set_message('required','Kolom {field} harus diiisi');

			$this->form_validation->set_rules('nama','Nama',['required']);
			$this->form_validation->set_rules('mp','Mata Pelajaran',['required']);
			$this->form_validation->set_rules('tingkat_mengajar','Tingkat Mengajar');
			$this->form_validation->set_rules('kelas','Kelas',['required']);
			$this->form_validation->set_rules('mp','MP',['required']);
			$this->form_validation->set_rules('tms','tms',['required']);
			$this->form_validation->set_rules('tmh','tmh',['required']);
			$this->form_validation->set_rules('infal','infal',['required']);
			$this->form_validation->set_rules('tms2','tms2',['required']);
			$this->form_validation->set_rules('tmh2','tmh2',['required']);
			$this->form_validation->set_rules('infal2','infal2',['required']);
			$this->form_validation->set_rules('tms3','tms3',['required']);
			$this->form_validation->set_rules('tmh3','tmh3',['required']);
			$this->form_validation->set_rules('infal3','infal3',['required']);
			$this->form_validation->set_rules('tms4','tms4',['required']);
			$this->form_validation->set_rules('tmh4','tmh4',['required']);
			$this->form_validation->set_rules('infal4','infal4',['required']);
			$this->form_validation->set_rules('tms5','tms5',['required']);
			$this->form_validation->set_rules('tmh5','tmh5',['required']);
			$this->form_validation->set_rules('infal5','infal5',['required']);
			
			if ($this->form_validation->run()===FALSE ) {
				$data['title'] = 'Halaman Admin';
				$this->load->view('templates/headerlte',$data);
				$this->load->view('backend/berkas/absensi/tambah',$data);
				$this->load->view('backend/admin/sidebar');
				$this->load->view('templates/footerlte');	
			}
			else
			{
				$this->m_admin->masuk_databaru();
					 $this->session->set_flashdata("sukses","Data berhasil masuk:)");
					redirect('admin/lihat_data_absensi');
			}
	}	

	/*Edit Data Absensi*/
	public function edit_data_absensi($id)
	{
		$data['title'] = 'Halaman Admin';
		$where = array('id'=>$id);
		$data['tb_absensi'] = $this->m_admin->edit_dataabsensi($where,'tb_absensi')->result();
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/absensi/edit',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
	}
	public function simpan_dataabsensi($id)
	{	
		$where = array('id' =>$id);
		$data = array(
				"nama" => $this->input->post('nama'),
				"mp" => $this->input->post('mp'),
				"tingkat_mengajar" => $this->input->post('tingkat_mengajar'),
				"kelas" => $this->input->post('kelas'),
				"tms" => $this->input->post('tms'),
				"tmh" => $this->input->post('tmh'),
				"infal" => $this->input->post('infal'),
				"tms2" => $this->input->post('tms2'),
				"tmh2" => $this->input->post('tmh2'),
				"infal2" => $this->input->post('infal2'),
				"tms3" => $this->input->post('tms3'),
				"tmh3" => $this->input->post('tmh3'),
				"infal3" => $this->input->post('infal3'),
				"tms4" => $this->input->post('tms4'),
				"tmh4" => $this->input->post('tmh4'),
				"infal4" => $this->input->post('infal4'),
				"tms5" => $this->input->post('tms5'),
				"tmh5" => $this->input->post('tmh5'),
				"infal5" => $this->input->post('infal5')
			);
			$this->m_admin->update_dataabsensi($where, $data, 'tb_absensi');

			redirect('admin/lihat_data_absensi');
	}

	/*Edit Data Guru*/
	public function edit_data_guru($id)
	{
		$data['title'] = 'Halaman Admin';
		$where = array('id'=>$id);
		$data['tb_guru'] = $this->m_admin->edit_dataguru($where,'tb_guru')->result();
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/data_guru/edit',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');	
	}
	public function simpan_dataguru($id)
	{	
		$where = array('id' =>$id);
		$data = array(
				"id_guru" => $this->input->post('id_guru'),
				"nama" => $this->input->post('nama'),
				"mp" => $this->input->post('mp'),
				"tingkat_mengajar" => $this->input->post('tingkat_mengajar'),
				"kelas" => $this->input->post('kelas')
			);
			$this->m_admin->update_dataguru($where, $data, 'tb_guru');

			redirect('admin/lihat_data_guru');
	}


	/*Hapus Data Absensi*/
	public function hapus_data_absensi($id)
	{
		$where = array('id'=>$id);
		$this->m_admin->hapus_absensi($where, 'tb_absensi');
		$this->session->set_flashdata('pesan',' berhasil dihapus');
		redirect('admin/lihat_data_absensi');
	}

	/*hapis data Guru*/
	public function hapus_data_guru($id)
	{
		$where = array('id'=>$id);
		$this->m_admin->hapus_guru($where, 'tb_guru');
		$this->session->set_flashdata('pesan',' berhasil dihapus');
		redirect('admin/lihat_data_guru');
	}

	/*search data absen*/		
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['tb_absensi'] = $this->m_admin->get_keyword($keyword);
		// $data['tb_absensi'] = $this->m_admin->get_data_absensi()->result();
		$this->load->view('templates/headerlte');
		$this->load->view('backend/berkas/absensi/v_absensi2',$data);
		$this->load->view('backend/admin/sidebar');
		$this->load->view('templates/footerlte');			
	}



}


 ?>