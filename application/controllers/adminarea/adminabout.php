<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminabout extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			if(!$this->session->userdata('admin_logged_in'))		
			  redirect('adminlogin');
	}
	
	function index()
	{				
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";				
						
		$this->load->view('adminarea/header', $data);
			
		$data['about']=$this->modal_db->getAllAbout();	
		$data['about_ctr']= $this->modal_db->getAboutCount();
		$data['banner_ctr']= $this->modal_db->getBannerCount();			
		$this->load->view('adminarea/about/about_board', $data);
		
		$this->load->view('adminarea/footer', $data);	
	} // index

	function create()
	{				
		//default values are empty if the customer is new
		$data['id']				= '';
		$data['n_sequence']		= '0';
		$data['c_title']	= '';
		$data['c_description']	= '';
	
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";	
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/about/about_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index
	
	function edit($id)
	{				
		$row=$this->modal_db->getAboutById($id);
		if($row)
		{
			$data['id'] = $row->id;
			$data['n_sequence']= $row->n_sequence;
			$data['c_title']= $row->c_title;
			$data['c_description']= $row->c_description;
		}
		
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/about/about_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index	
	
	function save()
	{
		$this->form_validation->set_rules('n_sequence', 'Display Order', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_description', 'Description', 'trim|required|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		if ($this->form_validation->run() == FALSE)
		{
			$data['id'] = $this->input->post('id');
			$data['n_sequence']= $this->input->post('n_sequence');
			$data['c_title']= $this->input->post('c_title');
			$data['c_description']= $this->input->post('c_description');
	
			$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
			$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
			$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
			
			$this->load->view('adminarea/header', $data);
			$this->load->view('adminarea/about/about_form', $data);
			$this->load->view('adminarea/footer', $data);				
		}
		else
		{
			$id = $this->input->post('id');
			$tdata['n_sequence']= $this->input->post('n_sequence');
			$tdata['c_title']= $this->input->post('c_title');
			$tdata['c_description']= $this->input->post('c_description');

			if ($this->modal_db->saveAbout($tdata,$id) == TRUE) 
			{
				$flash['type']='alert-success';
				$flash['title']='Success !';
				$flash['message']='About Details Saved Successfully';
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
	
	function set_home_about()
	{			
		$id = $this->input->post('id');
		$tdata['n_val']=$id;
		if ($this->modal_db->set_settings($tdata,'ABOUT_FRONT') == TRUE) 
			echo 1;		
		else
			echo 0;
	} // delete	
	
	function delete($id)
	{			
		$row=$this->modal_db->delete_Item('bc_about',$id);
		
		if ($this->modal_db->delete_Item($id) == TRUE) 
		{
			$flash['type']='alert-success';
			$flash['title']='Success !';
			$flash['message']='Menu Item Deleted';
			$this->session->set_flashdata($flash);
			redirect('adminabout');		
		}
		else
		{
			$flash['type']='alert-error';
			$flash['title']='Failed !';
			$flash['message']='Menu Item Could not be deleted!';
			$this->session->set_flashdata($flash);
			redirect('adminabout');	
		}			
	
	} // delete			
	
} //Admincategory