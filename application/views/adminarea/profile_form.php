<!-- Centre Container-->

<div class="row-fluid sortable">
<div class="box span12">
<!-- Form -->
    <div class="box-content">
	<?php   
        $attributes = array('class' => 'form-horizontal well', 'id' => 'form');
        echo form_open('adminarea/edit_password', $attributes); 
    ?>
    <fieldset>
      <legend>Edit Password</legend>
      
      <div class="control-group <?php echo form_error('old_password') ? 'error' : '' ?>">
        <label for="old_password" class="control-label">Old Password <span class="required">*</span></label>
        <div class="controls">
          <input type="password" id="old_password" name="old_password" value="<?php echo $old_password ?>" autocomplete="off">
           <span class="help-inline">
                <?php echo form_error('old_password'); ?>
            </span>
        </div>
      </div>
                            
      <div class="control-group <?php echo form_error('new_password') ? 'error' : '' ?>">
        <label for="new_password" class="control-label">New Password <span class="required">*</span></label>
        <div class="controls">
          <input type="password" id="new_password" name="new_password" value="<?php echo $new_password ?>" autocomplete="off">
           <span class="help-inline">
                <?php echo form_error('new_password'); ?>
            </span>
        </div>
      </div>
      
      <div class="control-group <?php echo form_error('confirm_password') ? 'error' : '' ?>">
        <label for="confirm_password" class="control-label">Confirm Password <span class="required">*</span></label>
        <div class="controls">
          <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirm_password ?>" autocomplete="off">
           <span class="help-inline">
                <?php echo form_error('confirm_password'); ?>
            </span>
        </div>
      </div>                      
    
      <div class="form-actions">
        <button type="submit" class="btn btn-info">Save changes</button>
        <button type="reset" class="btn" onclick="document.location.href='<?php echo base_url()?>adminarea';">Cancel</button>
      </div>
    </fieldset>
  </form>
    </div> 
    <!-- // Form -->
</div>    
</div> 
<!-- // Centre Container--> 