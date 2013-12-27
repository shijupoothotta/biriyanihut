<!-- content -->

<?php if($category) : ?>
<div class="container clearfix">
    <div class="row">
        <nav id="filter" class="four columns">
            <ul>
                <li><a href="" class="current btn btn-3d btnSmall"  data-filter="*">All</a></li>
                <?php 
                foreach($category as $row)
                {
                ?>
                <li><a href="" class="btn btn-3d btnSmall"  data-filter=".<?php echo $row->id; ?>"><?php echo $row->c_category; ?></a></li>                                
                <?php 
                } 
                ?>  
            </ul>

        </nav>
    </div>
</div>
<?php  endif ?>  

<div class="slice clearfix">

    <div class="container" id="fourColumns">
        <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix da-thumbs" id="4">
            <?php 
            if($product)
            { 
                foreach($product as $prow)
                {
            ?>  
                <article class="span3 isotopeItem <?php echo $prow->n_category_id; ?> masoneryBloc">
                    <a class="sizer" href="">
                        <section class="imgWrapper"> 
                        <img src="<?Php echo base_url() ?>uploads/images/full/<?Php echo $prow->c_image ?>" alt="" />
                        <h4 align="center" style="background:#FF6600; color:#fff;"><?Php echo $prow->c_name ?></h4>
                        </section> 
                        <div>
                            <span class="iconWrapper iconLink"><i class="icon-plus"></i></span>
                        </div>
                        
                    </a>
              		<section class="hiddenInfo">
                        <h3><?Php echo $prow->c_name ?></h3>
                        <p class="boxTextWrapper">
							<?Php echo $prow->c_description ?> <br />
                        	<span class="label label-important">$<?Php echo $prow->n_price; ?></span>
                        </p>
                        
                  	</section>
                </article>
            <?php 
                } 
            }
            ?>
            </div>
        </div>
    </div>
</div>

<!-- // content -->