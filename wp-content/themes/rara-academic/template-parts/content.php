<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rara_Academic
 */
$ed_full_content = get_theme_mod( 'rara_academic_ed_full_content' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php rara_academic_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

    <?php 
        if(has_post_thumbnail()){
            echo ( !is_single() ) ? '<a href="' . esc_url( get_the_permalink() ) . '" class="post-thumbnail">' : '<div class="post-thumbnail">';
            is_active_sidebar( 'right-sidebar' ) ? the_post_thumbnail( 'rara-academic-with-sidebar' ) : the_post_thumbnail( 'rara-academic-without-sidebar' );
            echo ( !is_single() ) ? '</a>' : '</div>'; 
        }
    ?>

	<div class="entry-content" itemprop="text">
		<?php
			if(is_single()){
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rara-academic' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		}else{
			if( false === get_post_format() && !$ed_full_content ){
                   the_excerpt();
                }else{
                    the_content( sprintf(
        				/* translators: %s: Name of current post. */
        				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rara-academic' ), array( 'span' => array( 'class' => array() ) ) ),
        				the_title( '<span class="screen-reader-text">"', '"</span>', false )
        			) );
		        }
		    }
		?>
	</div><!-- .entry-content -->
    
	<footer class="entry-footer">
		<?php 
		if( !is_single() && !$ed_full_content){ ?>
		    <a href="<?php the_permalink(); ?>" class="read-more"><?php  esc_html_e( 'Read More', 'rara-academic' ); ?>
		    </a>
		<?php 
		} 
		rara_academic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->