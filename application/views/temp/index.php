<?php
$page['title'] = 'Home';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
	<title><?php if(isset($page['title'])){ echo $page['title'] . " :: "; } ?>Biriyani Hut</title>
        <meta name="description" content="Toowoomba&#39;s First South Indian Restaurant">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?Php echo base_url() ?>assets/tempcss/main.css">

   </head>
    <body>

<div id="page" class="home">
    <h1>Biriyani Hut</h1>
    <img src="<?Php echo base_url() ?>assets/tempcss/biriyanihutbanner.jpg" alt="Biriyani Hut Banner">
    <address>
	209 Margaret Street, Toowoomba, Queensland, Australia
    </address>
    <p>Toowoomba&#39;s First South Indian Restaurant</p>
    <p>Phone: 
	<a href="tel:+61 7 4638 8405" title="Office">+61 7 4638 8405</a>, 
	<a href="tel:+61 468 953 111" title="Mobile">+61 468 953 111</a>, 
	<a href="tel:+61 435 506 711" title="Mobile">+61 435 506 711</a></p>	    
    <h2>Working Hours</h2>
    <ul id="workingHours">
	<li>11:00am to 2:30pm</li>
	<li>5:00pm till Late</li>
    </ul>

</div>
    </body>
</html>