<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fti extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/fti/home');
		$this->load->view('_part/footer');
	}

	public function login_si()
	{
		$data  = array(
					'token' =>'0205',
					'prodi' =>'Sistem Informasi'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_ti()
	{
		$data = array(
					'token' =>'0204',
					'prodi' =>'Teknik Informatika'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}	

}
