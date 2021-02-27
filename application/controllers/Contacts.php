<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Contacts extends CI_Controller
{
	
    public function __construct()
        {
            parent::__construct();		
            $this->load->model('contact_model');
            $this->load->model('user_model');
        }
        
    public function index(){
        $userId = $this->session->userdata('userId');
        
        $data =  array();
        $data['contact_table']=$this->contact_model->get_user_contact($userId);
        $data['instant_req']= $this->user_model->input_user_notes($userId);// add $instant_req to the new array


	$this->load->view('templetes/header');		
	$this->load->view('contacts/index',  $data);
	$this->load->view('templetes/footer');
    }

    public function input_button(){
        $this->load->view('templetes/header');
        $this->load->view('contacts/inputForm');
        $this->load->view('templetes/footer');
    }
    
    public function contact_insert(){
	$userId = $this->session->userdata('userId');

	$this->contact_model->insert_number($userId);
	redirect('contacts/index');
    }
    
    public function deleteContact(){		
	$this->contact_model->delet_user_contact($_POST['deletContId']);
	redirect('/contacts/index');
    }
    
    public function editContact(){
	$id = $_POST['editContId'];		
	$data =  array();  // create a new array
	$data['contact_info']= $this->contact_model->get_contact($id); // add $contact_info to the new array		
		
	$this->load->view('templetes/header');		
	$this->load->view('contacts/edit', $data);	//sent $data($contact_info,...,...) array to viwe
	$this->load->view('templetes/footer');
    }
    public function saveContactEdit(){			
	$this->contact_model->edit_contact($_POST['contname'],$_POST['phone'],$_POST['contactId']);
	redirect('/contacts/index');
    }

    public function showAllNotes(){
	redirect('http://localhost/');
    }

    public function showUserNote(){
	redirect('/note/index');
    }
}