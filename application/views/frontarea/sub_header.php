<section id="content" class="fullWidth visible-desktop">
<header class="headerPage">
    <div class="container clearfix">
        <div class="row">
        <h1 class="span7"><?Php echo $sub_title ?></h1>
        <address>
        <div class="span5 vcard" id="navTrail">
          <span class="fn">
              <location lat=-27.560577 long=151.954304><strong>BIRIYANI HUT</strong></location>
          <span>
          <br />
          <span class="adr">
              <span class="street-address">
                <i class="icon-location"></i>&nbsp; 
                <a class="url" href="<?php echo $this->config->item('map_url')?>" target="_new">
                	<?php echo $contact->c_address_line1; ?>
                </a>
              </span>
              <br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="region"><?php echo $contact->c_address_line2; ?></span><br />
              </span>
              <span class="tel">
                  <i class="icon-phone"></i>&nbsp;
				  <?php 
                    $pieces = explode(",", $contact->c_mobile);	
                    foreach ($pieces as $piece)
                    {	  
                  ?>
                    <a href="tel:<?php echo $piece; ?>"><?php echo $piece; ?></a>
                    ,&nbsp;
                  <?php 
                    } 
			  		?>
				  	<a href="tel:<?php echo $contact->c_phone; ?>"><?php echo $contact->c_phone; ?></a>
              </span>
              <br />
              <span class="email">
                  <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:<?php echo $contact->c_email; ?>" class="email"><?php echo $contact->c_email; ?></a><br />
              </span>
          </span>                                   
        </div>                  
        </address>            
        </div>
    </div>
</header> 
</section>