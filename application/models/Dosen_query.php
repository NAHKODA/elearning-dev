<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_query extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function profile()
	{
		//get session dosen
		$dosen_id = $this->session->userdata("dosen_id");
		//select data menurut nidn
		$query = $this->db->query("SELECT * FROM dosen WHERE nidn ='$dosen_id'");
		if($query->num_rows() == 0)
		{
			return FALSE;
		}else{
			return $query->result();
		}
	}
}