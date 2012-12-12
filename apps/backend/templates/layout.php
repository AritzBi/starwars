<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Classifieds  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120528

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Panel de Administrador</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><?php echo link_to('Homepage', '@homepage') ?></li>
			<li><?php echo link_to('Película', '@pelicula') ?></li>
			<li><?php echo link_to('Personaje', '@personaje') ?></li>
			<li><?php echo link_to('Raza', '@raza') ?></li>
			<li><?php echo link_to('participación', '@participacion') ?></li>
            <li><?php echo link_to('Groups', '@sf_guard_group') ?></li>
            <li><?php echo link_to('Permissions', '@sf_guard_permission') ?></li>
			<li><?php echo link_to('Users', '@sf_guard_user') ?></li>
            <li><?php echo link_to('Logout', '@sf_guard_signout') ?></li>

		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Classifieds</a></h1>
			<p>Template design by <a href="http://www.freecsstemplates.org">FCT</a></p>
		</div>
	</div>
</div>
<div id="wrapper">
    		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
                     <?php echo $sf_content ?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>

</div>
<div id="footer">
	<p>2012. Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">FCT</a>. Photos by <a href="http://fotogrph.com/">fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
