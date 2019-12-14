<?php 
// defined('BASEPATH') || exit('No direct script access allowed');

class M_admin extends CI_model
{
	/*insert data absensi*/
/*	function masuk_dataabsensi()
	{
		$data = [*/
				/* 'id_guru'=>htmlspecialchars($this->input->post('id_guru',TRUE)),
				'nama'=>htmlspecialchars($this->input->post('nama',TRUE)),
				'mp'=>htmlspecialchars($this->input->post('mp',TRUE)),
				'tingkat_mengajar'=>htmlspecialchars($this->input->post('tingkat_mengajar',TRUE)),
				'kelas'=>htmlspecialchars($this->input->post('kelas',TRUE)),
				'tms'=>htmlspecialchars($this->input->post('tms',TRUE)),
				'tmh'=>htmlspecialchars($this->input->post('tmh',TRUE)),
				'infal'=>htmlspecialchars($this->input->post('infal',TRUE)),
				'tms2'=>htmlspecialchars($this->input->post('tms2',TRUE)),
				'tmh2'=>htmlspecialchars($this->input->post('tmh2',TRUE)),
				'infal2'=>htmlspecialchars($this->input->post('infal2',TRUE)),
				'tms3'=>htmlspecialchars($this->input->post('tms3',TRUE)),
				'tmh3'=>htmlspecialchars($this->input->post('tmh3',TRUE)),
				'infal3'=>htmlspecialchars($this->input->post('infal3',TRUE)),
				'tms4'=>htmlspecialchars($this->input->post('tms4',TRUE)),
				'tmh4'=>htmlspecialchars($this->input->post('tmh4',TRUE)),
				'infal4'=>htmlspecialchars($this->input->post('infal4',TRUE)),
				'tms5'=>htmlspecialchars($this->input->post('tms5',TRUE)),
				'tmh5'=>htmlspecialchars($this->input->post('tmh5',TRUE)),
				'infal5'=>htmlspecialchars($this->input->post('infal5',TRUE)),*/
				/*'total_tms'=>htmlspecialchars($this->input->post('total_tms',TRUE)),
				'total_tmh'=>htmlspecialchars($this->input->post('total_tmh',TRUE)),
				'tottal_infal'=>htmlspecialchars($this->input->post('total_infal',TRUE)),
				'kehadiran'=>htmlspecialchars($this->input->post('kehadiran',TRUE)),
				'kehadiran_infal'=>htmlspecialchars($this->input->post('kehadiran_infal',TRUE)),
				'tidak_masuk'=>htmlspecialchars($this->input->post('tidak_masuk',TRUE)),*/
			/*];
			

			$this->db->insert('tb_absensi',$data);
	}*/

	/*insert data guru*/
	function masuk_dataguru()
	{
		$data = [
				'id_guru'=>htmlspecialchars($this->input->post('id_guru',TRUE)),
				'nama'=>htmlspecialchars($this->input->post('nama',TRUE)),
				'mp'=>htmlspecialchars($this->input->post('mp',TRUE)),
				'kelas'=>htmlspecialchars($this->input->post('kelas',TRUE)),
				'tingkat_mengajar'=>htmlspecialchars($this->input->post('tingkat_mengajar',TRUE)),
			];
			

			$this->db->insert('tb_guru',$data);
	}
	function masuk_databaru()
	{
		$data = [
				'nama'=>htmlspecialchars($this->input->post('nama',TRUE)),
				'mp'=>htmlspecialchars($this->input->post('mp',TRUE)),
				'tingkat_mengajar'=>htmlspecialchars($this->input->post('tingkat_mengajar',TRUE)),
				'kelas'=>htmlspecialchars($this->input->post('kelas',TRUE)),
				'tms'=>htmlspecialchars($this->input->post('tms',TRUE)),
				'tmh'=>htmlspecialchars($this->input->post('tmh',TRUE)),
				'infal'=>htmlspecialchars($this->input->post('infal',TRUE)),
				'tms2'=>htmlspecialchars($this->input->post('tms2',TRUE)),
				'tmh2'=>htmlspecialchars($this->input->post('tmh2',TRUE)),
				'infal2'=>htmlspecialchars($this->input->post('infal2',TRUE)),
				'tms3'=>htmlspecialchars($this->input->post('tms3',TRUE)),
				'tmh3'=>htmlspecialchars($this->input->post('tmh3',TRUE)),
				'infal3'=>htmlspecialchars($this->input->post('infal3',TRUE)),
				'tms4'=>htmlspecialchars($this->input->post('tms4',TRUE)),
				'tmh4'=>htmlspecialchars($this->input->post('tmh4',TRUE)),
				'infal4'=>htmlspecialchars($this->input->post('infal4',TRUE)),
				'infal4'=>htmlspecialchars($this->input->post('infal4',TRUE)),
				'tms5'=>htmlspecialchars($this->input->post('tms5',TRUE)),
				'tmh5'=>htmlspecialchars($this->input->post('tmh5',TRUE)),
				'infal5'=>htmlspecialchars($this->input->post('infal5',TRUE)),
			];
			

			$this->db->insert('tb_absensi',$data);
	}

	/*menampilkan data guru*/
	function get_data_guru()
	{
		return $this->db->get('tb_guru');
	}
	/*menampilkan data absensi*/
	function get_data_absensi(){
		/*$sql = "SELECT 
					b.nama_minggu
					,a.*
					FROM tb_absensi a
					INNER JOIN tb_hitung_hadir b ON a.id_hitung_hadir=b.id
					ORDER by b.nama_minggu, a.id";

		return $this->db->query($sql)->result_array();*/
	/*	$sql = "SELECT 
					b.id_guru
				
					,a.*
					FROM tb_absensi a
					INNER JOIN tb_guru b ON a.id_guru=b.id
					ORDER by b.id_guru,  a.id";

		return $this->db->query($sql)->result_array();*/
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tb_absensi');


	}

	/*edit data absensi*/
	public function edit_dataabsensi($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_dataabsensi($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	/*edit data guru*/
	public function edit_dataguru($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_dataguru($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	/*hapus data Absensi*/
	public function hapus_absensi($where,$table)
	{
		$this->db->delete($table,$where);
	}
	/*hapus data guru*/
	public function hapus_guru($where,$table)
	{
		$this->db->delete($table,$where);
	}

	/*get search data absen*/
	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_absensi');
		$this->db->like('nama',$keyword);
		$this->db->or_like('mp',$keyword);
		$this->db->or_like('tingkat_mengajar',$keyword);
		$this->db->or_like('kelas',$keyword);
		return $this->db->get()->result();
	}


}


 ?>