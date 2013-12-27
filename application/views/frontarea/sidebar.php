<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jquery.sidebar.js</title>
        <link rel="stylesheet" type="text/css" href="<?Php echo base_url() ?>assets/frontarea/js-plugin/sideroad-jquery-sidebar/css/blue-glass/sidebar.css" />
        
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?Php echo base_url() ?>assets/frontarea/js-plugin/sideroad-jquery-sidebar/src/jquery.sidebar.js"></script>
    </head>
    <body>
        <ul id="demo_menu1" >
            <li><a href="#" >jQuery</a></li>
            <li><a href="#" >Write</a></li>
            <li><a href="#" >Less</a></li>
            <li><a href="#" >Do</a></li>
            <li><a href="#" >More</a></li>
        </ul>
        <ul id="demo_menu2" >
            <li><a href="#" >jQuery</a></li>
            <li><a href="#" >Write</a></li>
            <li><a href="#" >Less</a></li>
            <li><a href="#" >Do</a></li>
            <li><a href="#" >More</a></li>
        </ul>
        <ul id="demo_menu3" >
            <li><a href="#" >jQuery</a></li>
            <li><a href="#" >Write</a></li>
            <li><a href="#" >Less</a></li>
            <li><a href="#" >Do</a></li>
            <li><a href="#" >More</a></li>
        </ul>
        <ul id="demo_menu4" >
            <li><a href="#" >jQuery</a></li>
            <li><a href="#" >Write</a></li>
            <li><a href="#" >Less</a></li>
            <li><a href="#" >Do</a></li>
            <li><a href="#" >More</a></li>
        </ul>

        <b style="font-size:80px;position:absolute;top:42%;left:35%;" >jquery.sidebar</b>
        <script type="text/javascript">
        $("ul#demo_menu1").sidebar();
        $("ul#demo_menu2").sidebar({
            position:"right",
            callback:{
                item : {
                    enter : function(){
                        $(this).find("a").animate({color:"red"}, 250);
                    },
                    leave : function(){
                        $(this).find("a").animate({color:"white"}, 250);
                    }
                }
            }
        });
        $("ul#demo_menu3").sidebar({
            position:"top",
          open:"click"
        });
        $("ul#demo_menu4").sidebar({
            position:"bottom"
        });
        </script>
    </body>
</html>