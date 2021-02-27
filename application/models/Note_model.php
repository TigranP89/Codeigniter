<?php

class Note_model extends CI_Model {

    public function __construct() {
	parent::__construct();		
    }
    /*Note*/
    public function get_user_notes($userId){

	$query = $this->db->query("SELECT * FROM note WHERE user_id = " . 	$userId);		
	return $query->result();
    }
    /*Home*/
    public function get_all_notes(){
	$query = $this->db->query("SELECT * FROM note");
	return $query->result();
    }
    /*Note*/
    public function get_note($id){
	$query = $this->db->query("SELECT * FROM note WHERE id= ".  $id);
	return $query->result()[0];
    }
    /*Note*/
    public function clear_user_notes($userId) {
	$this->db->query("DELETE FROM note WHERE user_id = " . 	$userId);
	return true;
    }
    /*Note*/
    public function delet_user_notes($id) {
	$this->db->query("DELETE FROM note WHERE id = " . 	$id);
	return true;
    }
    /*Note*/
    public function insert_user_note($data){	
	$this->db->insert('note',$data);
	return TRUE;
    }
    /*Note*/
    public function edit_user_note($title,$text,$id){
	$this->db->query("UPDATE note SET title='" . $title . "' ".",text='" . $text . "'"."WHERE id = " .  $id);
	return TRUE;
    }	
}
