<?php
/**
 * The template for displaying keenshot blog or cpt comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

if( post_password_required()) : return; endif; ?>

<div id="comments" class="comments-area">
	<?php if( have_comments() ): ?>

		<h2 class="comment-title">
			<?php	
				printf(
					esc_html('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'keenshot' ),
					esc_attr(number_format_i18n( get_comments_number() ),'keenshot'),
					'<span>' . esc_html(get_the_title(),'keenshot') . '</span>'
				);		
			?>
		</h2>
		
		<?php keenshot_get_post_navigation(); ?>
		<ol class="comment-list">
			<?php 
				$args = array(
					'walker'			=> null,
					'max_depth' 		=> '',
					'style'				=> 'ol',
					'callback'			=> null,
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 64,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> false,
					'echo'				=> true
				);
				wp_list_comments( $args );
			?>
		</ol>
	<?php 
		 keenshot_get_post_navigation(); 
		  if( !comments_open() && get_comments_number() ): 
		?>	 
	 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'keenshot' ); ?></p>
			 
    <?php endif; endif; ?>
	
	<?php 
		
		$fields = array(
			'author' =>
				'<div class="form-group"><label for="author">' . __( 'Name', 'keenshot' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
			'email' =>
				'<div class="form-group"><label for="email">' . __( 'Email', 'keenshot' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',
			'url' =>
				'<div class="form-group last-field"><label for="url">' . __( 'Website', 'keenshot' ) . '</label><input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'	
		);	
		$args = array(	
			'class_submit' => 'btn btn-block btn-lg btn-warning',
			'label_submit' => __( 'Submit Comment','keenshot' ),
			'comment_field' =>
				'<div class="form-group"><label for="comment">' . esc_attr( 'Comment', 'keenshot' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control" name="comment" rows="4" required="required"></textarea></p></div>',
			'fields' => apply_filters( 'keenshot_comment_form_default_fields', $fields )
			
		);
		comment_form( $args ); 
	?>
	
</div><!-- .comments-area -->






















