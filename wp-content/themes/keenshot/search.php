<?php
/**
 * The search template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

get_header(); 
   
  /**
   * @Keenshot 404 Template 
   */

   if ( ! have_posts() ): 
      get_template_part('404');   
   else: 
 
  /**
   * @hooked Keenshot Before Search
   */

    do_action('keenshot_before_search_content');

        while ( have_posts()): the_post(); 
            get_template_part( 'template-parts/content/content' ); 
        endwhile; 

    /**
     * @hooked Keenshot After Search
     */
       
    do_action('keenshot_after_posts_content');   

  endif;
get_footer();