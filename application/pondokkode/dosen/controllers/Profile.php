<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		//load model
		$this->load->model("dosen_query");
		//create var data
		$data = array(
			'active_profile' =>TRUE,
			'data_dosen'	 =>$this->dosen_query->profile()
		);		
		if($this->session->userdata('dosen_id'))
		{
			$this->load->view('_part/header');
			$this->load->view('_part/sidebar',$data);
			$this->load->view('_part/navbar');
			$this->load->view('layout/profile');
			$this->load->view('_part/footer');			
		}else{
			redirect('course/dosen/');
		}

	}

	public function update()
	{
		//get code here
	}

}
