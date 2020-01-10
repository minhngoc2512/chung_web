<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

get_header();
if ( is_front_page() ): 
get_template_part( 'sections/isha', 'slider' );
endif; ?>
<!-- News Area -->
    <section class="newsblog archive single section pt-5">
        <div class="container">
			<?php if ( is_front_page() ): ?>
				<div class="row <?php if( get_theme_mod('isha_blog_archive_layout_settings') == 'left' ):  echo esc_attr__( 'flex-row-reverse', 'isha' );  endif; ?>">
					
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
						<div class="<?php if(get_theme_mod('isha_blog_archive_layout_settings') == 'none'):echo  esc_attr__( 'col-lg-12 none', 'isha' ); else: echo esc_attr__( 'col-lg-9', 'isha' ); endif;?> col-12">
							<!-- Single News -->
							<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', 'page' ); ?>
									<div class="row">			
										<div class="col-12">			
											<?php		
											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;
								endwhile; // End of the loop.
										?>
									</div>
								</div>
							<!-- End Single News -->
							
						</div>
						<?php if(get_theme_mod('isha_blog_single_layout_settings') != 'none'):?>
							<div class="col-lg-3 col-12 ">
							
								<div class="sidebar-main">
									<aside id="Primary-sidebar" class="widget-area">
										<?php dynamic_sidebar( 'sidebar-2' ); ?>
									</aside><!-- #secondary -->
								</div>
							
							</div>
						<?php endif;
					}
					if ( !is_active_sidebar( 'sidebar-2' ) ) { ?>
						<div class="col-lg-12 col-12 none">
							<!-- Single News -->
							<?php
								while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'page' );
								?>
								<div class="row">			
									<div class="col-12">			
										<?php		
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

										endwhile; // End of the loop.
										?>
									</div>
								</div>
							<!-- End Single News -->
						</div>
					<?php } ?>
				</div> 
			<?php elseif ( ! is_front_page() ): ?>
				<div class="row <?php if( get_theme_mod('isha_blog_single_layout_settings') == 'left' ):  echo esc_attr__( 'flex-row-reverse', 'isha' );  endif; ?>">
						
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
						<div class="<?php if(get_theme_mod('isha_blog_single_layout_settings') == 'none'):echo  esc_attr__( 'col-lg-12 none', 'isha' ); else: echo esc_attr__( 'col-lg-9', 'isha' ); endif;?> col-12">
							<!-- Single News -->
							<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', 'page' ); ?>
									<div class="row">			
										<div class="col-12">			
											<?php		
											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;
								endwhile; // End of the loop.
										?>
									</div>
								</div>
							<!-- End Single News -->
							
						</div>
						<?php if(get_theme_mod('isha_blog_single_layout_settings') != 'none'):?>
							<div class="col-lg-3 col-12 ">
							
								<div class="sidebar-main">
									<aside id="Primary-sidebar" class="widget-area">
										<?php dynamic_sidebar( 'sidebar-1' ); ?>
									</aside><!-- #secondary -->
								</div>
							
							</div>
						<?php endif;
					}
					if ( !is_active_sidebar( 'sidebar-1' ) ) { ?>
						<div class="col-lg-12 col-12 none">
							<!-- Single News -->
							<?php
								while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'page' );
								?>
								<div class="row">			
									<div class="col-12">			
										<?php		
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

										endwhile; // End of the loop.
										?>
									</div>
								</div>
							<!-- End Single News -->
						</div>
					<?php } ?>
				</div> 
			<?php endif; ?>
        </div>
    </section>
    <!--/ End News Area -->

<?php
get_footer();
