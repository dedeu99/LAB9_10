<?php
class Blog_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts()
	{
		$query_RAW = "SELECT * FROM microposts ORDER BY created_at DESC";
		$query = $this->db->query($query_RAW);
		return $query->result_array();	
	}
	public function set_user($name,$email,$password){
		$query_RAW = "INSERT INTO users (name,email,created_at,updated_at,password_digest,remember_digest,admin) VALUES ('$name','$email',NOW(),NOW(),'$password',NULL,0)";
		return $this->db->query($query_RAW);
	}
	public function email_exists($email){
		return $this->db->where('email',$email)->from("users")->count_all_results();
	}

	public function login_user( $email, $hashedpassword){
		$query_RAW = "SELECT name,id FROM users WHERE email = '$email' AND password_digest='$hashedpassword'";
		$query = $this->db->query($query_RAW);
		$arr=$query->result_array();
		if(count($arr)==1)
			return $arr[0];
		else	
			return NULL;	
	}
}
?>