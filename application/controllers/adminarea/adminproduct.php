<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminproduct extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			if(!$this->session->userdata('admin_logged_in'))		
			  redirect('adminlogin');
		//$this->output->enable_profiler(TRUE);	  
	}
	
	function index()
	{				
		$data['title'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant | Contact Us"; 
		$data['meta'] = "Biriyani Hut | Toowoomba's First South Indua Restaurant";
		$data['keywords'] = "toowoomba, south indian, restaurant, food, dishes";				
						
		$this->load->view('adminarea/header', $data);
			
		$data['product']=$this->modal_db->getAllProduct();	
		$data['product_ctr']= $this->modal_db->getProductCount();		
		$this->load->view('adminarea/product/product_board', $data);
		
		$this->load->view('adminarea/footer', $data);	
	} // index

	function create()
	{				
		//default values are empty if the customer is new
		$data['id']				= '';
		$data['c_name']			= '';
		$data['c_description']	= '';
		$data['n_category_id']	= '';
		$data['n_price']		= '';
		$data['b_special']		= 'FALSE';
		$data['c_image']		= '';
		$data['img_error']		= '';
	
		$data['title'] = "Food Items | Biriyani Hut"; 
		$data['meta'] = "Food Items Biriyani Hut";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";	
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/product/product_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index
	
	function edit($id)
	{				
		$row=$this->modal_db->getProductById($id);
		if($row)
		{
			$data['id'] = $row->id;
			$data['c_name']= $row->c_name;
			$data['c_description']= $row->c_description;
			$data['n_category_id']= $row->n_category_id;
			$data['n_price']= $row->n_price;
			$data['b_special']= $row->b_special;
			$data['c_image']= $row->c_image;
		}
			$data['img_error']		= '';
		$data['title'] = "Food Items | Biriyani Hut"; 
		$data['meta'] = "Food Items Biriyani Hut";
		$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
		
		$this->load->view('adminarea/header', $data);
		$this->load->view('adminarea/product/product_form', $data);
		$this->load->view('adminarea/footer', $data);				
	
	} // index	
	
	function save()
	{
		$this->form_validation->set_rules('c_name', 'Name', 'trim|required|max_length[64]|xss_clean');
		$this->form_validation->set_rules('c_description', 'Description', 'trim|xss_clean');
		$this->form_validation->set_rules('n_category_id', 'Category', 'required|trim|xss_clean');
		$this->form_validation->set_rules('n_price', 'Price', 'trim|xss_clean');
		$this->form_validation->set_rules('b_special', 'Special', 'xss_clean');
		$this->form_validation->set_rules('c_image', 'Image', 'trim|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
		if ($this->form_validation->run() == FALSE)
		{
			$data['id'] = $this->input->post('id');
			$data['c_name']= $this->input->post('c_name');
			$data['c_description']= $this->input->post('c_description');
			$data['n_category_id']= $this->input->post('n_category_id');
			$data['n_price']= $this->input->post('n_price');
			$data['b_special']= $this->input->post('b_special');
			$data['c_image']= $this->input->post('image_file');
			$data['img_error']		= '';
	
			$data['title'] = "Food Items | Biriyani Hut"; 
			$data['meta'] = "Food Items Biriyani Hut";
			$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
			
			$this->load->view('adminarea/header', $data);
			$this->load->view('adminarea/product/product_form', $data);
			$this->load->view('adminarea/footer', $data);				
		}
		else
		{
			$id = $this->input->post('id');
			$c_name=$tdata['c_name']= $this->input->post('c_name');
			$tdata['c_description']= $this->input->post('c_description');
			$tdata['n_category_id']= $this->input->post('n_category_id');
			$tdata['n_price']= $this->input->post('n_price');
			$tdata['b_special']= $this->input->post('b_special');
			$tdata['c_slug']	= url_title(convert_accented_characters($c_name), 'dash', TRUE);

			// Save Image
			$config['upload_path']		= 'uploads/images/full';
			$config['allowed_types']	= 'gif|jpg|png';
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
					
					if($data['c_image'] != '' && $data['c_image'] != 'sample.jpg')
					{
						$file = array();
						$file[] = 'uploads/images/full/'.$data['c_image'];
						$file[] = 'uploads/images/medium/'.$data['c_image'];
						$file[] = 'uploads/images/small/'.$data['c_image'];						
						$file[] = 'uploads/images/thumbnails/'.$data['c_image'];
						
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
					$data['c_name']= $this->input->post('c_name');
					$data['c_description']= $this->input->post('c_description');
					$data['n_category_id']= $this->input->post('n_category_id');
					$data['n_price']= $this->input->post('n_price');
					$data['b_special']= $this->input->post('b_special');
					$data['c_image']= $this->input->post('image_file');
			
					$data['title'] = "Food Items | Biriyani Hut"; 
					$data['meta'] = "Food Items Biriyani Hut";
					$data['keywords'] = "entree Lunch Dinner Special Deal Kids Meal Dessert Fresh Juice";
					
					$this->load->view('adminarea/header', $data);
					$this->load->view('adminarea/product/product_form', $data);
					$this->load->view('adminarea/footer', $data);					
					return; //end script here if there is an error
				}
			}
			
			if($uploaded)
			{
				
				$this->load->library('image_lib');
				
				$tdata['c_image']	= $image['file_name'];
				//this is the larger image
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/images/full/'.$tdata['c_image'];
				$config['new_image']	= 'uploads/images/medium/'.$tdata['c_image'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 440;
				$config['height'] = 330;
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();

				//small image
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/images/medium/'.$tdata['c_image'];
				$config['new_image']	= 'uploads/images/small/'.$tdata['c_image'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 220;
				$config['height'] = 165;
				$this->image_lib->initialize($config); 
				$this->image_lib->resize();
				$this->image_lib->clear();

				//cropped thumbnail
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/images/small/'.$tdata['c_image'];
				$config['new_image']	= 'uploads/images/thumbnails/'.$tdata['c_image'];
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 70;
				$config['height'] = 52;
				$this->image_lib->initialize($config); 	
				$this->image_lib->resize();	
				$this->image_lib->clear();
			}			
			
			if ($this->modal_db->saveProduct($tdata,$id) == TRUE) 
			{
				$flash['type']='alert-success';
				$flash['title']='Success !';
				$flash['message']='Menu Item Saved Successfully';
				$this->session->set_flashdata($flash);
				redirect('adminproduct');		
			}
			else
			{
				$flash['type']='alert-error';
				$flash['title']='Failed !';
				$flash['message']='Data Could not be saved or No Change Made';
				$this->session->set_flashdata($flash);
				redirect('adminproduct');	
			}				
		}
	} // save	
	
	function delete($id)
	{			
		$row=$this->modal_db->delete_Item('bc_products',$id);
		
		if ($this->modal_db->delete_Item($id) == TRUE) 
		{
			$flash['type']='alert-success';
			$flash['title']='Success !';
			$flash['message']='Menu Item Deleted';
			$this->session->set_flashdata($flash);
			redirect('adminproduct');		
		}
		else
		{
			$flash['type']='alert-error';
			$flash['title']='Failed !';
			$flash['message']='Menu Item Could not be deleted!';
			$this->session->set_flashdata($flash);
			redirect('adminproduct');	
		}			
	
	} // delete
	
	function set_special()
	{			
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		if($status==1)
			$tdata['b_special']=$id;
		else
			$tdata['b_special']=$status;
		if ($this->modal_db->saveProduct($tdata,$id) == TRUE) 
			echo 1;		
		else
			echo 0;
	} // set_special			
	
} //Admincategory