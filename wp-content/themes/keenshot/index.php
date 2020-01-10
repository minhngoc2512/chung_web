<?php
/**
 * The blog template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

get_header(); ?>
  <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
<?php 
   /**
    * Keenshot Before Posts hook
    */
 
    do_action('keenshot_before_posts_content');

    if(have_posts()): 
        while (have_posts()): the_post(); 
            get_template_part( 'template-parts/content/content' );    
        endwhile; 
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif; 

    /**
     * Keenshot Afer Posts hook
     */
    
    do_action('keenshot_after_posts_content');           
  
get_footer();