<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Auth extends CI_controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('auth'); 
		}

		$this->form_validation->set_message('required','kolom {field} harus diisi');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() ==false )
		 {
			$data['title'] = 'Pendataran Online';
			$this->load->view('templates/lteheaderlogin');
			$this->load->view('frontend/auth/login');
			$this->load->view('templates/ltefooterlogin');
		}
		else
		{
			$this->_login();
		}
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		//query
		$users = $this->db->get_where('users', ['email'=> $email])->row_array();
		//untuk narik data sesuai data user login
		
		if ($users) 
		{
			//jika usernya aktif
			if ($users['is_active'] ==1) 
			{
				if(password_verify($password, $users['password']))
				{
					$data = ['email'=> $users['email'],
							 'role_id'=> $users['role_id'],
							 'id'	=> $users['id']
							];
							
							$this->session->set_userdata( $data );

							
							if ($users['role_id']==2) 
							{
								redirect('admin');
							}
							else{
									redirect('user');
								}


				}
				else
				{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">password salah</div>');
				redirect('auth');				
				}
			}
			/*else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">email blum diaktifkan</div>');
				redirect('auth');		
			}*/
		}
		else
		{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">email blum terdaftar daftar</div>');
						redirect('auth');
		}
	}

	public function registrasi()
	{
		if ($this->session->userdata('email')) {
			redirect('admin'); 
		}

		$this->form_validation->set_message('required','Kolom {field} harus diisi');

		$this->form_validation->set_rules('name','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]',
			[
				'is_unique'=> 'email sudah terdaftar, coba masukkan email baru.',
				'required'=> 'kolom {field} harus diisi']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
			'matches'=> 'password tidak sama',
			'min_length'=> 'password terlalu pendek']);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

	//ini untuk mengarahkan benar tidaknya	
		if ($this->form_validation->run()==false) {
			
		$data['title'] = 'Pendataran Online';
		$this->load->view('templates/lteheaderlogin');
		$this->load->view('frontend/auth/registrasi');
		$this->load->view('templates/ltefooterlogin');
		}
		else{
			$data = [
						//true untuk menghindari xxs chros
						'name'=> htmlspecialchars($this->input->post('name', true)),
						'email'=> htmlspecialchars($this->input->post('email', true)),
						'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
						'role_id' =>1,
						'image'=>'',
						'is_active'=>1,
						'date_created'=> time()
						];

						$this->db->insert('users', $data);

						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">berhasil regis, silahkan masuk</div>');
						redirect('auth');
		}

	}

	

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">berhasil keluar ^_^</div>');
		redirect('auth');

	}
}
