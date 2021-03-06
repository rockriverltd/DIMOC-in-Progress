<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:300, 700|Roboto+Condensed:400,300|Quantico:700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rock' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="container">
			<div class="row middle-xs" style="margin-top: -.5rem">
					<img class="header-logo" src="http://localhost:8888/rock/wp-content/uploads/2016/03/dimoc-logo.png">
					<nav id="site-navigation" class="main-navigation" role="navigation" style="margin-left: 2rem">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rock' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				
					<div class="header-icon-container">
						<a href="#"><img class="header-icon" src="http://dimocstaging.rockriverdev.com/wp-content/uploads/2016/03/cart-100.svg"></a>
						<a href="#"><img class="header-icon" src="http://dimocstaging.rockriverdev.com/wp-content/uploads/2016/03/lightbox-100.svg"></a>
						<a href="#"><img class="header-icon" src="http://dimocstaging.rockriverdev.com/wp-content/uploads/2016/03/user-100.svg"></a>
						<a href="#" class="text-color-3 inline"><b>Sign In</b></a>
					</div>
				
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
