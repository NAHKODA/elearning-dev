<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fai extends CI_Controller {

	public function index()
	{
		$this->load->view('_part/header');
		$this->load->view('layout/fai/home');
		$this->load->view('_part/footer');
	}

	public function login_pai()
	{
		$data  = array(
					'token' =>'0101',
					'prodi' =>'Pendidikan Agama Islam'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_pba()
	{
		$data = array(
					'token' =>'0102',
					'prodi' =>'Pendidikan Bahasa Arab'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}

	public function login_es()
	{
		$data = array(
					'token' =>'0103',
					'prodi' =>'Ekonomi Syariah'
		);
		$this->load->view('_part/header',$data);
		$this->load->view('layout/login');
		$this->load->view('_part/footer');
	}		

}
