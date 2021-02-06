<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Note extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('table');
		
	}

	public function index(){
		
		
		$query = $this->db->query("SELECT * FROM note WHERE user_id = " . $this->session->userdata('userId'));
        //$query->result()
		$data =  array();  // create a new array
		$data['contents']= $query->result(); // add $cleanarray to the new array
		
		
		$this->load->view('templetes/header');		
		$this->load->view('note/index', $data);	
		$this->load->view('templetes/footer');

		

		
		
	}

	public function user_note(){

		//echo "ok 4";
		$this->form_validation->set_rules('text', 'Enter some text', 'required');

		
		if ($this->form_validation->run() == TRUE) {

			
			


			$name = $this->session->userdata('userId');
        
			
			$data= array(
				'text' => $_POST['text'],				
				'date' => date('l jS \of F Y h:i:s A'),
				'user_id' => $name
			);
			$this->db->insert('note',$data);			

		}
		
		

		redirect('/note/index');
	}


	public function getNote(){
		/*$string = "SELECT * FROM note";
		$query = $this->db->query($string);
		echo $this->table->generate($query);exit;*/
		

	}

	
}
