<?php
/**
 * The template for displaying page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage keenshot
 * @since 1.0.0
 */

get_header();

	if ( is_front_page() ): get_header( 'front-page' );
    else: get_template_part( 'template-parts/content/content', 'page' ); endif;
     
get_footer(); 
 
