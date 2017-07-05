<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parlorment
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parlorment' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a href="<?php echo get_home_url(); ?>">
			<div class="site-branding">
				<h1>parlor-<br>ment</h1>
			</div><!-- .site-branding -->
		</a>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<ul>
				<li class="nav-cat-1"><p>Style</p></li>
				<li class="nav-cat-2"><p>Home</p></li>
				<li class="nav-cat-3"><p>Sport</p></li>
				<li class="nav-cat-4"><p>Design</p></li>
				<li class="nav-cat-5"><p>Science</p></li>
			</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
