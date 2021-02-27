<?php 

class Contact_model extends CI_Model {

    public function __construct() {
	parent::__construct();
    }
	
    /*Contacts*/
    public function insert_number($userId){
	$data=array(
		'contname'=>$_POST['contname'],
		'phone'=>$_POST['phone'],
		'user_id' => $userId,
            );

	$this->db->insert('contact',$data);
	return TRUE;
    }
    /*Contacts*/
    public function get_user_contact($userId){

	$query = $this->db->query("SELECT * FROM contact WHERE user_id = " . 	$userId);		
	return $query->result();
    }
    /*Contacts*/
    public function delet_user_contact($id) {
	$this->db->query("DELETE FROM contact WHERE id = " . 	$id);
	return true;
    }
    /*Contacts*/
    public function get_contact($id){
	$query = $this->db->query("SELECT * FROM contact WHERE id= ".  $id);
	return $query->result()[0];
    }
    /*Contacts*/
    public function edit_contact($contname,$phone,$id){
	$this->db->query("UPDATE contact SET contname='" . $contname . "' ".",phone='" . $phone . "'"."WHERE id = " .  $id);
	return TRUE;
    }
}
?>