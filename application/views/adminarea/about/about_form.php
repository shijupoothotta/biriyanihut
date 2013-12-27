<!-- Distributor Details -->  
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add / Edit About Us</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php   
            $attributes = array('class' => 'form-horizontal', 'id' => 'form');
            echo form_open('adminabout/save', $attributes); 
        ?>
            <fieldset>
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            
            <div class="control-group <?php echo form_error('n_sequence') ? 'error' : '' ?>">
                <label for="n_sequence" class="control-label">Display Order<span class="required">*</span></label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'n_sequence','required'=>'required','id'=>'n_sequence',
					'type'=>'text','value'=>$n_sequence);
                    echo form_input($tags);
                    echo form_error('n_sequence');
                ?>
                </div>
            </div>
            
            <div class="control-group <?php echo form_error('c_title') ? 'error' : '' ?>">
                <label for="c_title" class="control-label">Title<span class="required">*</span></label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_title','required'=>'required','id'=>'c_title',
					'type'=>'text','value'=>$c_title);
                    echo form_input($tags);
                    echo form_error('c_title');
                ?>
                </div>
            </div>            
            
            <div class="control-group <?php echo form_error('c_description') ? 'error' : '' ?>">
                <label for="description" class="control-label">Description<span class="required">*</span></label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_description','class'=>'autogrow','id'=>'c_description',
					'type'=>'text','rows'=>'1','cols'=>'50','value'=>$c_description,'required'=>'required');
                    echo form_textarea($tags);
                    echo form_error('c_description');
                ?>
                </div>
            </div>  
             
            <div class="form-actions">
                <button type="submit" class="btn btn-info ajax-link">Save</button>
                <button type="reset" class="btn ajax-link" 
                    onclick="document.location.href='<?php echo base_url()?>adminabout';">
                    Cancel
                </button>
            </div>
            
            </fieldset>
        <?Php echo form_close(); ?>    
        </div>
    </div><!--/span-->
</div>			
<!-- // Distributor Details -->
