<!-- Distributor Details -->  
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Edit Conact Us</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php   
            $attributes = array('class' => 'form-horizontal', 'id' => 'form');
            echo form_open('admincontact/save', $attributes); 
        ?>
            <fieldset>
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            
            <div class="control-group <?php echo form_error('c_mobile') ? 'error' : '' ?>">
                <label for="c_mobile" class="control-label">Mobile Number</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_mobile','id'=>'c_mobile','type'=>'text','value'=>$c_mobile);
                    echo form_input($tags);
                    echo form_error('c_mobile');
                ?>
                </div>
            </div>
            
            <div class="control-group <?php echo form_error('c_phone') ? 'error' : '' ?>">
                <label for="c_phone" class="control-label">Phone Number</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_phone','id'=>'c_phone','type'=>'text','value'=>$c_phone);
                    echo form_input($tags);
                    echo form_error('c_phone');
                ?>
                </div>
            </div> 
            
            <div class="control-group <?php echo form_error('c_email') ? 'error' : '' ?>">
                <label for="c_email" class="control-label">Email ID</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_email','id'=>'c_email','type'=>'text','value'=>$c_email);
                    echo form_input($tags);
                    echo form_error('c_email');
                ?>
                </div>
            </div>             
            
            <div class="control-group <?php echo form_error('c_address_line1') ? 'error' : '' ?>">
                <label for="c_address_line1" class="control-label">Address Line 1</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_address_line1','id'=>'c_address_line1','type'=>'text','value'=>$c_address_line1);
                    echo form_input($tags);
                    echo form_error('c_address_line1');
                ?>
                </div>
            </div>  
            
            <div class="control-group <?php echo form_error('c_address_line2') ? 'error' : '' ?>">
                <label for="c_address_line2" class="control-label">Address Line 2</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_address_line2','id'=>'c_address_line2','type'=>'text','value'=>$c_address_line2);
                    echo form_input($tags);
                    echo form_error('c_address_line2');
                ?>
                </div>
            </div> 
            
            <div class="control-group <?php echo form_error('c_working_hours') ? 'error' : '' ?>">
                <label for="c_working_hours" class="control-label">Working Hours</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_working_hours','id'=>'c_working_hours','type'=>'text','value'=>$c_working_hours);
                    echo form_input($tags);
                    echo form_error('c_working_hours');
                ?>
                </div>
            </div> 
            
            <div class="control-group <?php echo form_error('c_facebook') ? 'error' : '' ?>">
                <label for="c_facebook" class="control-label">Facebook Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_facebook','id'=>'c_facebook','type'=>'text','value'=>$c_facebook);
                    echo form_input($tags);
                    echo form_error('c_facebook');
                ?>
                </div>
            </div>
                                                           
            <div class="control-group <?php echo form_error('c_twitter') ? 'error' : '' ?>">
                <label for="c_twitter" class="control-label">Twitter Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_twitter','id'=>'c_twitter','type'=>'text','value'=>$c_twitter);
                    echo form_input($tags);
                    echo form_error('c_twitter');
                ?>
                </div>
            </div> 
            
            <div class="control-group <?php echo form_error('c_google') ? 'error' : '' ?>">
                <label for="c_google" class="control-label">Google+ Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_google','id'=>'c_google','type'=>'text','value'=>$c_google);
                    echo form_input($tags);
                    echo form_error('c_google');
                ?>
                </div>
            </div>
            
            <div class="control-group <?php echo form_error('c_instagram') ? 'error' : '' ?>">
                <label for="c_instagram" class="control-label">Instagram Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_instagram','id'=>'c_instagram','type'=>'text','value'=>$c_instagram);
                    echo form_input($tags);
                    echo form_error('c_instagram');
                ?>
                </div>
            </div>                   
            
            <div class="control-group <?php echo form_error('c_linkedin') ? 'error' : '' ?>">
                <label for="c_linkedin" class="control-label">Linkedin Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_linkedin','id'=>'c_linkedin','type'=>'text','value'=>$c_linkedin);
                    echo form_input($tags);
                    echo form_error('c_linkedin');
                ?>
                </div>
            </div>
            
            <div class="control-group <?php echo form_error('c_pininterest') ? 'error' : '' ?>">
                <label for="c_pininterest" class="control-label">Pininterest Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_pininterest','id'=>'c_pininterest','type'=>'text','value'=>$c_pininterest);
                    echo form_input($tags);
                    echo form_error('c_pininterest');
                ?>
                </div>
            </div> 
            
            <div class="control-group <?php echo form_error('c_rssfeed') ? 'error' : '' ?>">
                <label for="c_rssfeed" class="control-label">RSS Feed Link</label>
                <div class="controls">
                <?php 
                    $tags=array('name'=>'c_rssfeed','id'=>'c_rssfeed','type'=>'text','value'=>$c_rssfeed);
                    echo form_input($tags);
                    echo form_error('c_rssfeed');
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
