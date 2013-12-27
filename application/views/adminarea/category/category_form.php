<!-- Distributor Details -->  
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add / Edit Category</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php   
            $attributes = array('class' => 'form-horizontal', 'id' => 'form');
            echo form_open_multipart('admincategory/save', $attributes); 
        ?>
            <fieldset>
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            <input type="hidden" name="image_file" value="<?php echo $c_image;?>" />
            
            <div class="control-group <?php echo form_error('c_category') ? 'error' : '' ?>">
                <label for="c_category" class="control-label">Food Category <span class="required">*</span></label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_category','required'=>'required','id'=>'c_category',
					'type'=>'text','value'=>$c_category);
                    echo form_input($tags);
                    echo form_error('c_category');
                ?>
                </div>
            </div>
            
            <div class="control-group <?php echo form_error('c_description') ? 'error' : '' ?>">
                <label for="description" class="control-label">Description</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_description','class'=>'autogrow','id'=>'c_description',
					'type'=>'text','rows'=>'1','cols'=>'50','value'=>$c_description);
                    echo form_textarea($tags);
                    echo form_error('c_description');
                ?>
                </div>
            </div>  
            
            <div class="control-group <?php echo $img_error ? 'error' : '' ?>">
                <label for="image" class="control-label">Image</label>
                <div class="controls">
                <?php 
					echo form_upload(array('name'=>'c_image'));
                ?>
                <span class="help-inline"> <?php echo $img_error; ?> </span>
                </div>
            </div> 
            <div class="row-fluid">
                <div class="span10 well center">
                	For Best Results Image Should Be of:- Height: 330px | Width: 440px | Maximum File Size 1024 kb 
                </div>
            </div>                                      
			<?php if($id && $c_image != ''):?>
            <div class="row-fluid">
                <div class="span10 well center">
                	<img src="<?php echo base_url('uploads/images/full/'.$c_image);?>" alt="current"/><br/>
                </div>
            </div>
            <?php endif;?>              
            <div class="form-actions">
                <button type="submit" class="btn btn-info ajax-link">Save</button>
                <button type="reset" class="btn ajax-link" 
                    onclick="document.location.href='<?php echo base_url()?>admincategory';">
                    Cancel
                </button>
            </div>
            
            </fieldset>
        <?Php echo form_close(); ?>    
        </div>
    </div><!--/span-->
</div>			
<!-- // Distributor Details -->
