<?php

class adminlogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin_logged_in'))		
				redirect('adminarea');
	}
	
	
	function index()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";		
				
		
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_login_check');		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('adminarea/header', $data);
			$this->load->view('adminarea/login_form', $data);
			$this->load->view('adminarea/footer', $data);				
		}
		else
		{
			 redirect('adminarea'); 
		}			
	} //index
	
	public function login_check($password)
	{
		$username = $this->input->post('username');
		$password=sha1($password);
		$query="SELECT * FROM admin WHERE username='$username' AND password='$password' AND status='Y' LIMIT 1";
		$result = $this->modal_db->get_row($query);
		if($result)
		{
			$sess_array = array( 'username' => $result->username,'id' => $result->id,);
			$this->session->set_userdata('admin_logged_in', $sess_array);
			$this->session->set_userdata($sess_array);
			return TRUE;				
		}
		else
		{
		  $this->form_validation->set_message('login_check', 'Invalid Username or password');
		  return FALSE;
		}
	} // login_check	


} // adminlogin
