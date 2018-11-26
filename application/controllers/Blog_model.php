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
	public function register_user()
	{
		
		echo "HELLO";
		
		return "asd";
	}
}
?>