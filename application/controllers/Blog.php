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

		    /*$data['link1']=site_url("blog/index");
		    $data['link2']=site_url()."/blog/login";
		    $data['link3']=site_url()."/blog/register";*/
		   
		    $this->smarty->view('application/views/templates/index_template.tpl', $data);		
		}
		public function register()
		{
			
		   
		    $this->smarty->view('application/views/templates/register_template.tpl');		
		}
		public function login()
		{
			
		    $this->smarty->view('application/views/templates/login_template.tpl');		
		}
	}
?> 