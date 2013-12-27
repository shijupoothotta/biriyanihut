<!-- globalWrapper --> 
<div id="globalWrapper">
<!-- slider -->
<section  id="sliderWrapperRS">

<div class="fullwidthbanner-container">
<div class="fullwidthbanner" >
<ul>
    <?php if($banner) : ?>
	<?php 
      $count=1;
      foreach($banner as $row)
      {
    ?>    
    <li data-transition="fade" data-slotamount="1"  data-masterspeed="2000"> 
      <img src="<?Php echo base_url() ?>assets/frontarea/images/slider/rs/thumb.png" alt="slide"/> 
      <div class="caption <?php echo $count%2 ? 'lfr'  : 'lfl'; ?>" data-x="<?php echo $count%2 ? '50' :'500'; ?>" data-y="26" data-speed="1000" data-start="<?php echo $count%2 ? '300' :'700'; ?>" data-easing="<?php echo $count%2 ? 'easeOutExpo' :'easeOutBack'; ?>">
      <img src="<?php echo base_url('uploads/images/slider/'.$row->c_image);?>" alt="slide" class="ie8PngFix"/>
      </div>
      
      <div class="caption sft" data-x="<?php echo $count%2 ? '495' :'70'; ?>" data-y="100" data-speed="300" data-start="<?php echo $count%2 ? '600' :'1600'; ?>" data-easing="easeOutExpo" >
          <h2><?php echo $row->c_title;?></h2>
      </div>
      <div class="caption sfb hidden-phone" data-x="<?php echo $count%2 ? '495' :'70'; ?>" data-y="175" data-speed="300" data-start="<?php echo $count%2 ? '700' :'1600'; ?>" data-easing="easeOutExpo">
          <h3>
            <?php echo auto_typography('<i class="icon-leaf"></i> '.$row->c_description);?>
          </h3>
     </div>
    </li>
    <?php $count++ ;} ?>
	<?php endif ?>     
</ul>

<div class="tp-bannertimer"></div>

</div>
</div>
</section>
<!-- slider -->