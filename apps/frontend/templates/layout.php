<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Fertilization 
   
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110412

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Star Wars</title>
<link rel="alternate" href="rss/all" title="My RSS feed" type="application/rss+xml" />
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
<script>
$(document).ready(function()    {
    $("#slider").click(function() {
        alert("funciona");
    });
    $(".hidden").toggle('slide',3500);
    
    $('.anythingSlider').anythingSlider({
        easing: "swing",                // Anything other than "linear" or "swing" requires the easing plugin
        autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not
        startStopped: false,            // If autoPlay is on, this can force it to start stopped
        delay: 3000,                    // How long between slide transitions in AutoPlay mode
        animationTime: 600,             // How long the slide transition takes
        hashTags: true,                 // Should links change the hashtag in the URL?
        buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
        pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
        startText: "Start",             // Start text
        stopText: "Stop",               // Stop text
        navigationFormatter: null       // Details at the top of the file on this use (advanced use)
    });
    });
</script>

</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="<?php echo url_for('@homepage') ?>">Star Wars </a></h1>
			<p>template design by <a href="http://www.freecsstemplates.org">FCT</a></p>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="<?php echo url_for('@homepage') ?>"><?php echo __("Portada") ?></a></li>
				<li><a href="<?php echo url_for('/personaje') ?>"><?php echo __("Personajes") ?></a></li>
				<li><a href="<?php echo url_for('/pelicula') ?>"><?php echo __("Peliculas") ?></a></li>
			</ul>
		</div>
	</div>
	<!-- end #header -->
	<div id="splash"><img class="banner" src="/images/swheader.jpg" width="960" height="301" alt="" /></div>
	<div id="page">
		<div id="content">
			<?php echo $sf_content ?>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2><?php echo __("Razas") ?></h2>
					<ul>
			<?php include_partial('raza/list', array('razas' => RazaPeer::doSelect(new Criteria()))) ?> 
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer-content" class="container">
	<div id="footer-bg">
	</div>
</div>
<div id="footer">
<span class="left"> <a href="<?php echo url_for('@homepage').'en' ?>" class="g1" accesskey="n"><span>EN</span><br/><?php echo __("English") ?></a> </span>
<span class="right"> <a href="<?php echo url_for('@homepage').'es' ?>" class="g2" accesskey="s"><span>ES</span><br/><?php echo __("Spanish") ?></a> </span> 
	<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
