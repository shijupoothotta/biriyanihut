<!-- Top Bar Icons  -->              
			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="Active About <?php echo $about_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>adminabout/create">
					<span class="icon-tag"></span>
					<div>Add About Us</div>
                    <span class="notification"><?php echo $about_ctr ?></span>
				</a>
				<a data-rel="tooltip" title="Active Banner <?php echo $banner_ctr ?>" 
                class="well span3 top-block" href="<?Php echo base_url() ?>adminbanner/create">
					<span class="icon-glass"></span>
					<div>Add Banner</div>
                    <span class="notification"><?php echo $banner_ctr ?></span>
				</a>
				<a data-rel="tooltip" title="Edit Contact Details" 
                class="well span3 top-block" href="<?Php echo base_url() ?>admincontact/edit">
					<span class="icon-tag"></span>
					<div>Edit Contact Details</div>
				</a>  
			</div>
<!-- // Top Bar Icons  -->  

<!-- Active Categories -->  
<?php if($banner) : ?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-glass"></i> Banners</h2>
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
                      <th width="5%">Image<i class="pull-right icon-chevron-down"></i></th>
                      <th width="15%">Actions</th>
                  </tr>
              </thead>   
              <tbody>
              <?php 
                $count=1;
                foreach($banner as $row)
                {
              ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td class="center"><?php echo $row->c_title;?></td>
                    <td class="center"><?php echo substr($row->c_description,0,150) ?></td>
                    <td class="center" style="vertical-align:middle">
                    <?php if($row->c_image): ?>
                    <img class="dashboard-avatar" alt="No Image" 
                    src="<?php echo base_url('uploads/images/slider/'.$row->c_image);?>">
                    <?php endif ?>
                    </td>                    
                    <td style="vertical-align:middle">
                        <a class="btn btn-info ajax-link" 
                        href="<?Php echo base_url() ?>adminbanner/edit/<?php echo $row->id; ?>">
                            <i class="icon-edit icon-white"></i>  
                            Edit                                            
                        </a>
                        <a href="<?Php echo base_url()?>adminbanner/delete/<?php echo $row->id; ?>" 
                        class="btn btn-danger confirmClick" 
                        title="Delete <?php echo $row->c_title; ?>">
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