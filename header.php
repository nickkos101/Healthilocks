<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!-- links -->
	<link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
<!-- links ends -->	
<?php wp_head();?>

<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
</style>

</head>

<body <?php body_class(); ?>>

	<div id="wrapper">
		<header>
			<div class="logo-holder"><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>" /></a></div>
			<div class="header-right">
				<div class="top-link">
					<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Professionals Widget') ) : ?> <?php endif; ?></ul>
 				</div>
				<div class="topmenu-holder">
					<?php wp_nav_menu(array('theme_location'=>'top-menu','container_class'=>'sf-menu-wrapper group','menu_class'=>'menu-top','fallback_cb'=>'header_fallback','link_before'=>'<span>','link_after'=>'</span>')); ?>
				</div>
			</div>
		</header>
		
		<nav>

			<?php wp_nav_menu(array('theme_location'=>'header-menu','container_class'=>'sf-menu-wrapper group','menu_class'=>'topnav','fallback_cb'=>'header_fallback','link_before'=>'<span>','link_after'=>'</span>')); ?>
		</nav>
	<div style="width:100%; float:left; margin-top:10px;">
<a href="https://docs.google.com/forms/d/1OJ1pEs4FomCbkI75AeOmQx65ooFAEVRGT1DqHDv9nP4/viewform"><div style="width:40%; float:left; background:#FDD017;padding:10px 2%; height:200px;"><h2>ORDERING: Stylists & Salon</h2> <br/><p style="font-weight:bold; font-size:18px;line-height:1.5;">Owners call 1-800-431-1365 for Phone Orders (24/7 availability) or Click Here</p></div></a>
<a href=" http://shop.healthilocks.com/"><div style="width:40%;color:#000; padding:10px 2%;float:right; background:#00FFFF; height:200px;"><h2>ORDERING: </h2><br/><p style="font-weight:bold; line-height:1.5;font-size:18px;">Customers call 1-800-431-1365 for Phone Orders (24/7 availability) or Click Here </p></div></a>
</div>