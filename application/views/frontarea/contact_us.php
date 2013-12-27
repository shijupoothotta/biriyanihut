<!-- three blocs -->
<section class="sliceTop"> 

    <div class="container">

        <div class="row">
            <div class="span12 drop-shadow lifted">

                <div class="topQuote">
                    <h1>
                        <strong>Toowoomba's First South Indian Restaurant</strong><br />
                        Welcome to <strong>Biriyani Hut</strong>, 
                        We are delighted to inform you that Biriyani Hut is ready to surprise your taste buds like never before...
                        
                    </h1>
                </div>
                
            </div>
        </div>
    </div>
</section> 
<!-- three blocs -->

<div class="container">
<?php if ($this->session->flashdata('message')) :?>
  <div class="row"> 
    <div class="alert alert-block <?php echo $this->session->flashdata('type'); ?>">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo $this->session->flashdata('title'); ?></strong>
        &nbsp; &nbsp; 
        <?php echo $this->session->flashdata('message'); ?>
    </div>
  </div>        
<?php endif ?>  
</div>
<!-- page content -->
<section class="slice clearfix">
<div class="container">
    <div class="row"> 
    	<!-- contact form -->
        <div class="span12">
        <div class="box-content">
            
        <?php   
            $attributes = array('class' => 'form-horizontal', 'id' => 'form');
            echo form_open('home/send_mail', $attributes); 
        ?>
			<div class="control-group <?php echo form_error('c_name') ? 'error' : '' ?>">
            	<label for="c_name" class="control-label">Name <span class="required">*</span></label>
            	<div class="controls">
					<?php 
                        $tags=array('name'=>'c_name','id'=>'c_name',
                        'type'=>'text','class'=>'input-xlarge','placeholder'=>'Name','value'=>$c_name);
                        echo form_input($tags);
                        echo form_error('c_name');
                    ?>
                </div>
            </div>
            
			<div class="control-group <?php echo form_error('c_email') ? 'error' : '' ?>">
            	<label for="c_email" class="control-label">Email <span class="required">*</span></label>
            	<div class="controls">
					<?php 
                        $tags=array('name'=>'c_email','id'=>'c_email',
                        'type'=>'text','class'=>'input-xlarge','placeholder'=>'Email','value'=>$c_email);
                        echo form_input($tags);
                        echo form_error('c_email');
                    ?>
                </div>
            </div>
            
			<div class="control-group <?php echo form_error('c_phone') ? 'error' : '' ?>">
            	<label for="c_phone" class="control-label">Phone <span class="required">*</span></label>
	            <div class="controls">
					<?php 
                        $tags=array('name'=>'c_phone','id'=>'c_phone',
                        'type'=>'text','class'=>'input-xlarge','placeholder'=>'Phone','value'=>$c_phone);
                        echo form_input($tags);
                        echo form_error('c_email');
                    ?>
                </div>
            </div>                                           
            
            <div class="control-group <?php echo form_error('c_comments') ? 'error' : '' ?>">
            	<label for="c_comments" class="control-label">Comments</label>
	            <div class="controls">
					<?php 
                        $tags=array('name'=>'c_comments','class'=>'input-xlarge','id'=>'c_comments',
                        'type'=>'text','rows'=>'4','value'=>$c_comments,'placeholder'=>'Comment');
                        echo form_textarea($tags);
                        echo form_error('c_comments');
                    ?>
                </div>
            </div> 
            
            <br/>
            
            <div class="form-actions">
            <button name="submit" type="submit" class="btn" id="submit"> Submit</button>
            <button type="reset" class="btn ajax-link" 
                onclick="document.location.href='<?php echo base_url()?>home';">
                Cancel
            </button>            
            </div>
            <?Php echo form_close(); ?> 
            </div>
        </div>
    	<!-- contact form -->
    </div>
</div>
</section>

<!-- page content -->
