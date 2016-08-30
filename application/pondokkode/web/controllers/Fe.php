<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fe extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/fe/home');
		$this->load->view('_part/footer');
	}

	public function login_fe()
	{
		$data  = array(
					'token' =>'0514',
					'prodi' =>'Manajemen'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}
}