<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fip extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/fip/home');
		$this->load->view('_part/footer');
	}

	public function login_pb()
	{
		$data  = array(
					'token' =>'0410',
					'prodi' =>'Pendidikan Biologi'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_pf()
	{
		$data = array(
					'token' =>'0411',
					'prodi' =>'Pendidikan Fisika'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_pm()
	{
		$data = array(
					'token' =>'0412',
					'prodi' =>'Pendidikan Matematika'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_pbi()
	{
		$data = array(
					'token' =>'0413',
					'prodi' =>'Pendidikan Bahasa Inggris'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}			

}
