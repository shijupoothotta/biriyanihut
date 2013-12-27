	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script>
	    var _gaq = [['_setAccount', 'UA-36600410-1'], ['_trackPageview']];
	    (function(d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	    }(document, 'script'));
	</script>
<?php
if(isset($page['needsDB'])){
    mysql_close($connection);  
}
?>
    </body>
</html>
