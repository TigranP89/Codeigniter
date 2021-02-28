<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Note extends CI_Controller
{
	
    public function __construct()
	{
            parent::__construct();
            $this->load->library('session');
            $this->load->library('table');
            $this->load->model('note_model');
            $this->load->model('user_model');
            $this->load->model('contact_model');
	}

    public function index(){		
	$userId = $this->session->userdata('userId');
		
	$data =  array(); 
	$data['contents']= $this->note_model->get_user_notes($userId);	// add $contents to the new array
	$data['instant_req']= $this->user_model->input_user_notes($userId);// add $instant_req to the new array
        
        
        
	$this->load->view('templetes/header');		
	$this->load->view('note/index', $data);	//sent $data($contents,$instant_req,...,...) array to viwe
	$this->load->view('templetes/footer');		
    }

    public function user_note(){		
	$this->form_validation->set_rules('text', 'Enter some text', 'required');		
	if ($this->form_validation->run() == TRUE) {
            $userId = $this->session->userdata('userId');		
            $data= array(
		'text' => $_POST['text'],
		'title' => $_POST['title'],				
		'date' => date('l jS \of F Y h:i:s A'),
		'user_id' => $userId
		);			
            $this->note_model->insert_user_note($data);
	}
	redirect('/note/index');
    }
    public function input_button(){
        $userId = $this->session->userdata('userId');
        
        $data =  array();  // create a new array
        
         if ($userId!=""){
            $user_info=$this->user_model->personal_info($userId);
            $data['user_full_name']=$user_info->fname ." ". $user_info->lname;
            
        }
        else {
            $data['user_full_name'] ="";
        }
        
        $this->load->view('templetes/header');
        $this->load->view('note/inputForm', $data);
        $this->load->view('templetes/footer');
    }

    public function showAllNotes(){
	redirect('http://localhost/');
    }

    public function clearNote(){
	$userId = $this->session->userdata('userId');	
	$this->note_model->clear_user_notes($userId);
	redirect('/note/index');
    }

    public function logoutSession(){
	$this->session->set_userdata('userId', "");
    	redirect('home/index');
    }

    public function deleteNote(){		
	$this->note_model->delet_user_notes($_POST['deletId']);
	redirect('/note/index');
    }

    public function editNote(){
        $userId = $this->session->userdata('userId');
        
	$id = $_POST['editId'];		
	$data =  array();  // create a new array
	$data['note_info']= $this->note_model->get_note($id); // add $note_info to the new array
        
        if ($userId!=""){
            $user_info=$this->user_model->personal_info($userId);
            $data['user_full_name']=$user_info->fname ." ". $user_info->lname;
            
        }
        else {
            $data['user_full_name'] ="";
        }
		
	$this->load->view('templetes/header');		
	$this->load->view('note/edit', $data);	//sent $data($note_info,...,...) array to viwe
	$this->load->view('templetes/footer');
    }

    public function saveNoteEdit(){			
	$this->note_model->edit_user_note($_POST['title'],$_POST['text'],$_POST['noteId']);
	redirect('/note/index');
    }
    
     public function fromNoteToConatct(){			
	
	redirect('/contacts/index');
    }
    
    public function showUserNote(){
	redirect('/note/index');
    }
    
    
}
