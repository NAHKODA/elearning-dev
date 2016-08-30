<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'active_dashboard' =>TRUE
		);
		if($this->session->userdata('dosen_id'))
		{
			$this->load->view('_part/header');
			$this->load->view('_part/sidebar',$data);
			$this->load->view('_part/navbar');
			$this->load->view('layout/dashboard');
			$this->load->view('_part/footer');			
		}else{
			redirect('course/dosen/');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}