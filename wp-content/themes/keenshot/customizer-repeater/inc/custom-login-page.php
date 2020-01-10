<?php
/**
 * Keenshot Customizer Functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 */

if( ! function_exists( 'keenshot_custom_login_page_panel' ) ) :
 /**
  * Keenshot Footer Section
  */

 function keenshot_custom_login_page_panel($wp_customize ){
   
 $wp_customize->add_panel( 'wp_login_page_panel',
   array(
      'title' => __( 'Manage Login Page Banner','keenshot'),
      'description' => __( 'Adjust your login page.','keenshot' ),
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'active_callback' => '',
   )
 );

 $wp_customize->add_section( 'keenshot_custom_login_page_section',
   array(
      'title' => __( 'Manage Login Page Banner','keenshot' ),
      'description' => __( 'Manage Login Page Banner','keenshot' ),
      'panel' => 'wp_login_page_panel', 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => false, 
   )
 );

 $wp_customize->add_setting( 'keenshot_custom_login_page_settings',
   array(
      'default' => __('Manage Login Page Banner','keenshot'),
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_wp_media_upload_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'keenshot_custom_login_page_control',
   array(
      'label' => __( 'Manage Login Page Banner','keenshot' ),
      'section' => 'keenshot_custom_login_page_section',
      'settings' => 'keenshot_custom_login_page_settings',
      'mime_type' => 'image', 
      'capability' => 'edit_theme_options'
   )
 ));

 $wp_customize->add_setting( 'keenshot_custom_login_page_logo_settings',
   array(
      'default' => __('Manage Login Page Logo','keenshot'),
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_wp_media_upload_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'keenshot_custom_login_page_logo_control',
   array(
      'label' => __( 'Manage Login Page Logo','keenshot' ),
      'section' => 'keenshot_custom_login_page_section',
      'settings' => 'keenshot_custom_login_page_logo_settings',
      'mime_type' => 'image', 
      'capability' => 'edit_theme_options'
   )
 ));

 }
endif;

add_action('customize_register','keenshot_custom_login_page_panel');

function keenshot_wp_login_page_banner_upload(){
   $image_id = wp_get_attachment_url(get_theme_mod( 'keenshot_custom_login_page_settings'));
    return $image_id;
}

add_action( 'wp_head', 'keenshot_wp_login_page_banner_upload');

function keenshot_wp_login_page_logo_upload(){
    $image_id = wp_get_attachment_url(get_theme_mod( 'keenshot_custom_login_page_logo_settings'));
    return $image_id;
}

add_action( 'wp_head', 'keenshot_wp_login_page_logo_upload');

function keenshot_wp_media_upload_sanitize($input){

	if(!empty($input)) {
		return $input;
	}
	return $input;
}