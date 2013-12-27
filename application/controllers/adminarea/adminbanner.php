<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminbanner extends CI_Controller {
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
			
		$data['banner']=$this->modal_db->getAllBanner();
		$data['about_ctr']= $this->modal_db->getAboutCount();	
		$data['banner_ctr']= $this->modal_db->getBannerCount();		
		$this->load->view('adminarea/banner/banner_board', $data);
		
		$this->load->view('adminarea/footer', $data);	
	} // index

	function create()
	{				
		//default values are empty if the customer is new
		$data['id']				= '';
		$data['c_title']		= '';
		$data['c_description']	= '';
		$data['c_image']		= '';
		$data['img_error']		= '';
	
		$data['title'] = "Banner | Biriyani Hut"; 
		$data['meta'] = "Banner Biriyani Hut";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";	
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/banner/banner_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index
	
	function edit($id)
	{				
		$row=$this->modal_db->getBannerById($id);
		if($row)
		{
			$data['id'] = $row->id;
			$data['c_title']= $row->c_title;
			$data['c_description']= $row->c_description;
			$data['c_image']= $row->c_image;
		}
			$data['img_error']		= '';
		$data['title'] = "Banner | Biriyani Hut"; 
		$data['meta'] = "Banner Biriyani Hut";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/banner/banner_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index	
	
	function save()
	{
		$this->form_validation->set_rules('c_title', 'Banner Title', 'trim|required|max_length[64]|xss_clean');
		$this->form_validation->set_rules('c_description', 'Description', 'trim|xss_clean');
		$this->form_validation->set_rules('c_image', 'Image', 'trim|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		if ($this->form_validation->run() == FALSE)
		{
			$data['id'] = $this->input->post('id');
			$data['c_title']= $this->input->post('c_title');
			$data['c_description']= $this->input->post('c_description');
			$data['c_image']= $this->input->post('image_file');
			$data['img_error']		= '';
	
			$data['title'] = "Banner | Biriyani Hut"; 
			$data['meta'] = "Banner Biriyani Hut";
			$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
			
			$this->load->view('adminarea/header', $data);
			$this->load->view('adminarea/banner/banner_form', $data);
			$this->load->view('adminarea/footer', $data);				
		}
		else
		{
			$id = $this->input->post('id');
			$c_title=$tdata['c_title']= $this->input->post('c_title');
			$tdata['c_description']= $this->input->post('c_description');
			
			// Save Image
			$config['upload_path']		= 'uploads/images/slider';
			$config['allowed_types']	= 'gif|jpg|png|PNG';
			$config['max_size']			= '1024';
			$config['max_width']		= '1024';
			$config['max_height']		= '768';
			$config['encrypt_name']		= true;
			$this->load->library('upload', $config);	
					
			$uploaded	= $this->upload->do_upload('c_image');
			
			if ($id)
			{
				//delete the original file if another is uploaded
				$data['c_image']= $this->input->post('image_file');
				if($uploaded)
				{
					
					if($data['c_image'] != '')
					{
						$file = array();
						$file[] = 'uploads/images/slider/'.$data['c_image'];
						foreach($file as $f)
						{
							//delete the existing file if needed
							if(file_exists($f))
							{
								unlink($f);
							}
						}
					}
				}
				
			}
			
			$image			= $this->upload->data();

			if(!$uploaded)
			{
				if($image['file_name'] != '')
				{
					$data['img_error']	= $this->upload->display_errors();
					$data['id'] = $this->input->post('id');
					$data['c_title']= $this->input->post('c_title');
					$data['c_description']= $this->input->post('c_description');
					$data['c_image']= $this->input->post('image_file');
			
					$data['title'] = "Banner | Biriyani Hut"; 
					$data['meta'] = "Banner Biriyani Hut";
					$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
					
					$this->load->view('adminarea/header', $data);
					$this->load->view('adminarea/banner/banner_form', $data);
					$this->load->view('adminarea/footer', $data);					
					return; //end script here if there is an error
				}
			}			
			
			if($uploaded)
			{
			
				$tdata['c_image']	= $image['file_name'];	
			}			
			
			if ($this->modal_db->saveBanner($tdata,$id) == TRUE) 
			{
				$flash['type']='alert-success';
				$flash['title']='Success !';
				$flash['message']='Banner Saved Successfully';
				$this->session->set_flashdata($flash);
				redirect('adminbanner');		
			}
			else
			{
				$flash['type']='alert-error';
				$flash['title']='Failed !';
				$flash['message']='Data Could not be saved or No Change Made';
				$this->session->set_flashdata($flash);
				redirect('adminbanner');	
			}				
		}
	} // save	
	
	function delete($id)
	{				
		
		if ($this->modal_db->deleteBanner($id) == TRUE) 
		{
			$flash['type']='alert-success';
			$flash['title']='Success !';
			$flash['message']='banner Deleted';
			$this->session->set_flashdata($flash);
			redirect('adminbanner');		
		}
		else
		{
			$flash['type']='alert-error';
			$flash['title']='Failed !';
			$flash['message']='banner Could not be deleted!';
			$this->session->set_flashdata($flash);
			redirect('adminbanner');	
		}			
	
	} // delete		
	
} //Adminbanner