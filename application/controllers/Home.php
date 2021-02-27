<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
	
    public function __construct()
        {
            parent::__construct();		
            $this->load->model('note_model');
            $this->load->model('user_model');
        }

    public function index(){
        $userId = $this->session->userdata('userId');
	
        $data =  array();// create a new array
	$data['title'] = "Home";
        
        if ($userId!=""){
            $user_info=$this->user_model->personal_info($userId);
            $data['user_full_name']=$user_info->fname ." ". $user_info->lname;
            
        }
        else {
            $data['user_full_name'] ="";
        }       
        
       
	  
	$data['contents']= $this->note_model->get_all_notes();
       
	if ($this->session->userdata('userId') != "") {
            $classN = "homeDelet";
            $clearButton = "homePage";
        } else {
            $classN = "home";
            $clearButton = "noHomePage";
        }

	$data['classN'] = $classN;
        $data['clearButton'] = $clearButton;

	$this->load->view('templetes/header');
	$this->load->view('home/index', $data);		
	$this->load->view('templetes/footer');
		
    }

	
    public function logoutSession(){
	$this->session->set_userdata('userId', "");
    	redirect('home/index');
    }

    public function showUserNote(){
	redirect('note/index');
    }
}

