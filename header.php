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
						<li class="home"><a id="page-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-KVinfo.svg" alt="More KV"><?/*php bloginfo( 'name' );*/?></a></li>
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
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
