<?php // functions by shiju	
Class Modal_db extends CI_Model
{

// Begin: General
// get_row
// get_results
// delete_Item
	function get_row($sql)
    {
  
		$query = $this->db->query($sql);

        if($query -> num_rows() >0)
        {
          	return $query->row();
             
        }
        else
        {
			return false;
        }

    }
	
	function get_results($sql)
	{
		$query = $this->db->query($sql);
		if($query -> num_rows() >0)
		{
		  return $query->result();		
		}
		else
		{
		  return false;
		}	
	}
	
	function delete_Item($table=null,$id=null)
	{
		if(!empty($id) && !empty($table))
		{
			$form_data['b_status']=0;
			$this->db->where('id', $id);
			$this->db->update($table,$form_data);			
		}
		if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;
	} // deleteItem
// End: General
						
// Begin: Admin
	function getUserData($id)
	{

		$this -> db -> select('*');

		$this -> db -> from('admin');

		$this -> db -> where('id',$id);

		$this -> db -> limit(1);

		$result = $this -> db -> get();
        if($result -> num_rows() >0)
        {
          	return $result->row();
             
        }
        else
        {
			return false;
        }


	}
	
	function saveForm($form_data,$id=false)
	{
		if(isset($id))
		{
			$this->db->where('id', $id);
			$this->db->update('admin', $form_data);			
		}
		else
		{
			$this->db->insert('admin', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}	
// End : Admin	

// Begin: Category
	function saveCategory($form_data,$id=NULL)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$this->db->update('bc_categories', $form_data);			
		}
		else
		{
			$this->db->insert('bc_categories', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveCategory
	
	function getCategoryOptions() 
	{
		$this -> db -> select('c_category,id'); 
		$this -> db -> from('bc_categories');
		$this -> db -> where('b_status',1);
		$this->db->order_by('c_category', 'asc');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$data[$row->id]=$row->c_category;
			}
			return $data;
			
			 
		}
		else
		{
			return array();
		}

	} //getCategoryOptions
	
	function getCategoryMenu() 
	{
		$this -> db -> select('c_category,id'); 
		$this -> db -> from('bc_categories');
		$this -> db -> where('b_status',1);
		$this->db->order_by('c_category', 'asc');
		$query = $this -> db -> get();
	} //getCategoryMenu	
	
	
	function getAllCategory() 
	{
		$this -> db -> select('*'); 
		$this -> db -> from('bc_categories');
		$this -> db -> where('b_status',1);
		$this->db->order_by('id');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	} //getAllCategory	
	
	function getCategoryById($id) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_categories');
		$this -> db -> where('id',$id);
		$this -> db -> where('b_status',1); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById	
	
	function getCategoryCount() 
	{
		$this -> db -> select('count(*) ctr'); 
		$this -> db -> from('bc_categories');
		$this -> db -> where('b_status',1);
		$this->db->order_by('id', 'desc');
		$query = $this -> db -> get()->row();
		return $query->ctr;
	} //getCategoryCount
	
	function deleteCategory($id=null)
	{
		if(!empty($id))
		{
			$form_data['b_status']=0;
			$this->db->where('id', $id);
			$this->db->update('bc_categories',$form_data);
			
			$d_data['n_category_id']=0;
			$this->db->where('n_category_id', $id);
			$this->db->update('bc_products',$d_data);
						
		}
		if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;
	} // deleteCategory	
	
	function getActiveCategory() 
	{
		$this -> db -> select('bc_categories.id,bc_categories.c_category,bc_categories.c_slug'); 
		$this -> db -> from('bc_categories');
		$this -> db -> from('bc_products');
		$this->db->distinct('bc_categories.id');
		$this -> db -> where('bc_categories.id = bc_products.n_category_id');
		$this -> db -> where('bc_categories.b_status',1);
		$this->db->order_by('bc_categories.id');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	} //getActiveCategory						
	
// End : Category	

// Begin: Product
	function getProductOptions() // Populae combo in coupon panel
	{
		$this -> db -> select('c_name,id'); 
		$this -> db -> from('bc_products');
		$this -> db -> where('b_status',1);
		$this->db->order_by('c_name', 'asc');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$data[$row->id]=$row->c_category;
			}
			return $data;
			
			 
		}
		else
		{
			return array();
		}

	} //getCategoryOptions
	
	function saveProduct($form_data,$id=NULL)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$this->db->update('bc_products', $form_data);			
		}
		else
		{
			$this->db->insert('bc_products', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveCategory	
	
	function getAllProduct() 
	{
		$this -> db -> select('*'); 
		$this -> db -> from('bc_products');
		$this -> db -> where('b_status',1);
		$this->db->order_by('id');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	} //getAllCategory	
	
	function getProductById($id) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_products');
		$this -> db -> where('id',$id);
		$this -> db -> where('b_status',1); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById
	
	function getProductByCategory($id,$special=0,$limit=NULL,$offset=0) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_products');
		$this -> db -> where('n_category_id',$id);
		$this -> db -> where('b_status',1);
		if($special)
			$this -> db -> where('b_special >=',$special);
		else
			$this -> db -> where('b_special',$special);
		
		if(!empty($limit) || $offset!=0 )
		{
			$this -> db -> limit($limit,$offset); 
		}

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById
	
	function getProductByCategorySlug($slug,$limit=NULL,$offset=0) 
	{
		$this -> db -> select('bc_products.*');
		$this -> db -> from('bc_products');
		$this -> db -> from('bc_categories');
		$this -> db -> where('bc_categories.c_slug',$slug);
		$this -> db -> where('bc_categories.id = bc_products.n_category_id');
		$this -> db -> where('bc_categories.b_status',1);
		$this -> db -> where('bc_products.b_status',1);
		$this->db->order_by('id');
		
		if(!empty($limit) || $offset!=0 )
		{
			$this -> db -> limit($limit,$offset); 
		}

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById	
	
	function getProductByCategoryCount($id) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_products');
		$this -> db -> where('n_category_id',$id);
		$this -> db -> where('b_status',1); 

		return $this->db->count_all_results();

	}	// getProductByCategoryCount			
	
	function getProductCount() 
	{
		$this -> db -> select('count(*) ctr'); 
		$this -> db -> from('bc_products');
		$this -> db -> where('b_status',1);
		$query = $this -> db -> get()->row();
		return $query->ctr;
	} //getCategoryCount				
// End : Product

// Begin: About
	function saveAbout($form_data,$id=NULL)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$this->db->update('bc_about', $form_data);			
		}
		else
		{
			$this->db->insert('bc_about', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveCategory	
	
	function getAllAbout() 
	{
		$this -> db -> select('*'); 
		$this -> db -> from('bc_about');
		$this -> db -> where('b_status',1);
		$this->db->order_by('n_sequence');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	} //getAllCategory	
	
	function getAboutById($id) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_about');
		$this -> db -> where('id',$id);
		$this -> db -> where('b_status',1); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById	
	
	function getAboutCount() 
	{
		$this -> db -> select('count(*) ctr'); 
		$this -> db -> from('bc_about');
		$this -> db -> where('b_status',1);
		$query = $this -> db -> get()->row();
		return $query->ctr;
	} //getCategoryCount
	
	function getActiveAbout() 
	{
		$this -> db -> select('c_title,c_description');
		$this -> db -> from('bc_about');
		$this -> db -> from('bc_settings');
		$this -> db -> where('bc_settings.c_type','ABOUT_FRONT');
		$this -> db -> where('bc_about.id = bc_settings.n_val');
		$this -> db -> where('b_status',1); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getFranchiseeById						
// End : About

// Begin: Contact
	function saveContact($form_data,$id=NULL)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$this->db->update('bc_contact', $form_data);			
		}
		else
		{
			$this->db->insert('bc_contact', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveContact	
	
	function getContactById($id=1) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_contact');
		$this -> db -> where('id',$id);
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getContactById	
	
// End : About

// Begin: Banner
	function saveBanner($form_data,$id=NULL)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$this->db->update('bc_banner', $form_data);			
		}
		else
		{
			$this->db->insert('bc_banner', $form_data);
		}
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveBanner
	

	
	function getAllBanner() 
	{
		$this -> db -> select('*'); 
		$this -> db -> from('bc_banner');
		$this -> db -> where('b_status',1);
		$this->db->order_by('id');
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	} //getAllBanner	
	
	
	function getBannerCount() 
	{
		$this -> db -> select('count(*) ctr'); 
		$this -> db -> from('bc_banner');
		$this -> db -> where('b_status',1);
		$this->db->order_by('id', 'desc');
		$query = $this -> db -> get()->row();
		return $query->ctr;
	} //getBannerCount
	
	function getBannerById($id) 
	{
		$this -> db -> select('*');
		$this -> db -> from('bc_banner');
		$this -> db -> where('id',$id);
		$this -> db -> where('b_status',1); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getBannerById	
	
	function deleteBanner($id=null)
	{
		if(!empty($id))
		{
			$form_data['b_status']=0;
			$this->db->where('id', $id);
			$this->db->update('bc_banner',$form_data);
			
		}
		if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;
	} // deleteBanner	

// End Banner

// Contact
	function saveCustomer($form_data)
	{
		$this->db->insert('bc_customer', $form_data);
		
		if ($this->db->affected_rows() == '1')
			return TRUE;
		else		
			return FALSE;
	} // saveCategory
	
//  Contact

// settings
	function getSettings($type=NULL) 
	{
		$this -> db -> select('n_val');
		$this -> db -> from('bc_settings');
		$this -> db -> where('c_type',$type);
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		$query -> num_rows();

		if($query -> num_rows() == 1)
		{
			return $query->row();
			 
		}
		else
		{
			return false;
		}

	}	// getContactById
	
	function set_settings($form_data,$type)
	{
		if(!empty($type))
		{
			$this -> db -> where('c_type',$type);
			$this->db->update('bc_settings', $form_data);			
		}
	
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	} // saveContact	
	
//  settings		
	
}
