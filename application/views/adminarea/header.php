<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<?php echo meta('description', $meta) ?>
	<?php echo meta('keywords', $keywords) ?>
	<?php echo meta('author', 'Solvato Online Business Solutions') ?>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- The styles -->
	<link id="bs-css" href="<?Php echo base_url() ?>assets/adminarea/css/bootstrap-spacelab.css" rel="stylesheet">
	<style type="text/css">
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link rel="shortcut icon" href="<?Php echo base_url() ?>assets/adminarea/img/favicon.ico">
	<link href="<?Php echo base_url() ?>assets/adminarea/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?Php echo base_url() ?>assets/adminarea/css/charisma-app.css" rel="stylesheet">
	<link href="<?Php echo base_url() ?>assets/adminarea/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?Php echo base_url() ?>assets/adminarea/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/chosen.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/uniform.default.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/colorbox.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/opa-icons.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/uploadify.css' rel='stylesheet'>
	<link href='<?Php echo base_url() ?>assets/adminarea/css/bootsolvato.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?Php echo base_url() ?>assets/img/favicon.ico">
	</head>

<body>

<!-- topbar starts -->
<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
<div class="navbar">
	<div class="navbar-inner">
    	<div class="container-fluid">
        	<div class="span2">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> 
                <span class="icon-bar"></span> <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </a> 
            <a  href="<?Php echo site_url('adminarea')?>"> 
            <img alt="Biriyani Hut Logo" src="<?Php echo base_url() ?>assets/adminarea/img/logo-biriyani.png" /> 
            </a> 
            </div>
            <!-- admin dropdown starts -->
            <div class="btn-group pull-right" > 
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> 
                    <i class="icon-user"></i><span class="hidden-phone"> admin</span> <span class="caret"></span> 
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?Php echo base_url()?>">Site</a></li>
                  <li><a href="<?Php echo base_url()?>adminarea/logout">Logout</a></li>
                </ul>
             </div>
             <!-- admin dropdown ends -->
              
        </div>
  </div>
</div>
<?php } ?>    
<!-- topbar ends -->


<!-- fluid-container--> <!-- Middle Area Starts -->
<div class="container-fluid">
<div class="row-fluid">

<!-- left menu starts -->
<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>  <!-- End in footer -->
<?php if($this->session->userdata('admin_logged_in')) : ?>
<div class="span2 main-menu-span">
	<div class="well nav-collapse sidebar-nav">
    	<ul class="nav nav-tabs nav-stacked main-menu">
        	<li class="nav-header hidden-tablet">Home</li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminarea">
                    <i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminarea/edit_password">
                    <i class="icon-lock"></i><span class="hidden-tablet"> Edit Password</span></a></li> 
                                       
            <li class="nav-header hidden-tablet">Food Menu Category</li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>admincategory">
                    <i class="icon-glass"></i><span class="hidden-tablet">Menu Categories</span></a></li>            
          		<li><a class="ajax-link" href="<?Php echo base_url()?>admincategory/create">
                    <i class="icon-glass"></i><span class="hidden-tablet">Add Menu Category</span></a></li>
                     
            <li class="nav-header hidden-tablet">Menu Item</li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminproduct">
                    <i class="icon-shopping-cart"></i><span class="hidden-tablet">Menu Items</span></a></li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminproduct/create">
                    <i class="icon-shopping-cart"></i><span class="hidden-tablet">Add Menu Item</span></a></li>                     
            <li class="nav-header hidden-tablet">Content</li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminabout">
                    <i class="icon-tag"></i><span class="hidden-tablet"> About Us</span></a></li>
          		<li><a class="ajax-link" href="<?Php echo base_url()?>adminbanner">
                    <i class="icon-tag"></i><span class="hidden-tablet"> Banner</span></a></li>                    
          		<li><a class="ajax-link" href="<?Php echo base_url()?>admincontact/edit">
                    <i class="icon-tag"></i><span class="hidden-tablet"> Contact Us</span></a></li>                                       
		</ul>
    	<label id="for-is-ajax" class="hidden-tablet" for="is-ajax">
		<input id="is-ajax" type="checkbox" checked>
          Enable Ajax
        </label>        
	</div> <!--/.well --> 
<?php
// Current time
				date_default_timezone_set('GMT');
				$temp= strtotime("+5 hours 30 minutes"); 
				$currentdateandtime = date("Y-m-d h:i:s",$temp);
				$currentdate = date("d-m-Y",$temp);
				$this->db->select("TIME(ADDTIME('$currentdateandtime','00:01:00')) dfromminits",FALSE);
				$t1	= $this->db->get('admin')->row();	
				$cur_time = $t1->dfromminits;
				$formattime=date("h:i:s A",strtotime($cur_time));	
				
?>	    
	<div class="well sidebar-nav" align="center">
	    <h1><?php echo $this->session->userdata('username'); ?></h1> 
        <br/>
		<img src="<?Php echo base_url() ?>assets/adminarea/img/profile.png" alt="Smily" class="img-circle">
        <h1><small><?php echo $this->session->userdata('ip_address'); ?></small></h1>
        <h1><small><?php echo $formattime; ?></small></h1>
    </div>    
</div> <!--/span2--> 

<?php endif ?>
<!-- left menu ends -->


<noscript>
    <div class="alert alert-block span12">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have 
        <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>

<!-- content starts -->
<div id="content" class="span10">

<?php } ?>

<!-- Flash Message  -->  
	<?php if ($this->session->flashdata('message')) :?>
            <div class="alert alert-block <?php echo $this->session->flashdata('type'); ?>">
            <button type="button" class="close" data-dismiss="alert">×</button>
            	<strong><?php echo $this->session->flashdata('title'); ?></strong>
                &nbsp; &nbsp; 
				<?php echo $this->session->flashdata('message'); ?>
            </div>
     <?php endif ?>   
     
<!-- // Flash Message  -->      

<!-- Breadcrumb  --> 
<?php if($this->session->userdata('admin_logged_in')) : ?> 
			<div>
				<ul class="breadcrumb">
						<?php echo set_breadcrumb(); ?> 
				</ul>
			</div>     
<?php endif ?>             
<!-- //Breadcrumb  --> 