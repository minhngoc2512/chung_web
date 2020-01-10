<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isha
 */
?>
</div><!-- #content -->
<!-- Footer -->
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<?php 
					if ( is_active_sidebar( 'footer-area' ) ) {
						dynamic_sidebar( 'footer-area' );
					}
				?>
			</div>
		</div>
	</div>
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-12">
						<div class="copyright-content text-center">
							<p><i class="fa fa-copyright"></i>
								<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'isha' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'isha' ), 'WordPress' );
								?>
								</a>
								<span class="sep "> | </span>
									<?php
									/* translators: 1: Theme name, 2: Theme author. */
									printf( esc_html__( 'Theme: %2$s by  %1$s', 'isha' ), '<a href="https://www.postmagthemes.com" target="_blank" >Postmagthemes</a>' , '<a href="https://www.postmagthemes.com/downloads/isha-portfolio-free-wordpress-theme/" target="_blank">Isha Portfolio WordPress Theme</a>' );?>
								</div>
							<p>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copyright -->
</footer>
<!--/ End footer -->

<?php wp_footer(); ?>
</body>
</html>
