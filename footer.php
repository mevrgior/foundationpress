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
					<!-- <h5>Impressum</h5>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
						sed diam nonumy eirmod tempor invidunt ut labore et dolore 
						magna aliquyam erat, sed diam voluptua. At vero eos et 
						accusam et justo duo dolores et ea rebum.
					</p> -->
					<p>
						<a class="menu-link" href="<?php echo esc_url( home_url( '/' ) ); ?>impressum " >
							<h5>Impressum</h5>
						</a>
					</p>
					<p>
						<a class="menu-link" href="<?php echo esc_url( home_url( '/' ) ); ?>datenschutz " >
							<h5>Datenschutz</h5>
						</a>
					</p>
					<?php
						if (has_nav_menu('footer-menu')) {
							wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
						}
					?>
				</div>
				<div class="medium-3 columns">
					<h5>Kontakt</h5>
					<p>SGKV - Studiengesellschaft für den Kombinierten Verkehr e.V.</p>
					</br> Westhafenstr. 1
					</br>13353 Berlin
					<p>Tel.: +49 (30) 206 13 76 0
					</br>Fax: +49 (30) 206 13 76 17
					</br>sgkv[at]sgkv.de</p>
				</div>
				<div class="medium-3 columns">
					<h5>Projekt</h5>
					<img class="project-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/BSMBV.png">					
					<img class="project-logos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_MORE_KV.png">
					<img class="project-logos-small" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/SGKV_Logo_2014_highres.png">
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
<!-- <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.3/mapbox.js'></script>
<script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v0.0.3/Leaflet.fullscreen.min.js'></script>
<script src="js/d3.v3.min.js"></script>
<script src="js/arc.js"></script>
<script src="js/typeahead.bundle.js"></script>
<script src="js/airportmap3.js"></script>
</body>
</html>
