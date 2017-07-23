<?php
/**
 * The header template for our theme.
 *
 * Displays all of the <head></head> section and everything until the loop
 *
 * @package WordPress
 * @subpackage flexgrid
 * @since flexgrid 1.0
 */
?><!DOCTYPE html>

	<!--[if IE 7]>
		<html class="ie ie7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
		<html class="ie ie8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 9]>
		<html class="ie ie9" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
		<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> >