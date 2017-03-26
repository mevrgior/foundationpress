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
			<div class="small-8 columns top-header-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'top-header-menu' ) ); ?>
			</div>
			<div class="small-4 columns">
				<?php get_search_form(); ?>
			</div>
		</div>
		<!-- mobile navigation -->
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Logo hier<?php bloginfo( 'name' ); ?></a>
			</div>
		</div>
		<!-- navaigation -->
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="row">
				<div class="top-bar-left">
					<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Logo hier<?php bloginfo( 'name' ); ?></a></li>
					</ul>
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

	<div data-sticky-container>
	  <div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">
	    <div class="title-bar-left"><!-- Content --></div>
	    <div class="title-bar-right"><!-- Content --></div>
	  </div>
	</div>
	<div id="top-slider"></div>
	<div class="bg-clear">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 36.5"><style type="text/css"> .st6{display:inline;fill:rgb(0,65,81);} .st7{fill:rgb(0,65,81);} </style><polygon class="st6" points="0 36.5 500 36.5 0 0 "/><polygon class="st7" points="500 36.5 1000 36.5 1000 0 "/></svg>
	</div>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
