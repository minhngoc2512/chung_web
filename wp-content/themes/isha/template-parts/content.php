<?php
/**
 * Template part for displaying posts in double column half image
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

?>
<div class="col-xl-6 col-lg-12 col-md-12 col-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single News -->
		
		<div class="single-news">
			<div class="news-head news-meta double-column-half-image">
			<?php 
			if(has_post_thumbnail()):?>
				<?php the_post_thumbnail('isha-blog-thumb');?>
			<?php else: ?>
					<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/395_263.png " >
			<?php endif; ?>
		
				<ul class="pro-meta meta">
					<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Author','isha'),'1') == 1 ) : ?>
						<li class="author-in-blog" >
							<?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
						</li>
						<li class="border-0 post-by">
							<?php isha_posted_by(); ?> 
						</li>
					<?php endif ; ?>
					<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Reading time','isha'),'1') == 1 ) : ?>
						<li class="reading-time" ><i class="fa fa fa-book"></i><?php isha_count_content_words( get_the_ID() ); ?></li>
					<?php endif ; ?>
				</ul>
			</div>
			<div class="news-bottom">
				<div class="content">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="news-meta double-column-half-image ">
						<ul class="list">
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Published date','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-calendar"></i><?php isha_posted_on();?></li>
							<?php endif; ?>
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Comment no.','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-comment-o"></i><?php isha_post_comment() ;?></li>
							<?php endif; ?>
		
						</ul>
                    </div>
					<ul class="list">
						<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Category','isha'),'1') == 1 ) : ?>
							<li><span class ="cat"> <?php the_category( ' / ' ); ?> </span></li>
						<?php endif; ?>
					</ul>
				
					<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Excerpt','isha'),'1') == 1 ) : ?>	
						<div class="pt-2 pb-2">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					
					<ul class="list">
						<?php if (get_theme_mod('isha_blog_post_post_taxonomy_tag','2') == 1 ) : ?>	
							<li> <span class="tag"> <?php isha_post_tag(); ?> </span></li>
						<?php endif; ?>
					</ul>
						<div class="pb-4">
						<?php isha_modal() ?>
						</div>
				</div>
			</div>
		</div>
		<!-- End Single News -->
	</article>
</div>

