<?php
/**
 * The template for displaying single page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */
get_header(); 

   /**
    * Keenshot Before single content hook
    */
    
    do_action('keenshot_before_single_posts_content');

    while ( have_posts() ): the_post();
        get_template_part( 'template-parts/content/content', 'single' );
    endwhile; 
    
  /**
    * Keenshot after single content hook
    */

    do_action('keenshot_after_single_posts_content');
          
get_footer();   