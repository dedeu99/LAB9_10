<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Blog extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('blog_model');

			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->library('session');
		}
		public function index()
		{
			$data['hidden'] = 'hidden';
			$data['hidden2'] = '';
			$data['USERNAME'] = '';	
			$data['USER_ID'] = '';
		    $data['blogs'] = $this->blog_model->get_posts();
		    $data['base_url'] = base_url();
		    /*$data['link1']=site_url("blog/index");
		    $data['link2']=site_url()."/blog/login";
		    $data['link3']=site_url()."/blog/register";*/
		   
		    $this->smarty->view('application/views/templates/index_template.tpl', $data);		
		}
		public function register()
		{
			$this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]', array('required' => 'You must provide a %s.' ,'is_unique'     => 'This %s already exists.'));

            $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]', array('required' => 'You must provide a %s.'));
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]', array('required' => 'You must provide a %s.' ,'is_unique'     => 'This %s already exists.'));



            if ($this->form_validation->run() == FALSE)
            {
            	$data['message'] = '';
                $this->smarty->view('application/views/templates/register_template.tpl', $data);
            }
            else
            {
                    $this->load->view('formsuccess');
            }
		}
		public function login()
		{
			
		    $this->smarty->view('application/views/templates/login_template.tpl');		
		}
	}
?> 