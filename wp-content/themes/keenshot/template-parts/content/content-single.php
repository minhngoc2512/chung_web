<?php
 /**
  *
  * Description: keenshot theme single page 
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package WordPress
  * @subpackage keenshot
  * @since 1.0.0
  */
  $keenshot_left_sidebar = esc_attr(get_theme_mod('keenshot_sidebar_settings'));
?>

	<div class="col-md-8 col-sm-12 col-xs-12 blog-space <?php echo isset($keenshot_left_sidebar) && $keenshot_left_sidebar == 'right' ? 'col-md-push-4' : ''; ?>">

		<div class="blog-content">
		<h2><?php the_title(); ?></h2>	
		<?php the_post_thumbnail( 'large'); ?>
			<div class="post-info">
				<div class="post-meta"> 
					<p><?php echo get_the_date(); ?></p>
					<a class="like whishlist fa fa-heart" rel="<?php echo esc_attr($post->ID,'keenshot'); ?>"><?php echo esc_attr(keenshot_like_count($post->ID),'keenshot'); ?></a>   
					<p>
					<?php
					 if(has_category()){
					   esc_html_e("Category:",'keenshot');the_category(',');
					 }
					  if(has_tag()){
						the_tags( 'Tags: ', ', ', '<br />' );
					  }
					?>
					</p>
				</div>
			</div>
			
		</div> <!-- Blog content -->
		<div class="default-editor">
				<?php 
					the_content();
					if(shortcode_exists('ssba-buttons')){
						echo do_shortcode( '[ssba-buttons]' ).'<br><br>';
					}
					wp_link_pages();
				?>
				<div class="pull-right">
				  <?php esc_url(next_post_link(),'keenshot'); ?>
				</div>
				<div class="pull-left">
				 <?php esc_url(previous_post_link(),'keenshot'); ?>
				</div>	
		</div>
	   	<div class="post_edit_btn">
	   		<?php 
		     	edit_post_link(); 
		   	?>
	   	</div>
		<div class="default-editor">
		  <?php echo esc_html(keenshot_related_posts_list('related'),'keenshot'); ?>
		</div>

	<div class="comments">
		<?php 
			if ( comments_open() ): comments_template(); endif;
		?>
	</div>
</div>

<div class="col-md-4 col-xs-12 <?php echo isset($keenshot_left_sidebar) && $keenshot_left_sidebar == 'right' ? 'col-md-pull-8' : ''; ?>">
	<?php 
		get_sidebar();
	?>
</div>
