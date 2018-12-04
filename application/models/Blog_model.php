<?php
class Blog_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts()
	{
		$query_RAW = //"SELECT * FROM microposts ORDER BY created_at DESC";

		"SELECT microposts.id, content, user_id,microposts.created_at,microposts.updated_at,name FROM microposts join users on user_id=users.id ORDER BY created_at DESC";

		$query = $this->db->query($query_RAW);
		$arr=$query->result_array();
		for($i=0;$i<count($arr);++$i){
			$arr[$i]['replies']=$this->get_replies($arr[$i]['id']);
			//var_dump($arr[$i]);
			//echo(PHP_EOL);
		}
		return $arr;



	}
	public function register_user($name,$email,$password){
		$query_RAW = "INSERT INTO users (name,email,created_at,updated_at,password_digest,remember_digest,admin) VALUES ('$name','$email',NOW(),NOW(),'$password',NULL,0)";
		return $this->db->query($query_RAW);
	}
	public function email_exists($email){
		return $this->db->where('email',$email)->from("users")->count_all_results();
	}

	public function validate_user( $email, $hashedpassword){
		$query_RAW = "SELECT name,id FROM users WHERE email = '$email' AND password_digest='$hashedpassword'";
		$query = $this->db->query($query_RAW);
		$arr=$query->result_array();
		if(count($arr)==1)
			return $arr[0];
		else	
			return NULL;	
	}

	public function get_blog($postid){
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
	public function update_blog($postid){
		$content=$_POST['message'];
		$query_RAW = "UPDATE microposts SET content='$content', updated_at=NOW() where id = $postid";
		return $this->db->query($query_RAW);
	}

	/*INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

INSERT INTO table_name
VALUES (value1, value2, value3, ...);*/
	public function new_blog(){
		$content=$_POST['message'];
		$userid=$this->session->userId;
		$query_RAW = "INSERT INTO microposts (content,user_id,created_at,updated_at) VALUES ('$content',$userid,NOW(),NOW())";
		return $this->db->query($query_RAW);
	}

	public function rememberMe($id){
		$query_RAW = "UPDATE users SET remember_digest = \"".substr(md5(time()),0,32)."\" WHERE id=$id";
		$res= $this->db->query($query_RAW);
		if($res)
			setcookie("rememberMe", substr(md5(time()),0,32), time() + (3600 * 24 * 30), "/"); 
		return $res;
	}

	public function forgetMe(){
		unset($_COOKIE['rememberMe']);
		setcookie('rememberMe', null, 1, '/');
	}

	public function relogin($digest){

		$query_RAW = "SELECT id,name FROM users WHERE remember_digest='$digest'";
		$query = $this->db->query($query_RAW);
		$arr=$query->result_array();
		if(count($arr)==1)
			return $arr[0];
		else	
			return NULL;
	}

	public function emailUser($reset_digest,$email){

		$query_RAW = "UPDATE users SET reset_digest='$reset_digest', reset_sent_at='".date("Y-m-d H:i:s")."' WHERE email='$email'";
		$this->db->query($query_RAW);

		$query_RAW = "SELECT * from users WHERE email='$email'";
		$res= $this->db->query($query_RAW);
		return $res->result_array();
		
	}

	public function new_reply($blog_id)
	{
		$content=$_POST['message'];
		$userid=$this->session->userId;
		$query_RAW = "INSERT INTO replies (content,user_id,micropost_id,created_at) VALUES ('$content',$userid,$blog_id,NOW())";
		return $this->db->query($query_RAW);
	}	
	
	
	
	public function get_replies($id)
	{
		$sql="SELECT replies.id,content,user_id,micropost_id,replies.created_at,name FROM replies JOIN users ON users.id=user_id WHERE replies.micropost_id=$id ORDER BY replies.created_at DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


/*
	"SELECT microposts.id, content, user_id,microposts.created_at,microposts.updated_at,name FROM microposts join users on user_id=users.id ORDER BY created_at DESC";*/
}
?>