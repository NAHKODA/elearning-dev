<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/home');
		$this->load->view('_part/footer');
	}

	/* start module mahasiswa */
	public function login_mhs()
	{
		//load model
		$this->load->model('mahasiswa_auth');
		//get form data
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$token    = $this->input->post('token_encryption');
		//checking 
		$check = $this->mahasiswa_auth->login('mahasiswa', array('username' =>$username), array('password' =>$password));
		if($check !=FALSE){
			foreach ($check as $mahasiswa){
				if($mahasiswa->kode_jurusan !== $token) {
						$data = array(
									'error' => '<i class="icon-close"></i> Anda tidak terdaftar di prodi ini.',
									'prodi' => 'Anda tidak terdaftar di prodi ini.',
									'token' => $token
						);
						$this->load->view('_part/header',$data);
						$this->load->view('layout/login');
						$this->load->view('_part/footer');
				}else{
						$this->session->set_userdata(array(
							'id_mhs'   => $mahasiswa->nim,
							'username' => $mahasiswa->username,
							'password' => $mahasiswa->password,
							'prodi'	   => $token
						));
					redirect('mahasiswa/dashboard');
				}
			}
		}else{
			$data = array(
						'error' => '<i class="icon-shield"></i> <strong>username</strong> dan <strong>password</strong> Anda salah.',
						'prodi' => 'username dan password Anda salah.',
						'token' => $token
				);
			$this->load->view('_part/header',$data);
			$this->load->view('layout/login');
			$this->load->view('_part/footer');
		}
	}
	/* end module mahasiswa */

	/* start module dosen */
	public function dosen()
	{
		if($this->session->userdata('dosen_id'))
		{
			redirect('dosen/dashboard/');
		}else{
			$this->load->view('_part/header');
			$this->load->view('layout/login_dosen');
			$this->load->view('_part/footer');	
		}	
	}

	public function login_dosen()
	{
		//load model dosen
		$this->load->model('dosen_auth');
		//get form data
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//checking
		$check 	  = $this->dosen_auth->login('dosen', array('username' =>$username), array('password' =>$password));
		if($check != FALSE){
			foreach($check as $dosen){
				$this->session->set_userdata(array(
					'dosen_id'   =>$dosen->nidn,
					'nama_dosen' =>$dosen->nama_dosen,
					'username'	 =>$dosen->username,
					'password'	 =>$dosen->password
				));
			redirect('dosen/dashboard');
			}
		}else{
			//create var data error
			$data = array(
						'error' => '<i class="icon-shield"></i> <strong>username</strong> dan <strong>password</strong> Anda salah.'
			);	
			$this->load->view('_part/header',$data);
			$this->load->view('layout/login_dosen');
			$this->load->view('_part/footer');			
		}
	}

	/* end module dosen */

	public function forgot_password()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/forgot');
		$this->load->view('_part/footer');
	}

	public function url()
	{
		echo "http://".$_SERVER['HTTP_HOST'].
str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	}

}
