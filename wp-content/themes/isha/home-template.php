<?php
/**
 * Template Name: Frontpage
 *
 * This is page is used as front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Isha
 */
 get_header();

get_template_part( 'sections/isha', 'slider' ); 

if ( is_active_sidebar( 'frontpage-isha-layout' ) ) {
	dynamic_sidebar( 'frontpage-isha-layout' );
}

the_content();

get_footer(); 