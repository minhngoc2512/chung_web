<?php
/**
 * The template for displaying content none pages (not found)
 *
 * @package keenshot
 */
get_header(); ?>
	<div class="error-holder text-center">
        <h2 class="sub-title"><?php esc_html_e( 'Uh-Oh...', 'keenshot' ); ?></h2>
		<div class="error-content">
			<p><?php esc_html_e( 'The page you are looking for may have been removed, deleted, or possibly never existed.', 'keenshot' ); ?></p>					
		</div><!-- .error-content -->
		<h1 class="title"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords', 'keenshot' ); ?></h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary error-page"><?php esc_html_e( 'Take me to the home page', 'keenshot' ); ?></a>

	</div><!-- .error-holder --> 
    <?php
get_footer();
