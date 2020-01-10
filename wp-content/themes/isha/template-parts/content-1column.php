<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

?>
<div class="col-lg-12 col-md-12 col-12 mb-5">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
		<div class="thumb">
            <?php if(has_post_thumbnail()):?>
            <div class="news-head">
                <?php the_post_thumbnail('isha-blog-1column');?>
            </div>
			<?php else: ?>
			<div class="news-head  ">
					<img class="mx-auto " src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/1200_600.png " >
			</div>
			<?php endif;?>
 			

			<div class="thumb-body p-3">
				<div class="content text-center">
	
					<div class="news-meta pt-3 pb-3">
						<ul class="pro-meta">
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Author','isha'),'1') == 1 ) : ?>
								<li class="author-in-blog" >
									<?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
								</li>
								<li>
									<?php isha_posted_by(); ?> 
								</li>
							<?php endif ; ?>
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Reading time','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa fa-book"></i><?php isha_count_content_words( get_the_ID() ); ?></li>
							<?php endif ; ?>
							
						</ul>
						<ul class="list">
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Published date','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-calendar"></i><?php isha_posted_on();?></li>
							<?php endif; ?>
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Comment no.','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-comment-o"></i><?php isha_post_comment() ;?></li>
							<?php endif; ?>
		
						</ul>
                    </div>
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<ul class="list">
						<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Category','isha'),'1') == 1 ) : ?>
							<li><span class ="cat"> <?php the_category( ' / ' ); ?> </span></li>
						<?php endif; ?>
					</ul>
					<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Excerpt','isha'),'1') == 1 ) : ?>	
						<div class="pt-5 pb-4 pl-5 pr-5">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					<ul class="list">
						<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Tag','isha'),'1') == 1 ) : ?>	
							<li> <span class="tag"> <?php isha_post_tag(); ?> </span></li>
						<?php endif; ?>
					</ul>
						<div class="pb-4 button">
							<?php isha_modal() ?>
						</div>

                </div>
            </div>
			<?php if (get_theme_mod('isha_blog_realted_post_enable','1') == 1 ) : 
            	get_template_part( 'inc/related-post' );
			endif; ?>

		</div>
		<!-- End Single News -->
	</article>
</div>