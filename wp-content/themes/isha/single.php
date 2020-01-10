<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package isha
 */

get_header();
?>
<!-- News Area -->
    <section class="newsblog archive single section">
        <div class="container">
            <div class="row <?php if( get_theme_mod('isha_blog_single_layout_settings') == 'left' ):  echo esc_attr__( 'flex-row-reverse', 'isha' );  endif; ?>">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
					<div class="mt-5 <?php if(get_theme_mod('isha_blog_single_layout_settings') == 'none'):echo  esc_attr__( 'col-lg-12 none', 'isha' ); else: echo esc_attr__( 'col-lg-9', 'isha' ); endif;?> col-12">
						<!-- Single News -->
						<?php
							while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
							endwhile; // End of the loop. ?>
						<!-- End Single News -->
					</div>
					<?php if(get_theme_mod('isha_blog_single_layout_settings') != 'none'):?>
						<div class="col-lg-3 col-12">
							<!-- Blog Sidebar -->
							<div class="sidebar-main">
								<?php get_sidebar();?>
							</div>
							<!--/ End Blog Sidebar -->
						</div>
					<?php endif;
				}
				if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
					<div class="mt-5 col-lg-12 col-12 none">
						<!-- Single News -->
						<?php
							while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'single' ); 	
							endwhile; // End of the loop. ?>
						<!-- End Single News -->	
					</div>
				<?php } ?>
				</div>
        </div>
    </section>
    <!--/ End News Area -->
<?php
get_footer();