<?php 
 /**
     * Doctype Hook
     * 
     * @see rara_academic_doctype_cb
    */
add_action( 'rara_academic_doctype', 'rara_academic_doctype_cb');

 /**
     * Before wp_head
     * 
     * @see rara_academic_head
    */

add_action( 'rara_academic_before_wp_head', 'rara_academic_head');

 /**
     * Page Start
     * 
     * @see rara_academic_page_start
    */

add_action( 'rara_academic_before_page_start','rara_academic_page_start');

 /**
     * Rara Academic Header
     * 
     * @see rara_academic_header_start - 10
     * @see rara_academic_header_top - 20
     * @see rara_academic_header_bottom - 30
     * @see rara_academic_header_end - 40
     *
    */
add_action( 'rara_academic_header', 'rara_academic_header_start', 10 );
add_action( 'rara_academic_header', 'rara_academic_header_top', 20 );
add_action( 'rara_academic_header', 'rara_academic_header_bottom', 30 );
add_action( 'rara_academic_header', 'rara_academic_header_end', 40 );

 /**
     * Page Header
     * 
     * @see rara_academic_header - 10
    */

add_action( 'rara_academic_page_header', 'rara_academic_main_header', 10 );

 /**
     * Breadcrumbs
     * 
     * @see rara_academic_breadcrumbs_cb 
    */

add_action( 'rara_academic_breadcrumbs', 'rara_academic_breadcrumbs_cb' );

/**
 * After post content
 * 
 * @see rara_academic_post_author - 20
*/
add_action( 'rara_academic_after_post_content', 'rara_academic_post_author', 20 );

 /**
     * Content End
     * 
     * @see rara_academic_content_end -20
    */
add_action( 'rara_academic_after_content', 'rara_academic_content_end', 20 );

 /**
     * Rara Academic Footer
     * 
     * @see rara_academic_footer_start - 10
     * @see rara_academic_footer_top - 20
     * @see rara_academic_footer_bottom - 30
     * @see rara_academic_footer_end - 40
    */

add_action( 'rara_academic_footer', 'rara_academic_footer_start', 10 );
add_action( 'rara_academic_footer', 'rara_academic_footer_top', 20 );
add_action( 'rara_academic_footer', 'rara_academic_footer_bottom', 30 );
add_action( 'rara_academic_footer', 'rara_academic_footer_end', 40 );

 /**
     * Page End
     * 
     * @see rara_academic_page_end - 20
    */

add_action( 'rara_academic_after_footer', 'rara_academic_page_end', 20 );