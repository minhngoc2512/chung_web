<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

get_header();
?>

<!-- News Area -->
<section class="newsblog archive section pt-5">
    <div class="container">
		<div class="row <?php if( get_theme_mod('isha_blog_archive_layout_settings') == 'left' ):  echo esc_attr__( 'flex-row-reverse', 'isha' );  endif; ?>">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="<?php if(get_theme_mod('isha_blog_archive_layout_settings') == 'none'): echo  esc_attr__( 'col-lg-12 none', 'isha' ); elseif ( get_theme_mod('isha_blog_archive_layout_settings') !== 'none'): echo esc_attr__( 'col-lg-9', 'isha' ); endif;?> col-12">
					<div class="row">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content-archive-search');

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<ul class="pagination-nav list-inline">
								<?php isha_pagination();?>
							</ul>
							<!--/ End Pagination -->
						</div>
					</div>
				</div>
				<?php if( get_theme_mod('isha_blog_archive_layout_settings') !== 'none'):?>
				<div class="col-lg-3 col-md-12 col-12">
					<!-- frontpage  Sidebar -->
					<div class="sidebar-main">
						<aside id="Primary-sidebar" class="widget-area">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</aside><!-- #secondary -->
					</div>
					<!--/ End frontpage Sidebar -->
				</div>
				<?php endif;
			} ?>
			<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class=" col-lg-12 col-12 none">
					<div class="row">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content-archive-search');

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- Start Pagination -->
							<ul class="pagination-nav list-inline">
								<?php isha_pagination();?>
							</ul>
							<!--/ End Pagination -->
						</div>
					</div>
				</div>
			<?php } ?>
        </div>
    </div>
</section>
<!--/ End News Area -->

<?php
get_footer();
