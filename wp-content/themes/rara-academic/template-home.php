<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rara Academic
 */

get_header();
    
    $rara_academic_page_sections = array( 'banner', 'courses', 'welcome', 'service', 'notice', 'blog', 'testimonial', 'cta' );
    
    foreach( $rara_academic_page_sections as $section ){ 
        if( get_theme_mod( 'rara_academic_ed_' . $section . '_section' ) == 1 ){
            get_template_part( 'sections/' . esc_attr( $section ) );
        } 
    }
    
get_footer();