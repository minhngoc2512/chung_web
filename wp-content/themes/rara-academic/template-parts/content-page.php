<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rara_Academic
 */

$sidebar_layout = rara_academic_sidebar_layout();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    
    <?php if( has_post_thumbnail() ){ ?>
		    <div class="post-thumbnail">
		        <?php ( is_active_sidebar( 'right-sidebar' ) && ( $sidebar_layout == 'right-sidebar' ) ) ? the_post_thumbnail( 'rara-academic-with-sidebar' ) : the_post_thumbnail( 'rara-academic-without-sidebar' ) ; ?>
		    </div>
		<?php }?>

	<div class="entry-content" itemprop="text">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rara-academic' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php rara_academic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
