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
<script type="text/javascript">
$(document).ready(function()    {
    $(".hidden").toggle('slide',3500);
        
    /*$('li.raza').click(function() {
        var id=$(this).attr("id");
        id="div#"+id;
        $(id).slideToggle();
    });*/
    
    /*$('span.ajax').hover(function()    {
        $(this).toggleClass("titleHover");
    });*/
    
    $('.ajax').hover(function() {
        $(this).toggleClass("span#titleHover");
    });
    
    $('.anythingSlider').anythingSlider({
        theme: "construction",
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
        
        $('span.ajax').click(function () { 
            $.ajax({
                type: "GET",
                url: $(this).attr("title"),
                data: "html",
                success: function(data){
                    $('#content').html(data);
                }
            });
        });
         
        $('.viewport').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '170', left: '0', top: '0', width: '170'}, 100);
        $(this).children('a').children('span').fadeIn(200);
        }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '180', left: '0', top: '0', width: '180'}, 100);
        $(this).children('a').children('span').fadeOut(200);
        });
        
    $(this).ajaxComplete(function(){
        
        $('.anythingSlider').anythingSlider({
        theme: "construction",
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
        
        $('span.ajax').click(function () { 
            $.ajax({
                type: "GET",
                url: $(this).attr("title"),
                data: "html",
                success: function(data){
                    $('#content').html(data);
                }
            });
        });
    });
 });
</script>

</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
    <div id="social">
    <p><a href="https://twitter.com/StarWarsIWeb" class="twitter-follow-button" data-show-count="true" data-size="large">Follow @StarWarsIWeb</a>
    <div class="fb-like" data-href="http://www.facebook.com/pages/SWIWeb/296437283802018?fref=ts" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div></p>
    </div>
    
		<div id="menu">
            <div id="languages">
                <a class="language" href="<?php echo url_for('@homepage').'en' ?>" accesskey="n"><img src="/images/english.png" alt="English" /></a>
                <a class="language" style="margin-left:635px;" href="<?php echo url_for('@homepage').'es' ?>" accesskey="s"><img src="/images/spain.png" alt="Spanish" /></a>
            </div>
			<ul>
				<li class="current_page_item"><a id="frontHome" href="<?php echo url_for('@homepage') ?>"><?php echo __("Portada") ?></a></li>
				<li><span class="ajax" title="<?php echo url_for('/personaje') ?>"><?php echo __("Personajes") ?></span></li>
				<li><span class="ajax" title="<?php echo url_for('/pelicula') ?>"><?php echo __("Peliculas") ?></span></li>
                <li><span class="ajax" title="<?php echo url_for('/raza') ?>"><?php echo __("Razas") ?></span></li>
                <?php if($sf_user->isAuthenticated()): ?>
                <li><span class="login"><a href="<?php echo url_for('/logout') ?>" style="padding: 0px 15px 15px;">Logout</a></span></li>
                <?php else: ?>
                <li><span class="login"><a href="<?php echo url_for('/backend_dev.php') ?>" style="padding: 0px 15px 15px;">Login</a></span></li>
                <?php endif; ?>
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
					<div id="razas" class="sidebar" style="margin-bottom:2px;"><h2><?php echo __("Razas") ?></h2></div>
					<ul style="background:rgb(213,177,99);border-radius:6px;font-weight:bold;color:black;">
			<?php include_partial('raza/list', array('razas' => RazaPeer::doSelect(new Criteria()))) ?> 
					</ul>
				</li>
                <li>
					<div id="peliculas" class="sidebar" style="margin-bottom:2px;margin-top:15px;"><h2><?php echo __("Peliculas") ?></h2></div>
					<ul style="background:rgb(213,177,99);border-radius:6px;font-weight:bold;color:black;">
			<?php include_partial('pelicula/list', array('peliculas' => PeliculaPeer::doSelect(new Criteria()))) ?> 
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
</div>
<!-- end #footer -->
</body>
</html>
