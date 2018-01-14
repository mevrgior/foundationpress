<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="top-slider">
	<div id="video-wrap">	
		<?php do_action( 'foundationpress_before_slider' ); ?>
		<?php dynamic_sidebar( 'slider-widgets' ); ?>
		<?php do_action( 'foundationpress_after_slider' ); ?>
	</div>
</div>

<div class="sec-1 bg-blue">
	<div class="sep-top-down"></div>
	<div class="glob-container">
		<div id="widget-1-wrap">	
			<?php do_action( 'foundationpress_before_slider' ); ?>
			<?php dynamic_sidebar( 'widget1-home' ); ?>
			<?php do_action( 'foundationpress_after_slider' ); ?>
		</div>
	</div>
</div>

<div class="bg-white">
	<div class="sep-up"></div>
	<div class="glob-container">
		<div id="widget-2-wrap">	
			<?php do_action( 'foundationpress_before_slider' ); ?>
			<?php dynamic_sidebar( 'widget2-home' ); ?>
			<?php do_action( 'foundationpress_after_slider' ); ?>
		</div>
	</div>
	<!-- <div class="sep-down"></div> -->
</div>

<div class="sec-1 bg-blue">
	<div class="sep-top-down"></div>
	<div class="glob-container">
		<div id="widget-3-wrap">	
			<?php do_action( 'foundationpress_before_slider' ); ?>
			<?php dynamic_sidebar( 'widget3-home' ); ?>
			<?php do_action( 'foundationpress_after_slider' ); ?>
		</div>
	</div>
</div>

<div class="bg-white">
	<div class="sep-up"></div>
	<div class="glob-container">
		<div id="widget-4-wrap">	
			<?php do_action( 'foundationpress_before_slider' ); ?>
			<?php dynamic_sidebar( 'widget4-home' ); ?>
			<?php do_action( 'foundationpress_after_slider' ); ?>
		</div>
	</div>
	<!-- <div class="sep-down"></div> -->
</div>

<!-- change css of sec-img section to make widget visible -->
<!-- <div class="sec-img"> -->
	<?php /* do_action( 'foundationpress_before_slider' ); */ ?>
	<?php /* dynamic_sidebar( 'bottom-home' ); */ ?>
	<?php /* do_action( 'foundationpress_after_slider' ); */ ?>
<!-- </div> -->

<?php get_footer();
