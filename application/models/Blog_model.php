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

	public function getpost($postid){
		$query_RAW = "SELECT * FROM microposts WHERE id = '$postid'";
		$query = $this->db->query($query_RAW);
		$arr=$query->result_array();
		if(count($arr)==1)
			return $arr[0];
		else	
			return NULL;
	}

	/*UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;*/
	public function updatepost($postid,$content){
		$query_RAW = "UPDATE microposts SET content='$content', updated_at=NOW() where id = $postid";
		return $this->db->query($query_RAW)->num_rows();
	}

	/*INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

INSERT INTO table_name
VALUES (value1, value2, value3, ...);*/
	public function createpost($content,$userid){
		$query_RAW = "INSERT INTO microposts VALUES ('$content',$userid,NOW(),NOW())";
		$query = $this->db->query($query_RAW);
		return $query->result_array();
	}
}
?>