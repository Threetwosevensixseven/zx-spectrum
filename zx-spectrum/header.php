<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php  language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php  bloginfo('html_type'); ?>; charset=<?php  bloginfo('charset'); ?>" />
		<link rel="stylesheet" href="<?php  bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php  bloginfo('pingback_url'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php  wp_head(); ?>
	</head>
	<body onload="flipcursor(0);initWrite();" <?php  body_class(); ?>>
<div id="container">
  		<header class="header-home">
  			<h1>**** <a href="<?php  echo esc_url(home_url('/')); ?>"><?php  bloginfo('name'); ?></a> ****</h1>
  			<h2><?php  bloginfo('description'); ?></h2>
  			<h3><?php  wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => '' ) ); ?></h3>
  		</header>
	  <div id="wrapper">
 		<section class="content">