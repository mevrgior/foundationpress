<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<div class="sep-up"></div>
			<footer id="footer">
				<div class="medium-6 columns">
					<h5>Kontakt</h5>
				</div>
				<div class="medium-3 columns">
					<h5>Footer</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

				</div>
				<div class="medium-3 columns">
					<h5>Projekt</h5>
					<img class="project-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/BSMBV.png">					
					<img class="project-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_MORE_KV.png">
					<img class="project-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/SGKV_Logo_2014_highres.png">
				</div>
				
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
