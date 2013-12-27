<!-- content -->
<section id="content" class="home">

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
    <div class="topBox clearfix">
            <div class="bigIconsColumnsWrapper">


                <article class="one_fourth">

                    <a href="" class="iconWrapper iconBig  ch-item">
                        <i class="icon-tasks"></i>
                        <div class="ch-info">
                            <span> more info </span>                                           
                        </div>
                    </a>
                 

                </article>

                <article class="one_fourth">

                    <a href="" class="iconWrapper iconBig ch-item">
                        <i class="ui-icon ui-icon-delivery"></i>
                        <div class="ch-info">
                            <span> more info </span>                                           
                        </div>
                    </a>
                  

                </article>
                
                <article class="one_fourth">

                    <a href="" class="iconWrapper iconBig ch-item">
                        <i class="icon-users"></i>
                        <div class="ch-info">
                            <span> more info </span>                                           
                        </div>
                    </a>
           

                </article>                

                <article class="one_fourth last">


                    <a href="" class="iconWrapper iconBig ch-item">
                        <i class="icon-ok"></i>
                        <div class="ch-info">
                            <span> more info </span>                                           
                        </div>
                    </a>
                </article>


            </div>
        </div>    
</div>
</section> 
<!-- three blocs -->


<!-- carousel works-->
<?php if($category) : ?>
<?php
$count=1;
foreach($category as $row)
{
$count++;
?>
<section class="slice">
<div class="container">
<div class="row">
    <div class="span12">
    <h2>
    	<a href="<?Php echo base_url()?>home/menu_items" style="text-decoration:none"><?php echo $row->c_category; ?></a>
    </h2>
    <div class="divider"><span></span></div>  
    </div>

    <div class="span12">
    <div id="projectCarousel<?php echo $count ?>" class="carousel slide">
        <div class="carousel-inner da-thumbs">
        <?php 
        $total=$this->modal_db->getProductByCategoryCount($row->id);
		$i=0;
		do
		{ 
        ?>
        <div class="<?php echo $i==0 ? 'active' : '' ?> item">
            <div class="row">
				<?php 
                $product=$this->modal_db->getProductByCategory($row->id,1,4,$i);
                if($product)
                { 
                    foreach($product as $prow)
                    {
                ?>            
                <div  class="span3" >
                    <article>
                      <a href="<?Php echo base_url() ?>uploads/images/full/<?Php echo $prow->c_image ?>" class="prettyPhoto" title="<?Php echo $prow->c_description.'<br />Price: $'.$prow->n_price; ?>" >
                      <section>
                      <img alt="<?Php echo $prow->c_name ?>" src="<?Php echo base_url() ?>uploads/images/small/<?Php echo $prow->c_image ?>"/>
                      </section>
                      <div>
                      <span class="iconWrapper iconLink"><i class="icon-search"></i></span> 
                      </div>
                      </a>
                      <section class="projectInfo">
                      <h3><?Php echo substr($prow->c_name,0,21); ?></h3>
                      <p><?Php echo substr($prow->c_description,0,55); echo strlen($prow->c_description)>55 ? '...':'' ?></p>
                      <span class="label label-important">$<?Php echo $prow->n_price; ?></span>
                      </section>
                    </article> 
                </div>
				<?php 
                    } 
                }
                ?>
                </div>
            </div>                 
        <?php 
		$i++;
        } while($i<=($total/4));
        ?>
        </div>
    <a class="left carousel-control" href="#projectCarousel<?php echo $count ?>" data-slide="prev">
    <i class="icon-left-circle"></i></a>
    <a class="right carousel-control" href="#projectCarousel<?php echo $count ?>" data-slide="next">
    <i class="icon-right-circle"></i></a>
    
    </div>
    </div>
</div>
</div>
</section>
<?php } ?> 
<?php endif ?>  


<!-- Call to action -->
<section class="slice">
    <div  class="container">
        <div class="row-fluid callToActionBoxed">
            <div class="span7">
              <div class="ctaText">
                <h3><?Php echo $about->c_title?></h3>
                  <p><?Php echo $about->c_description?></p>
                </div>
            </div>
            <div class="span5"> 
                <div class="btnWrapper">
                    <a href="<?Php echo base_url()?>home/about_us" class="iconBtn" title="BIRIYANIHUT"><i class="icon-download"></i>Read more</a> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action -->



            </section> 
            <!-- content -->

