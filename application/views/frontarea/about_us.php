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
