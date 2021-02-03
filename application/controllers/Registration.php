<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Registration extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){		
	    
		$this->load->view('templetes/header');		
		$this->load->view('registration/index');
		$this->load->view('templetes/footer');
	
		
	}

	public function submit_form(){
		
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('repass', 'Repeat password', 'required|min_length[5]|matches[password]');
		
		//echo 'OK2'; exit;

		
		if ($this->form_validation->run() == TRUE) {
			
			$data= array(
				'fname'=>$_POST['fname'],
				'lname'=>$_POST['lname'],
				'email'=>$_POST['email'],
				'password'=>$_POST['password'],
				'date'=> date('l jS \of F Y h:i:s A')
			);
			
			$this->db->insert('user',$data);
			

			
		}
		
		redirect('/login/index');
	
	}
}

