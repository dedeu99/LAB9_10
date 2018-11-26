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
	public function registerUser(name,email,password)
	{
		echo $name;
		/*$query_RAW = INSERT INTO users (name,email,created_at,updated_at,password_digest,remember_digest,admin) VALUES ('$name','$email',NOW(),NOW(),'$password',NULL,0);
		$query = $this->db->query($query_RAW);
		return $query->result_array();*/
	}
}
?>