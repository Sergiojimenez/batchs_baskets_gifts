<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png">
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/./assets/js/main.min.js" ></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/./assets/js/plugins.min.js" ></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="branding-image">
  				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
  				</a>
			</h1>
		</div>
	<?php wp_nav_menu( array('menu' => 'contact' )); ?>
	
<div id="toggle">
  <div class="one"></div>
  <div class="two"></div>
  <div class="three"></div>
</div>

<div id="menu">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle"><?php _e( 'Primary Menu', '_mbbasetheme' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->
</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
