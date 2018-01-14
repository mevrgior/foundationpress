<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.3/mapbox.css' rel='stylesheet' />
		<link href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v0.0.3/leaflet.fullscreen.css' rel='stylesheet' />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
		<link href='css/airportmap.css' rel='stylesheet' type='text/css'>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>


	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="small-0 medium-8 columns top-header-menu">
				<?php 
				if (has_nav_menu('top-header-menu')) {
					wp_nav_menu( array( 'theme_location' => 'top-header-menu' ) ); 

				}				
				?>
			</div>
			<div class="small-12 medium-4 columns">
				<?php get_search_form(); ?>
			</div>
		</div>
		<!-- mobile navigation -->
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img id="mobile-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/LogoKVinfo.png" alt="More KV">
					<?/*php bloginfo( 'name' ); */?>
				</a>
			</div>
		</div>
		<!-- navaigation -->
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="row page-logo-wrapper">
				<div class="top-bar-left">
					<a id="page-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img id="page-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/LogoKVinfo.png" alt="More KV">
						<?/*php bloginfo( 'name' );*/?>
					</a>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</nav>
	</header>

	<!-- <div data-sticky-container>
		<div data-sticky data-margin-top="0" style="width:100%">
			
		
		</div>
	</div> -->
	
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
