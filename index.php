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

<div class="sec-1 bg-blue">
	<div class="sep-top-down"></div>
	<div class="glob-container">
		<div > <!-- class="text-container" -->
			<h2>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_title );
				?>
			</h2>
			<p>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_content );
				?>
			</p>
		</div>
	</div>
	
</div>
<div class="sec-2 bg-white">
	<div class="sep-up"></div>
	<div class="glob-container">
		<div > <!-- class="text-container" -->
			<h2>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_title );
				?>
			</h2>
			<p>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_content );
				?>
			</p>
		</div>
	</div>
	<div class="sep-down"></div>
</div>
<div class="sec-img">
	
</div>
<div id="page-full-width" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	<?php /* get_sidebar();*/ ?>

</div>
<!-- <div class="bg-clear">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 36"><style type="text/css"> .st0{fill:#004151;} </style><polygon class="st0" points="0 36.5 1000 36.5 500 0 "/></svg>
</div> -->
<?php get_footer();
