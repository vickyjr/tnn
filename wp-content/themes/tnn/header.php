<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.1/fotorama.css" rel="stylesheet"> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-nav">
  <div>
    <div class="row">
      <div id="tnn-logo" class="small-5 large-3 medium-2 columns"> 
      	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
      		<img class="" src="<?php echo get_template_directory_uri(); ?>/img/TNN-logo.png" alt="TNN logo">
      	</a> 
      </div>
      <div class="small-2  small-push-9 medium-reset-order large-8 medium-10 medium-offset-2 large-reset-order 
      columns large-offset-3"> 
      <a href="#" class="toggle-top-menu">
      	<img src="<?php echo get_template_directory_uri(); ?>/img/collapsible-btn.png" alt="collapse menu">
      </a>
        <?php wp_nav_menu( array( 'menu' => 'Main menu',
        						  'theme_location' => 'primary', 
        						  'menu_id'         => 'top-menu',
        						  'container' => false,
        						  'menu_class' => 'pagination' 
								  ) ); ?>
      </div>
      <div id="social-top" class="small-5 small-push-5 medium-reset-order large-2 medium-3 large-reset-order columns"> 
      	<a href="https://www.facebook.com/TNNRaleigh" target="_blank"><span class="social-top social-top-fb"></span></a> 
		<a href="https://twitter.com/tnnraleigh"  target="_blank"><span class="social-top social-top-twitter"></span></a> 
		<a href="http://instagram.com/tnnraleigh"  target="_blank"><span class="social-top social-top-instagram"></span></a> </div>
    </div>
  </div>
</div>