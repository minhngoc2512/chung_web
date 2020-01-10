<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rara_Academic
 */

get_header(); ?>

			<section class="not-found">
				<div class="error-404">
					<span><?php echo esc_html__( '404', 'rara-academic' ); ?></span>
					
						<h1><?php esc_html_e( 'Oops! the page you requested was not found!', 'rara-academic' ); ?></h1>
					
					<div class="page-content">
						<p><?php esc_html_e( 'It seems we can not find what you are looking for. Perhaps searching will help.', 'rara-academic' ); ?></p>

						<?php get_search_form();?>

						<a href="<?php echo esc_url(home_url('/')); ?>" class="home"><?php echo esc_html__('Back to Home','rara-academic'); ?></a>
					</div><!-- .page-content -->
				
				</div>
			</section>

<?php
get_footer(); ?>
