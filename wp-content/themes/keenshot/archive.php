<?php
/**
 * The archive template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

 get_header(); 

    /**
     * @hooked Keenshot Before Archive
     */

    do_action('keenshot_before_archive_content');
   
        if(have_posts()):
          while ( have_posts()): the_post(); 
              get_template_part( 'template-parts/content/content' );   
          endwhile; 
        endif; 

    /**
     * @hooked Keenshot After Archive
     */
       
    do_action('keenshot_after_posts_content');   

get_footer();