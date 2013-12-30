<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('googlemaps');
		
		//$this->output->enable_profiler(TRUE);
		
	}		 
	
	public function actual()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$this->load->helper('typography');
		
		$data['contact']=$this->modal_db->getContactById();	
		$data['category']=$this->modal_db->getActiveCategory();
		$data['about']=$this->modal_db->getActiveAbout();
		$data['banner']=$this->modal_db->getAllBanner();	
		
		$this->load->view('frontarea/header', $data);
		$this->load->view('frontarea/slider', $data);
		$this->load->view('frontarea/index', $data);
		
			
		$this->load->view('frontarea/footer', $data);			
	}
	
	public function menu_items()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant | Menu"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$data['contact']=$this->modal_db->getContactById();	
		$this->load->view('frontarea/header', $data);
		$data['sub_title']='MENU';
		$this->load->view('frontarea/sub_header', $data);

		$data['category']=$this->modal_db->getActiveCategory();
		$data['product']=$this->modal_db->getAllProduct();
		$this->load->view('frontarea/menu_items', $data);
		
			
		$this->load->view('frontarea/footer', $data);		
	}
	
	public function about_us()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant | About Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$data['contact']=$this->modal_db->getContactById();	
		$this->load->view('frontarea/header', $data);
		$data['sub_title']='ABOUT';
		$this->load->view('frontarea/sub_header', $data);		

		$data['about']=$this->modal_db->getAllAbout();
		$this->load->view('frontarea/about_us', $data);
		
			
		$this->load->view('frontarea/footer', $data);			
	}
	
	public function contact_us()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$data['contact']=$this->modal_db->getContactById();	
		$this->load->view('frontarea/header', $data);
		$data['sub_title']='CONTACT';
		$this->load->view('frontarea/sub_header', $data);		

		$data['c_name']='';
		$data['c_email']='';
		$data['c_phone']='';
		$data['c_comments']='';
		$this->load->view('frontarea/contact_us', $data);
		
		
		$this->load->view('frontarea/footer', $data);		
	}
	
	public function send_mail()
	{
		$this->form_validation->set_rules('c_name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('c_phone', 'Phone', 'trim|required|min_length[8]|xss_clean');
		$this->form_validation->set_rules('c_comments', 'Comments', 'trim|max_length[500]|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		if ($this->form_validation->run() == FALSE)
		{
	
			$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant | Contact Us"; 
			$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
			$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
			
			$data['contact']=$this->modal_db->getContactById();	
			$this->load->view('frontarea/header', $data);
			$data['sub_title']='CONTACT';
			$this->load->view('frontarea/sub_header', $data);
			
			$data['c_name'] = $this->input->post('c_name');
			$data['c_email']= $this->input->post('c_email');
			$data['c_phone']= $this->input->post('c_phone');
			$data['c_comments']= $this->input->post('c_comments');					

			$this->load->view('frontarea/contact_us', $data);
			
			
			$this->load->view('frontarea/footer', $data);					
		}
		else
		{
			$tdata['c_name'] = $this->input->post('c_name');
			$tdata['c_email']= $this->input->post('c_email');
			$tdata['c_phone']= $this->input->post('c_phone');
			$tdata['c_comments']= $this->input->post('c_comments');
			
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from($tdata['c_email'], $tdata['c_name']);
			$this->email->to('orders@biriyanihut.com.au');
			
			$mshhead='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
			"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Lab Investigation Result</title>
			</head> <body>';
			$msgfoot='</body> </html>';
		
		
			$this->email->subject($tdata['c_name'].' '.$tdata['c_phone']);
			$message = $mshhead.$tdata['c_comments'].'<br />'.'regards <br />'.$tdata['c_name'].'<br />'.$tdata['c_phone'].$msgfoot;
			$this->email->message($message);
			$this->email->send();				

			if ($this->modal_db->saveCustomer($tdata) == TRUE) 
			{
				$flash['type']='alert-success';
				$flash['title']='Success !';
				$flash['message']='Mail Send Successfully';
				$this->session->set_flashdata($flash);
				redirect('home/contact_us');		
			}
			else
			{
				$flash['type']='alert-error';
				$flash['title']='Failed !';
				$flash['message']='Mail Could not be send';
				$this->session->set_flashdata($flash);
				redirect('home/contact_us');	
			}				
		}		
	}
	
	public function service()
	{
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant | Services"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indian Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";
		
		$data['contact']=$this->modal_db->getContactById();	
		$this->load->view('frontarea/header', $data);
		$data['sub_title']='SERVICES';
		$this->load->view('frontarea/sub_header', $data);		

		$this->load->view('frontarea/service', $data);
		
			
		$this->load->view('frontarea/footer', $data);			
	}					
	
	public function index()
	{
			
		$this->load->view('temp/index');			
	}	

	public function test()
	{
			
		
		$this->load->view('frontarea/sticky');			
	}
	
}
