<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rara_Academic
 */

 /**
     * After Content
     * 
     * @hooked rara_academic_content_end - 20
    */
    do_action( 'rara_academic_after_content' );
    
    /**
     * rara_academic Footer
     * 
     * @hooked rara_academic_footer_start  - 10
     * @hooked rara_academic_footer_top    - 20
     * @hooked rara_academic_footer_bottom - 30
     * @hooked rara_academic_footer_end    - 40
    */
    do_action( 'rara_academic_footer' );
    
    /**
     * After Footer
     * 
     * @hooked rara_academic_page_end - 20
    */
    do_action( 'rara_academic_after_footer' );
   
    wp_footer(); ?>

</body>
</html>