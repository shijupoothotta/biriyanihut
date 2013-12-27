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

<!-- Active About -->  
<?php if($about) : ?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-tag"></i> About Us</h2>
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
                      <th width="10%">Order<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Title<i class="pull-right icon-chevron-down"></i></th>
                      <th width="45%">Description<i class="pull-right icon-chevron-down"></i></th>
                      <th width="10%">Home Page<i class="pull-right icon-chevron-down"></i></th>
                      <th width="20%">Actions</th>
                  </tr>
              </thead>   
              <tbody>
              <?php 
                $count=1;
				$home_about=$this->modal_db->getSettings('ABOUT_FRONT');	
                foreach($about as $row)
                {
              ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td class="center"><?php echo $row->n_sequence;?></td>
                    <td class="center"><?php echo $row->c_title;?></td>
                    <td class="center"><?php echo substr($row->c_description,0,150) ?></td>
                    <td>
                    	<label class="radio">
                    	<input type="radio" name="optionsRadios" class="optionsRadios" id="optionsRadios" value="<?php echo $row->id;?>" <?php echo $home_about->n_val==$row->id ? 'checked' : ''; ?> 
                        onclick="set_home_about('<?php echo base_url();?>','<?php echo $row->id;?>');">
                        </label>
                    </td>
                    <td style="vertical-align:middle">
                        <a class="btn btn-info ajax-link" 
                        href="<?Php echo base_url() ?>adminabout/edit/<?php echo $row->id; ?>">
                            <i class="icon-edit icon-white"></i>  
                            Edit                                            
                        </a>
                        <a href="<?Php echo base_url()?>adminabout/delete/<?php echo $row->id; ?>" 
                        class="btn btn-danger confirmClick" 
                        title="Delete <?php echo $row->id; ?>">
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
<!-- // Active About -->  

<!-- Modal -->

          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="box-header well">
            	<h2 id="myModalLabel">Delete News</h2>
                <div class="box-icon">
                  <button type="button" class="btn btn-close btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="icon-remove"></i>
                  </button>
                </div>
            </div>
            <div class="modal-body">
              <p style="font-size:16px">Are you sure to Set data Home Page  ? </p>
              <p style="font-size:16px">Please confirm</p>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Yes</button>
            </div>
          </div>
<!-- //Modal -->
 
  