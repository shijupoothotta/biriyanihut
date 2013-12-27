<ul style="position: fixed; top: 300px; width: 40px;" id="example-2" class="sticklr sticklr-right sticklr-js">
            <li style="height: 40px;">
                <a style="height: 32px; width: 32px;" href="<?Php echo base_url()?>home/service#catering" class="icon-networking32" title="Catering"></a>
               
            </li>
            <li style="height: 40px;">
                <a style="height: 32px; width: 32px;" href="<?Php echo base_url()?>home/service#delivery" class="icon-product32" title="Home Delivery"></a>
            </li>
            <li style="height: 40px;">
                <a style="height: 32px; width: 32px;" href="<?Php echo base_url()?>home/service#byo" class="icon-login32" title="BYO"></a>
            </li>
            <li style="height: 40px;">
                <a style="height: 32px; width: 32px;" href="<?Php echo base_url()?>home/service#halal" class="icon-heart32" title="Halal Meat"></a> 
            </li>            
        </ul>        
<!-- footer -->
<footer class="footer1">
<div class="container" id="footer">
<div class="row">
    <div class="span6 contactWidget">
        <h2><br />
          <br />
      Contact us</h2>
        <div class="divider"><span></span></div>
        <address>
        <div class="vcard">
          <p class="fn">
              <location lat=-27.560577 long=151.954304><strong>BIRIYANI HUT</strong></location>
          <p>
          
          <p class="adr">
          
          <i class="icon-location"></i>&nbsp; 
          <span class="street-address">
              <a class="url" href="<?php echo $this->config->item('map_url')?>" target="_new">
              <?php echo $contact->c_address_line1; ?>
              </a>
          </span>
          <br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span class="region"><?php echo $contact->c_address_line2; ?></span><br>
          </p>
          <p class="tel">
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
          </p>
          <p class="email">
              <i class="icon-mail-alt"></i>&nbsp;
              <a href="mailto:<?php echo $contact->c_email; ?>"><?php echo $contact->c_email; ?></a>
          </p>                                        
        </div>                  
        </address>
        
    <h2>Follow us</h2>
    <div class="divider"><span></span></div>
    <ul class="socialNetwork nav">
    <?php if($contact->c_facebook) : ?>
    <li><a href="<?php echo $contact->c_facebook; ?>" class="icon-facebook socialIcon tips"  title="follow us on Facebook"><span>facebook</span></a></li>
    <?php endif ?>
    <?php if($contact->c_twitter) : ?>
    <li><a href="<?php echo $contact->c_twitter; ?>" class="icon-twitter-bird socialIcon tips"  title="follow us on Twitter"><span>twitter</span></a></li>
    <?php endif ?>
    <?php if($contact->c_google) : ?>
    <li><a href="<?php echo $contact->c_google; ?>" class="icon-gplus socialIcon tips"  title="follow us on Google +"><span>google +</span></a></li>
    <?php endif ?>
    <?php if($contact->c_instagram) : ?>
    <li><a href="<?php echo $contact->c_instagram; ?>" class="icon-instagram socialIcon tips"  title="follow us on Instagram"><span>instagram</span></a></li>
    <?php endif ?>
    <?php if($contact->c_linkedin) : ?>
    <li><a href="<?php echo $contact->c_linkedin; ?>" class="icon-linkedin socialIcon tips"  title="follow us on Linkedin"><span>linkedin</span></a></li>
    <?php endif ?>
    <?php if($contact->c_pininterest) : ?>
    <li><a href="<?php echo $contact->c_pininterest; ?>" class="icon-pinterest-circled socialIcon tips"  title="follow us on Pinterest"><span>Pinterest</span></a></li>
    <?php endif ?>
    <?php if($contact->c_rssfeed) : ?>
    <li><a href="<?php echo $contact->c_rssfeed; ?>" class="icon-rss socialIcon tips"  title="Our rss feed"><span>rss feed</span></a></li>
    <?php endif ?>                                
    </ul>                            
    </div>
    
    <div class="span6 testimonialWidget">
        <h2><br />
          <br />
      Location</h2>
        <div class="divider"><span></span></div>
        <iframe width="460" height="225" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?q=Biriyani+Hut,+Toowoomba,+Australia&amp;ie=UTF8&amp;hq=Biriyani+Hut,&amp;hnear=Toowoomba+Queensland,+Australia&amp;t=h&amp;ll=-27.561015,151.954243&amp;spn=0.004661,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
        <a href="https://www.google.com/maps?q=Biriyani+Hut,+Toowoomba,+Australia&amp;ie=UTF8&amp;hq=Biriyani+Hut,&amp;hnear=Toowoomba+Queensland,+Australia&amp;t=h&amp;ll=-27.561015,151.954243&amp;spn=0.004661,0.00912&amp;z=16&amp;iwloc=A&amp;source=embed" class="btn btn-mini  btn-block btn-success" target="_new">View Larger Map</a>
    </div> 
    <div class="span12">
      <span class="pull-left">Copyright © 2013 Biriyanihut</span>
      <a href="http://solvato.in" title="Solvato Online Buiness Solutions" style="color:#FFF; text-decoration:none">
      <span class="pull-right">solvato.in</span>
      </a>
    </div>                                               

</div>
</div>
</footer>


<!-- footer -->

</div>
<!-- Global wrapper -->

<!-- End Document 
================================================== -->

<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/respond/respond.min.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js/jquery.min.1.8.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>


<!-- third party plugins  -->
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/bootstrap/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/pretty-photo/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/jquery-cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/seaofclouds-tweet/tweet/jquery.tweet.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/hoverdir/jquery.hoverdir.js"></script>

<!-- jQuery KenBurn Slider  -->
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Custom  -->
<script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js/custom.js"></script>

<!-- google map  -->

</body>
</html>
