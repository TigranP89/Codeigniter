<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Personal extends CI_Controller
{
	
    public function __construct()
	{
            parent::__construct();
            $this->load->model('user_model');
            $this->load->model('contact_model');		
	}

    public function index(){
        $userId = $this->session->userdata('userId');
       
        $data =  array();
	$data['user_info']= $this->user_model->personal_info($userId);
		

        $this->load->view('templetes/header');		
	$this->load->view('personal/index', $data);	
	$this->load->view('templetes/footer');
    }

    public function showAllNotes(){
	redirect('http://localhost/');
    }

    public function showUserNote(){
	redirect('/note/index');
    }

    public function logoutSession(){		
	$this->session->set_userdata('userId', "");
    	redirect('home/index');
    }

    public function saveEdit(){		
	$userId = $this->session->userdata('userId');		
	$this->user_model->update_user($userId);
	redirect('personal/index');
    }
    
    public function contacts(){
    
        redirect('contacts/index');
    
    }
    
}    