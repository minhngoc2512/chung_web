<?php
/**
 * The template for displaying error page
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
					<header class="page-header">
					<h1 class="page-title pt-3 pb-3"><?php esc_html_e( 'Oops! That page can&rsquo;t be found. Error 404', 'isha' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'isha' ); ?></p>
					</div><!-- .page-content -->
				</div>
					
				</div>
				<?php if( get_theme_mod('isha_blog_archive_layout_settings') !== 'none'):?>
					<div class="col-lg-3 col-md-12 col-12">
					<!-- Blog Sidebar -->
					<div class="sidebar-main">
						<?php get_sidebar();?>
					</div>
					<!--/ End Blog Sidebar -->
				</div>
				<?php endif;
			} ?>
			<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class=" col-lg-12 col-12 none">
				<div class="row">
					<header class="page-header">
					<h1 class="page-title pt-3 pb-3"><?php esc_html_e( 'Oops! That page can&rsquo;t be found. Error 404', 'isha' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'isha' ); ?></p>
					</div><!-- .page-content -->
				</div>
					
				</div>
			<?php } ?>
        </div>
    </div>
</section>
<!--/ End News Area -->

<?php
get_footer();
