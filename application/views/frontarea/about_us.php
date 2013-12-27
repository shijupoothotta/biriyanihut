<!-- page content -->
<section class="slice clearfix">
  <div class="container"> 
  	<?php 
	if($about)
	{
		foreach($about as $row)
		{  
	?>  
        <div class="row">
            <section class="span12 mb15 clearfix">
                <h2><?php echo $row->c_title; ?></h2>
                <div class="divider"><span></span></div>  
                <div class='well'>
                    <?php echo $row->c_description; ?>
                </div>
            </section>
        </div>
	<?php 
        } 
    }
    ?>    
  </div>
</section>

<!-- page content -->
