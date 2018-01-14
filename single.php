<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="bg-white">
		<!-- <div class="sep-up"></div> -->
		<div class="glob-container">
			
			<!-- <div class="header-block_post">
				<div class="header-bg_post">
					<h2> header text </h2>
				</div>
				<div class="sep-down"></div>
			</div> -->

			<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
		</div>
		<!-- <div class="sep-down"></div> -->
	</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
