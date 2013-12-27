<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminarea extends CI_Controller {
	 
	function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('admin_logged_in'))		
		  redirect('adminlogin');			
	}	 
	
	public function index()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";				
						
		$this->load->view('adminarea/header', $data);
		
		$data['category']=$this->modal_db->getAllCategory();	
		$data['category_ctr']= $this->modal_db->getCategoryCount();	
		$data['product']=$this->modal_db->getAllProduct();	
		$data['product_ctr']= $this->modal_db->getProductCount();	
		$data['about_ctr']= $this->modal_db->getAboutCount();				
								
		$this->load->view('adminarea/dashboard', $data);
		$this->load->view('adminarea/footer', $data);				
	} // index
	
	public function edit_password($id=NULL)
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$this->load->view('adminarea/header', $data);
	
		$id=$this->session->userdata('id');
		$data['row']=$row=$this->modal_db->getUserData($id);
		if(!$row)
		{
			$this->session->set_flashdata(array('type'=>'alert-error',
			'title' => 'Error !', 'message' => 'Your operation failed due to some errors'));	
			redirect('adminarea');	
		}
		$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean|callback_password_check');
		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[5]|sha1|xss_clean');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|matches[new_password]|xss_clean');
			
		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$data['old_password']='';
			$data['new_password']='';
			$data['confirm_password']='';
			$this->load->view('adminarea/profile_form',$data);
		}
		else // passed validation proceed to post success logic
		{
			$password=$this->input->post('new_password');
			
			if(!empty($password))
				$form_data['password']=$password;
		
			if ($this->modal_db->saveForm($form_data,$id) == TRUE) 
			{
				$this->session->set_flashdata(array('type'=>'alert-success',
				'title' => 'Success !', 'message' => 'Password Changed Completed Successfully'));	
				redirect('adminarea');
			}
			else
			{
				$this->session->set_flashdata(array('type'=>'alert-error',
				'title' => 'Error !', 'message' => 'This operation failed Or No Change Made'));	
				redirect('adminarea');
			}
		}
		$this->load->view('adminarea/footer', $data);
	
	} // edit_profile
	
	function logout()
	{
	  $this->session->unset_userdata('admin_logged_in');
	  $this->session->unset_userdata('sess_array');
	  $this->session->sess_destroy();
	  redirect('adminlogin', 'refresh');
	}	
	
	public function password_check($old_password)
	{
		$id=$this->session->userdata('id');
		$password=sha1($old_password);
		$query="SELECT * FROM admin WHERE id='$id' AND password='$password' AND status='Y' LIMIT 1";
		$result = $this->modal_db->get_row($query);
		if($result)
		{
			return TRUE;				
		}
		else
		{
		  $this->form_validation->set_message('password_check', 'Sorry !Old Password does is not correct');
		  return FALSE;
		}
	} // login_check		

} // Adminarea
