<?php 

class User_model extends CI_Model {

    public function __construct() {
	parent::__construct();
    }
    /*Login*/	
    public function login_users($email,$password){        
	$string = "SELECT * FROM user WHERE email  = '" . $email ."' " . "AND password  = '" . $password ."'";	
	$query = $this->db->query($string);
        return $query->row_array($string);
    }
    /*Note*/
    public function input_user_notes($userId){
	$query = $this->db->query("SELECT * FROM user WHERE id = " .  $userId);		
	return $query->result();
    }
    /*Registration*/
    public function insert_user($fname,$lname,$email,$password){
	$data= array(
            'fname'=>$_POST['fname'],
            'lname'=>$_POST['lname'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'date'=> date('l jS \of F Y h:i:s A')
            );		
	$this->db->insert('user',$data);
	return TRUE;
    }
    /*Personal*/
    public function personal_info($userId){
	$query=$this->db->query("SELECT * FROM user WHERE id = " .  $userId);
	return $query->result()[0];
    }
    /*Personal*/
    public function update_user($userId){
	$query=$this->db->query("UPDATE user SET fname='" . $_POST['fname'] . "' ".",lname='" . $_POST['lname'] . "'"."WHERE id = " .  $userId);
	return TRUE;
    }
}
?>