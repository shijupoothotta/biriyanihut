<div class="span12" style="height:30px"></div>
<div class="span2"></div>

<div class="span9 offset1">
  <div class="row-fluid sortable">
    <div class="box span12">
      <div class="span4" align="center"> 
      	<img src="<?Php echo base_url() ?>assets/adminarea/img/login.jpg" alt="login"> 
      </div>
      <div class="box-content span8" style="padding-bottom:0px;">
        <?php   
            $attributes = array('class' => 'form-horizontal well', 'id' => 'form','style'=>'margin-bottom:10px');
            echo form_open('adminlogin', $attributes); 
            ?>
        <div class="control-group <?php echo form_error('username') ? 'error' : '' ?>">
          <label for="adminid" class="control-label">User Name <span class="required">*</span></label>
          <div class="controls">
            <input type="text" class="span7" id="username" name="username" value="<?php echo set_value('username'); ?>">
            <span class="help-inline"><?php echo strip_tags(form_error('username'))?></span> </div>
        </div>
        <div class="control-group <?php echo form_error('password') ? 'error' : '' ?>">
          <label for="password" class="control-label">Password<span class="required">*</span></label>
          <div class="controls">
            <input type="password" class="span7" id="password" name="password" value="<?php echo set_value('password'); ?>">
            <span class="help-inline"><?php echo strip_tags(form_error('password'))?></span> </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-info">Login</button>
          <button type="reset" class="btn" onclick="document.location.href='<?php echo site_url()?>adminlogin';">Cancel</button>
        </div>
        <?Php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<div class="span12" style="height:30px"></div>