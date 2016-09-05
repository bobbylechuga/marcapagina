<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marcapagina
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51072768-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img-responsive logo" src="<?php echo get_template_directory_uri() ?>/images/logo-marca-pagina.png"></a>
				<nav  role="navigation">
					<ul>
						<!--<li><a class="active" href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>-->
						<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<!--<li><a href="blog.html">Blog</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>-->
						<a target="_blank" href="https://www.facebook.com/apiedepaginapuntocom/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a target="_blank" href="https://twitter.com/marca_pagina"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</ul>
				</nav>
			</div>
		</div>
	</header>
