<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rara_Academic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php rara_academic_posted_on(); ?>
				</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    
    <?php if(has_post_thumbnail()){
	 ( is_active_sidebar( 'right-sidebar' ) ) ? the_post_thumbnail( 'rara-academic-with-sidebar' ) : the_post_thumbnail( 'rara-academic-without-sidebar' ) ;
	 }?>
    

	<div class="entry-summary">
		<?php if( false === get_post_format() ){
                   the_excerpt();
                }else{
                    the_content( sprintf(
        				/* translators: %s: Name of current post. */
        				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rara-academic' ), array( 'span' => array( 'class' => array() ) ) ),
        				the_title( '<span class="screen-reader-text">"', '"</span>', false )
        			) );
		        }?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<a href="<?php the_permalink(); ?>" class="read-more"><?php  esc_html_e('Read More','rara-academic');?></a>
        <?php rara_academic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
