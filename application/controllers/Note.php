<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Note extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
	}

	public function index(){
		
		
		
			
		//echo $this->session->userdata('userId');exit;
		
		$this->load->view('templetes/header');		
		$this->load->view('note/index');
		$this->load->view('templetes/footer');

		

		
		
	}

	public function user_note(){

		//echo "ok 4";
		$this->form_validation->set_rules('text', 'Enter some text', 'required');

		if ($this->form_validation->run() == TRUE) {

			$string = "SELECT user_id FROM note";
			$query = $this->db->query($string);
			$row = $query->row_array();

            if (isset($row)){
    			
				echo $row['user_id'] ." ";
  			    
			}
			
			$data= array(
				'text'=>$_POST['text'],				
				'date'=> date('l jS \of F Y h:i:s A')
			);
			$this->db->insert('note',$data);
			
		
		

		

		}
		
		

		
		redirect('/note/index');


	}

	
}
