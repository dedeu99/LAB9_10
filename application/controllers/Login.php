<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Login extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$data['hidden'] = 'hidden';
			$data['hidden2'] = '';
			$data['USERNAME'] = '';	
			$data['USER_ID'] = '';
			
		    
		    $data['blogs'] = NULL;

		    /*$data['link1']=site_url("blog/index");
		    $data['link2']=site_url()."/blog/login";
		    $data['link3']=site_url()."/blog/register";*/
		   
		    $this->smarty->view('application/views/templates/index_template.tpl', $data);		
		}


		public function login()
		{
			$data['hidden'] = 'hidden';
			$data['hidden2'] = '';
			$data['USERNAME'] = '';	
			$data['USER_ID'] = '';
			
		    
		    $data['blogs'] = NULL;

		    /*$data['link1']=site_url("blog/index");
		    $data['link2']=site_url()."/blog/login";
		    $data['link3']=site_url()."/blog/register";*/
		   
		    $this->smarty->view('application/views/templates/index_template.tpl', $data);		
		}
	}
?> 