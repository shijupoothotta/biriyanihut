<!-- Top Bar Icons  -->              
			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Active Categories <?php echo $category_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>admincategory/create">
					<span class="icon-glass"></span>
					<div>Add Category</div>
                    <span class="notification"><?php echo $category_ctr ?></span>
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