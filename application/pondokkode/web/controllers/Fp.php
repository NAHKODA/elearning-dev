<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fp extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/fp/home');
		$this->load->view('_part/footer');
	}

	public function login_agribisnis()
	{
		$data  = array(
					'token' =>'0306',
					'prodi' =>'Agribisnis'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_agroekoteknologi()
	{
		$data = array(
					'token' =>'0307',
					'prodi' =>'Agroekoteknologi'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_teknik_pertanian()
	{
		$data = array(
					'token' =>'0309',
					'prodi' =>'Teknik Pertanian'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}		

}
