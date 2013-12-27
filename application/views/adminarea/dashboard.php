<!-- Top Bar Icons  -->              
			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Active Categories <?php echo $category_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>admincategory/create">
					<span class="icon32 icon-red icon-compose"></span>
					<div>Add Menu Category</div>
                    <span class="notification red"><?php echo $category_ctr ?></span>
				</a>

				<a data-rel="tooltip" title="Active Menu Items <?php echo $product_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>adminproduct/create">
					<span class="icon32 icon-blue icon-cart"></span>
					<div>Add Menu Item</div>
                    <span class="notification"><?php echo $product_ctr ?></span>
				</a>
                
				<a data-rel="tooltip" title="Active About <?php echo $about_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>adminabout/create">
					<span class="icon32 icon-color icon-tag"></span>
					<div>Add About Us</div>
                    <span class="notification yellow"><?php echo $about_ctr ?></span>
				</a> 
                
				<a data-rel="tooltip" title="Edit Contact" 
                class="well span3 top-block" href="<?Php echo base_url() ?>admincontact/edit">
					<span class="icon32 icon-green icon-tag"></span>
					<div>Edit Contact Details</div>
				</a>                                
			</div>            
<!-- // Top Bar Icons  -->  

<!-- Active Categories -->  
<?php if($category) : ?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-glass"></i> Food Categories</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th width="5%">Slno<i class="pull-right icon-chevron-down"></i></th>
                      <th width="15%">Name<i class="pull-right icon-chevron-down"></i></th>
                      <th width="45%">Description<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Image<i class="pull-right icon-chevron-down"></i></th>
                      <th width="15%">Actions</th>
                  </tr>
              </thead>   
              <tbody>
              <?php 
                $count=1;
                foreach($category as $row)
                {
              ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td class="center"><?php echo $row->c_category;?></td>
                    <?php $parent=$this->modal_db->getCategoryById($row->n_parent_id); ?>
                    <td class="center"><?php echo substr($row->c_description,0,150) ?></td>
                    <td class="center" style="vertical-align:middle">
                    <?php if($row->c_image): ?>
                    <img class="dashboard-avatar" alt="No Image" 
                    src="<?php echo base_url('uploads/images/thumbnails/'.$row->c_image);?>">
                    <?php endif ?>
                    </td>                    
                    <td style="vertical-align:middle">
                        <a class="btn btn-info ajax-link" 
                        href="<?Php echo base_url() ?>admincategory/edit/<?php echo $row->id; ?>">
                            <i class="icon-edit icon-white"></i>  
                            Edit                                            
                        </a>
                        <a href="<?Php echo base_url()?>admincategory/delete/<?php echo $row->id; ?>" 
                        class="btn btn-danger confirmClick" 
                        title="Delete <?php echo $row->c_category; ?>">
                        <i class="icon-trash icon-white"></i>  
			            Delete
                        </a>                         
                    </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>            
        </div>
    </div><!--/span-->

</div>
<?php endif ?> 
<!-- // Active Categories --> 

<!-- Active Menu Item -->  
<?php if($product) : ?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-glass"></i> Menu Items</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th width="5%">Slno<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Name<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Category<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Price<i class="pull-right icon-chevron-down"></i></th>
                      <th width="5%">Specials<i class="pull-right icon-chevron-down"></i></th>                      
                      <th width="25%">Description<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Image<i class="pull-right icon-chevron-down"></i></th>
                      <th width="16%">Actions</th>
                  </tr>
              </thead>   
              <tbody>
              <?php 
                $count=1;
                foreach($product as $row)
                {
              ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td class="center"><?php echo $row->c_name;?></td>
                    <?php $category=$this->modal_db->getCategoryById($row->n_category_id); ?>
                    <td class="center">
                        <span class="<?php echo $category ? '' : 'label label-important'; ?>">
                        <?php echo $category ? $category->c_category : 'Not Assigned'; ?>
                        </span>
                    </td>
                    <td class="center"><?php echo $row->n_price;?></td>
                    <td class="center">
						<label class="checkbox">
                    	<input type="checkbox" name="b_special" class="checkbox<?php echo $row->id;?>" id="b_special" value="<?php echo $row->b_special;?>" <?php echo $row->b_special > 0 ? 'checked' : ''; ?> 
                        onclick="set_special('<?php echo base_url();?>','<?php echo $row->id;?>');">
                        </label>					
                    </td>                    
                    <td class="center"><?php echo substr($row->c_description,0,150) ?></td>
                    <td class="center" style="vertical-align:middle">
                    <?php if($row->c_image): ?>
                    <img class="dashboard-avatar" alt="No Image" 
                    src="<?php echo base_url('uploads/images/thumbnails/'.$row->c_image);?>">
                    <?php endif ?>
                    </td>                    
                    <td style="vertical-align:middle">
                        <a class="btn btn-info ajax-link" 
                        href="<?Php echo base_url() ?>adminproduct/edit/<?php echo $row->id; ?>">
                            <i class="icon-edit icon-white"></i>  
                            Edit                                            
                        </a>
                        <a href="<?Php echo base_url()?>adminproduct/delete/<?php echo $row->id; ?>" 
                        class="btn btn-danger confirmClick" 
                        title="Delete <?php echo $row->c_name; ?>">
                        <i class="icon-trash icon-white"></i>  
			            Delete
                        </a>     
                    </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>            
        </div>
    </div><!--/span-->

</div>
<?php endif ?> 
<!-- // Active Menu Item --> 