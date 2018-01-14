<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
// mevrgior
	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'slider-widgets',
	  'name' => __( 'Slider widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this slider container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	register_sidebar(array(
	  'id' => 'widget1-home',
	  'name' => __( 'widget1-home widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this widget1-home container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	register_sidebar(array(
	  'id' => 'widget2-home',
	  'name' => __( 'widget2-home widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this widget2-home container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	register_sidebar(array(
	  'id' => 'widget3-home',
	  'name' => __( 'widget3-home widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this widget3-home container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	register_sidebar(array(
	  'id' => 'widget4-home',
	  'name' => __( 'widget4-home widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this widget4-home container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	register_sidebar(array(
	  'id' => 'bottom-home',
	  'name' => __( 'bottom-home widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this bottom-home container', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="%2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
