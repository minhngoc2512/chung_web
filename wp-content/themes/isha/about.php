<?php
/**
 * Template Name: aboutPage
 *
 * This is page is used as about page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Isha
 */
 get_header();

if ( is_active_sidebar( 'about-template' ) ) {
	dynamic_sidebar( 'about-template' );
}

the_content();

get_footer(); 