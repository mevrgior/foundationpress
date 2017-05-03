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
					$first_post_home = get_post(1); 
					echo apply_filters( 'the_content', $first_post_home->post_title );
				?>
			</h1>
			<p>
				<?php 
					$first_post_home = get_post(1); 
					echo apply_filters( 'the_content', $first_post_home->post_content );
				?>
			</p>
		</div>
	</div>
	<div class="sep-down"></div>
</div>
<div class="sec-img">
	
</div>

<?php get_footer();
