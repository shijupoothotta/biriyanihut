<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admincontact extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			if(!$this->session->userdata('admin_logged_in'))		
			  redirect('adminlogin');
	}
	
	function index()	
	{
		$this->edit();
	}
	
	function edit($id=1)
	{				
		$row=$this->modal_db->getContactById($id);
		if($row)
		{
			$data['id'] = $row->id;
			$data['c_mobile']= $row->c_mobile;
			$data['c_phone']= $row->c_phone;
			$data['c_email']= $row->c_email;
			$data['c_address_line1']= $row->c_address_line1;
			$data['c_address_line2']= $row->c_address_line2;
			$data['c_working_hours']= $row->c_working_hours;
			$data['c_facebook']= $row->c_facebook;
			$data['c_twitter']= $row->c_twitter;
			$data['c_google']= $row->c_google;
			$data['c_instagram']= $row->c_instagram;
			$data['c_linkedin']= $row->c_linkedin;
			$data['c_pininterest']= $row->c_pininterest;
			$data['c_rssfeed']= $row->c_rssfeed;
		}
		
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/about/contact_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index	
	
	function save()
	{
		$this->form_validation->set_rules('c_mobile', 'Mobile', 'trim|xss_clean');
		$this->form_validation->set_rules('c_phone', 'Phone', 'trim|xss_clean');
		$this->form_validation->set_rules('c_email', 'Email ID', 'trim|xss_clean');
		$this->form_validation->set_rules('c_address_line1', 'Address Line 1', 'trim|xss_clean');
		$this->form_validation->set_rules('c_address_line2', 'Address Line 2', 'trim|xss_clean');
		$this->form_validation->set_rules('c_working_hours', 'Working Hours', 'trim|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		if ($this->form_validation->run() == FALSE)
		{
			$data['id'] = $this->input->post('id');
			$data['c_mobile']= $this->input->post('c_mobile');
			$data['c_phone']= $this->input->post('c_phone');
			$data['c_email']= $this->input->post('c_email');
			$data['c_address_line1']= $this->input->post('c_address_line1');
			$data['c_address_line2']= $this->input->post('c_address_line2');
			$data['c_working_hours']= $this->input->post('c_working_hours');
			$data['c_facebook']= $this->input->post('c_facebook');       
			$data['c_twitter']= $this->input->post('c_twitter');
			$data['c_google']= $this->input->post('c_google');
			$data['c_instagram']= $this->input->post('c_instagram');
			$data['c_linkedin']= $this->input->post('c_linkedin');
			$data['c_pininterest']= $this->input->post('c_pininterest');
			$data['c_rssfeed']= $this->input->post('c_rssfeed');
	
			$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
			$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
			$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
			
			$this->load->view('adminarea/header', $data);
			$this->load->view('adminarea/about/contact_form', $data);
			$this->load->view('adminarea/footer', $data);				
		}
		else
		{
			$id = $this->input->post('id');
			$tdata['c_mobile']= $this->input->post('c_mobile');
			$tdata['c_phone']= $this->input->post('c_phone');
			$tdata['c_email']= $this->input->post('c_email');
			$tdata['c_address_line1']= $this->input->post('c_address_line1');
			$tdata['c_address_line2']= $this->input->post('c_address_line2');
			$tdata['c_working_hours']= $this->input->post('c_working_hours');
			$tdata['c_facebook']= $this->input->post('c_facebook');       
			$tdata['c_twitter']= $this->input->post('c_twitter');
			$tdata['c_google']= $this->input->post('c_google');
			$tdata['c_instagram']= $this->input->post('c_instagram');
			$tdata['c_linkedin']= $this->input->post('c_linkedin');
			$tdata['c_pininterest']= $this->input->post('c_pininterest');
			$tdata['c_rssfeed']= $this->input->post('c_rssfeed');			

			if ($this->modal_db->saveContact($tdata,$id) == TRUE) 
			{
				$flash['type']='alert-success';
				$flash['title']='Success !';
				$flash['message']='Contact Details Saved Successfully';
				$this->session->set_flashdata($flash);
				redirect('adminabout');		
			}
			else
			{
				$flash['type']='alert-error';
				$flash['title']='Failed !';
				$flash['message']='Data Could not be saved or No Change Made';
				$this->session->set_flashdata($flash);
				redirect('adminabout');	
			}				
		}
	} // save	
	
} //Admincontact