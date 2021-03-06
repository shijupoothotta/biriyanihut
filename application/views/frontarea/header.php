<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title><?php echo $title ?></title>
<?php echo meta('description', $meta) ?>
<?php echo meta('keywords', $keywords) ?>
<?php echo meta('author', 'Solvato Online Business Solutions') ?>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- CSS
================================================== -->
<!-- Bootstrap  -->
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/bootstrap/css/bootstrap.min.css">

<!-- web font  
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">
-->
<!-- plugin css  -->
<link rel="stylesheet" type="text/css" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/pretty-photo/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/rs-plugin/css/settings.css" media="screen" />
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/isotope/css/style.css">
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/hoverdir/css/style.css">


<!-- icon fonts -->
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/font-icons/custom-icons/css/custom-icons.css">
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/font-icons/custom-icons/css/custom-icons-ie7.css">

<!-- Custom css -->
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/css/layout.css">
<link type="text/css" id="colors" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/css/colors.css">

<!-- Extended by Solvato  -->
<link type="text/css" id="solvato" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/css/bootsolvato.css">

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!--[if gte IE 9]><style type="text/css">.iconBig, .active, .hover a , .Shover a { filter: none !important; } </style> <![endif]-->

<script src="<?Php echo base_url() ?>assets/frontarea/js/modernizr-2.6.1.min.js"></script>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?Php echo base_url() ?>assets/frontarea/images/favicon.ico">
<link rel="apple-touch-icon" href="<?Php echo base_url() ?>assets/frontarea/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?Php echo base_url() ?>assets/frontarea/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?Php echo base_url() ?>assets/frontarea/images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?Php echo base_url() ?>assets/frontarea/images/apple-touch-icon-144x144.png">
<!-- Side bar ================================================== -->
<link type="text/css" rel="stylesheet" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/stickr/jquery-sticklr-1.4-light-color.css">
<!-- Side bar ================================================== -->
</head>
<body>
<!-- Primary Page Layout 
================================================== -->

<!-- header -->
<header id="mainHeader" class="clearfix">


  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
          <div class="container-fluid">
            <a href="<?Php echo base_url()?>home/actual">
            	<img src="<?Php echo base_url() ?>assets/frontarea/images/logo-biriyani5.png"> 
            </a> 
            <!--workinghours -->
                <div class="workinghours"> 
                    <img src="<?Php echo base_url() ?>assets/frontarea/images/top-workinghours.png" >
                    <p><time><?php echo $contact->c_working_hours; ?></time> </p>
                </div>
            <!--workinghours -->            
            <nav id="mainMenu" class="clearfix">
                <ul class="nav">
                    <li><a href="<?Php echo base_url()?>home/actual" class="firstLevel <?php echo $this->uri->segment(2) == 'actual' ? 'active' : '' ?>" >Home</a></li>
                    <li><a href="<?Php echo base_url()?>home/menu_items" class="firstLevel <?php echo $this->uri->segment(2) == 'menu_items' ? 'active' : '' ?>">Menu</a></li>
                    <li><a href="<?Php echo base_url()?>home/service" class="firstLevel <?php echo $this->uri->segment(2) == 'service' ? 'active' : '' ?>">Services</a></li>                            
                    <li><a href="<?Php echo base_url()?>home/about_us" class="firstLevel <?php echo $this->uri->segment(2) == 'about_us' ? 'active' : '' ?>">About Us</a></li>
                    <li><a href="<?Php echo base_url()?>home/contact_us" class="firstLevel last <?php echo $this->uri->segment(2) == 'contact_us' ? 'active' : '' ?>">Contact Us</a></li>
                </ul>
              </nav>

          </div>
      </div>
  </div>
  
</header>
<!-- header --> 
        
         