<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

?>
<div class="single-news">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news-head">
		<?php if( ! is_home() && (!is_front_page())):?>
		<div class="news-meta">
			<ul class="list  mb-3">
				<li><i class="fa fa-user"></i><?php isha_posted_by();?></li>
				<li><i class="fa fa-calendar"></i><?php isha_posted_on();?></li>
				<li><i class="fa fa-comment-o"></i><?php echo esc_html(get_comments_number());?></li>
			</ul>
		</div>
		<?php endif ?>
			<?php the_post_thumbnail();?>
	</div>
	<div class="content">
		<?php the_content();
		wp_link_pages( array(
				'before'            => '<div class="text-center">'.__( 'Pages :', 'isha' ),
				'after'             => '</div>',
				'link_before'       => '',
				'link_after'        => ''
		) ); ?>
	</div>
	<?php if( ! is_home() && (!is_front_page())):
		if (get_theme_mod('isha_blog_single_post_author_enable','1') == 1 ) : 
			get_template_part( 'inc/author-section' ); 
		endif; 
	endif; ?>
	</article>
</div>