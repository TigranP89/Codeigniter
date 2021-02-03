<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	
		
	}

	public function index(){
		
		if ($this->session->userdata('userId')) 
		{
			redirect('/note/index');
		}	
		
		$this->load->view('templetes/header');		
		$this->load->view('login/index');
		$this->load->view('templetes/footer');
		
		
	}

	public function login_form(){
		//echo 'OK3';

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if ($this->form_validation->run() == TRUE) { 
			$string = "SELECT * FROM user WHERE email  = '" . $_POST['email'] ."' " . "AND password  = '" . $_POST['password'] ."'";
			//echo $string; exit;
			$query = $this->db->query($string);

			$row = $query->row_array();


			
			if (isset($row))
			{
				
				$this->session->set_userdata('userId', $row['id']);
				
				
				
				
				
				redirect('/login/index');
				
			}
			else
			{
				echo "No User";
			}
			
		}

	}
}

