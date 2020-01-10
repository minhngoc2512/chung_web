<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

?>
<div class="single-news">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="news-head text-justify">
			<div class="news-meta">
				<?php if( is_front_page() ):?>
					<h1 class ="text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				<?php endif; ?>	
				<ul class="list mb-3">
					<li><i class="fa fa-calendar"></i><?php isha_posted_on();?></li>
					<li><i class="fa fa-comment-o"></i><?php echo esc_html(get_comments_number());?></li>
				</ul>
			</div>
				<?php 
				if(has_post_thumbnail()):?>
					<?php the_post_thumbnail();?>
				<?php endif;
				?>
		</div>
		<div class="content text-justify">
			<?php the_content();
			wp_link_pages( array(
					'before'            => '<div class="text-center">'.__( 'Pages :', 'isha' ),
					'after'             => '</div>',
					'link_before'       => '',
					'link_after'        => ''
			) ); ?>

		</div>
		<div class ="clearfix"> </div>
		<?php if (get_theme_mod('isha_blog_single_post_realted_post_enable','1') == 1 ) :
		get_template_part( 'inc/related-post' );
		endif; 
		if (get_theme_mod('isha_blog_single_post_author_enable','1') == 1 ) : 
			get_template_part( 'inc/author-section' ); 
		endif; ?>
		<div class =" mt-5 mb-5">
			<?php
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' =>  __( 'Next post', 'isha' ),
				'prev_text' =>  __( 'Previous post', 'isha' )
			) );
			?>
		</div>
		<div class ="clearfix"> </div>
		<div class="row">			
			<div class="col-12">			
				<?php		
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
		</div>
	</article>
</div>