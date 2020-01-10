<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isha
 */

?>
<div class="col-lg-6 col-md-6 col-12 mb-5">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
		<div class="card">
            <?php if(has_post_thumbnail()):?>
            <div class="news-head">
                <?php the_post_thumbnail('isha-what-we-do-thumb');?>
            </div>
			<?php else: ?>
			<div class="news-head">
					<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/477_318.png " >
			</div>
			<?php endif;?>

			<div class="card-body">
				<div class="content">
					
					<h2 class="pb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="news-meta ">
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
						<ul class="list pt-2 pl-2">
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Published date','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-calendar"></i><?php isha_posted_on();?></li>
							<?php endif; ?>
							<?php if (get_theme_mod('isha_blog_post_post_taxonomy_'.__('Comment no.','isha'),'1') == 1 ) : ?>
								<li><i class="fa fa-comment-o"></i><?php isha_post_comment() ;?></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single News -->
	</article>
</div>