<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Blog extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('blog_model');

			//$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->library('session');



			//$this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
		}
		/*public function is_loggedin(){
			return isset($this->session->userId)&&isset($this->session->user);
		}*/
		public function index()
		{
			$data['loggedin']=false;

			if(isset($_COOKIE["rememberMe"])) {
					$user=$this->blog_model->relogin($_COOKIE["rememberMe"]);
					if(!is_null($user)){
						$this->session->user=$user['name'];
						$data['username'] = $user['name'];
						$this->session->userId = $user['id'];
						$data['id'] = $user['id'];;
						$data['loggedin']=true;
					}
			}else
				if($this->isloggedin()){
					$data['username'] = $this->session->user;
					$data['id'] = $this->session->userId;
					$data['loggedin']=true;
				}
							
			$data['base_url'] = base_url();
		    $data['blogs'] = $this->blog_model->get_posts();
		    
		    /*$data['link1']=site_url("blog/index");
		    $data['link2']=site_url()."/blog/login";
		    $data['link3']=site_url()."/blog/register";*/
		   
		    $this->smarty->view('application/views/templates/index_template.tpl', $data);		
		}
		public function isloggedin(){
			return isset($this->session->userId)&&isset($this->session->user);
		}
		public function register()
		{
			if($this->isloggedin())
				redirect('blog');
			

            $this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.name]', array('required' => 'You must provide a %s.' ,'is_unique'     => 'This %s already exists.'));
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('required' => 'You must provide a %s.' ,'is_unique'     => 'This %s already exists.'));
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('passwordConfirmation', 'Password Confirmation', 'required|matches[password]', array('required' => 'You must provide a %s.'));
			


			$data['base_url'] = base_url();
            if ($this->form_validation->run() == FALSE)
            {
            	$data['message'] = validation_errors("<br>");
            	
            	$data['name'] = set_value('name');
            	$data['email'] = set_value('email');
                $this->smarty->view('application/views/templates/register_template.tpl', $data);
            }
            else
            {
            	if($this->blog_model->set_user( $_POST['name'], $_POST['email'], hash('sha512',$_POST['password']))==1){
               		$data['background']="success";
               		$name = $_POST['name'];
               		$data['message']="User $name created sucessfully";
               	}else{
               		$data['background']="danger";
               		$data['message']="An internal error has ocurred please try again at a later time";
               	}	
               	$data['loggedin']=false;
               	$this->smarty->view('application/views/templates/message_template.tpl', $data);
            }
		}
		public function check_email_exists($email_check){
			return $this->blog_model->email_exists($email_check)==0?false:true;
		}

		public function logout(){
			if(!$this->isloggedin())
				redirect('blog');

			$data['base_url'] = base_url();
	   		$data['background']="success";
	   		$name = $this->session->user;
	   		$data['message']="User $name logged out sucessfully";
	   		$data['loggedin']=false;
	   		$this->blog_model->forgetMe();
	   		$this->session->sess_destroy();
	   		$this->smarty->view('application/views/templates/message_template.tpl', $data);
			
		}
		public function login()
		{
			if($this->isloggedin())
				redirect('blog');


            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email_exists', array('required' => 'You must provide a %s.' ,'check_email_exists'     => 'This %s does not exist please register first.'));
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]', array('required' => 'You must provide a %s.'));
			


			$data['base_url'] = base_url();
            if ($this->form_validation->run() == FALSE)
            {
            	$data['message'] = validation_errors(' ', '<br>');
            	
            	$data['email'] = set_value('email');
            	//echo $this->blog_model->email_exists($data['email']);
                $this->smarty->view('application/views/templates/login_template.tpl', $data);
            }
            else
            {
            	
            	$user=$this->blog_model->login_user( $_POST['email'], hash('sha512',$_POST['password']));
				if(is_null($user)){  		
               		$data['message']="The password entered does not match";
               		$data['email'] = set_value('email');
               		$this->smarty->view('application/views/templates/login_template.tpl', $data);
               	}else{
               		$data['background']="success";
               		$name = $user['name'];
               		$id = $user['id'];
               		$data['message']="User $name logged in sucessfully";

               		$this->session->user=$name;
               		$this->session->userId=$id;
               		$data['loggedin']=true;
               		$data['username'] = $this->session->user;

               		if(isset($_POST['autologin'])){
               			$this->blog_model->rememberMe($id);
			 		}else{
			 			$this->blog_model->forgetMe();
					}




               		$this->smarty->view('application/views/templates/message_template.tpl', $data);
               	} 
            }    
		}
		public function post($postid = '')
		{
			$data['base_url'] = base_url();
			$data['background']="danger";
			$data['loggedin']=false;
			if(!$this->isloggedin()){
               	$data['message']="You need to login before posting";
               	$this->smarty->view('application/views/templates/message_template.tpl', $data);
               	return;
			}
			$data['loggedin']=true;
			$data['username'] = $this->session->user;
			$data['action']="";
			$data['content']="";
			if (!empty($postid)) {
				$post=$this->blog_model->getpost($postid);
				if(is_null($post)){
               		$data['message']="The selected post does not exist";
               		$this->smarty->view('application/views/templates/message_template.tpl', $data);
               		return;
				}else
				{
					if($post['user_id']!=$this->session->userId){
	               		$data['message']="You can only edit your own posts";
	               		$this->smarty->view('application/views/templates/message_template.tpl', $data);
	               		return;	
					}else{
						$data['content']=$post['content'];
						$data['action']="/".$post['id'];
					}
				}
   			}

   			$data['base_url'] = base_url();
			$data['id'] = $this->session->userId;
   			$this->smarty->view('application/views/templates/blog_template.tpl', $data);
		}
		public function updatepost($postid = ''){
			$data['base_url'] = base_url();
			$data['background']="danger";
			$data['loggedin']=false;
			if(!$this->isloggedin()){
               	$data['message']="You need to login before posting";
               	$this->smarty->view('application/views/templates/message_template.tpl', $data);
               	return;
			}
			$data['loggedin']=true;
			$data['username'] = $this->session->user;
			$error=false;
			if (!empty($postid)) {
				if(!$this->blog_model->updatepost($postid	,trim($_POST['message'])))
					$error=true;
			}else{
				if(!$data['message']=$this->blog_model-> createpost(trim($_POST['message']),$this->session->userId))
					$error=true;
			}
			if($error){
				$data['message']="A database error ocurred please try again later";
               	$this->smarty->view('application/views/templates/message_template.tpl', $data);
               	return;
			}
			redirect('blog');
		}
		public function passwordReset(){
			if($this->isloggedin())
				redirect('blog');
			$data['message']='';
			$data['base_url'] = base_url();


			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email_exists', array('required' => 'You must provide a %s.' ,'check_email_exists'     => 'This %s does not exist please register first.'));

			$data['base_url'] = base_url();
            if ($this->form_validation->run() == FALSE)
            {
            	$data['message'] = validation_errors("<br>");
            	
            	$data['email'] = set_value('email');

				$this->smarty->view('application/views/templates/password_reset_template.tpl', $data);
            }
            else
            {
            	$time=time();
				$reset_digest = substr(md5($time),0,32);
				
				$result = emailUser($reset_digest,$email);
				
				
				if($result){
					$msg="Olá Sr.(a) $name
				Para obter uma nova password clique no link

				http://all.deei.fct.ualg.pt/~a62362/LAB8/new_password.php?token=$reset_digest

				Este link tem a validade de uma hora.
				Se NÃO pediu uma nova password IGNORE este email.


				Cumprimentos,
				webmaster!
				Página Web: http://intranet.deei.fct.ualg.pt/~a62362/Lab8/
				E-mail: a62362@deei.fct.ualg.pt
				NOTA: Não responda a este email, não vai obter resposta!";



				mail($email,"Password Reset",$msg);
				$data['background']="success";
				$data['message']="Password reset activated! <br> Email sent to you :-)";
				$this->smarty->view('application/views/templates/message_template.tpl', $data);
				
				}else{
					$data['background']="danger";
					$data['message']="An error has ocorred please try again later";
					$this->smarty->view('application/views/templates/message_template.tpl', $data);
				}
			}
		}	
	}
?> 