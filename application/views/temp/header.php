<?php
header('X-UA-Compatible: chrome=1;IE=Edge');
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
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<?php
    if(isset($page['headers']) && is_array($page['headers'])){
	echo implode('\n\t', $page['headers']);
    }
?>	
    </head>
    <body>
<?php	

if(isset($page['needsDB'])){
    $connection = mysql_connect(
	"mysql1026.servage.net", 
	"biriyanihut", 
	"AySWvgwPHnb8PrhPx4V3xVZk2BG7cX"
    ); 

    mysql_select_db("biriyanihut", $connection);

    /* foodType
     *	id
     *	name
     *	preOrderOnly
     *	hide
     * 
     * foodItems
     *	id
     *	name
     *	foodType
     *	price
     *	desc
     *	hide
     * 
     * users
     *	id
     *	username
     *	password
     *	isSystemAccount
     *	hash
     *	name
     *	email
     */    
}
 
 ?>
	
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->