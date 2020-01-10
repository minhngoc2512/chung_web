<?php
/**
 * Keenshot footer section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

   
    /**
     * Footer
     * 
     * @hooked keenshot_footer    
     */

   do_action( 'keenshot_footer' );
    
    /**
     * Footer
     * 
     * @hooked keenshot_footer_script    
     */

   do_action('keenshot_enqueue_script');
