<?php
/**
 * Keenshot Customizer Functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 */
if( ! function_exists( 'keenshot_footer_section_customizer' ) ) :
 /**
 * Keenshot Footer Section
 */

 function keenshot_footer_section_customizer($wp_customize ){
   
 /**
 * Add our Footer Panel
 */
 $wp_customize->add_panel( 'footer_section_panel',
   array(
      'title' => __( 'Footer Settings','keenshot'),
      'description' => esc_html__( 'Adjust your footer section.','keenshot'),
      'priority' => '',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'active_callback' => '',
   )
 );
 /**
 * Add our Footer Copyright
 */
 $wp_customize->add_section( 'keenshot_footer_custom_controls_section',
   array(
      'title' => __( 'Footer Copyright','keenshot' ),
      'description' => esc_html__( 'These are an example of Customizer Custom Controls.','keenshot' ),
      'panel' => 'footer_section_panel', 
      'priority' => '', 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false', 
   )
 );
 
 //Copyright section
 $wp_customize->add_setting( 'sample_default_footer_text',
   array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( 'copyright_footer_text_control',
   array(
      'label' => __( 'Copyrigth Text' ,'keenshot'),
      'description' => esc_html__( 'Text controls Type can be either text, email, url, number, hidden, or date' ,'keenshot'),
      'section' => 'keenshot_footer_custom_controls_section',
      'settings' => 'sample_default_footer_text',
      'priority' => '',
      'type' => 'text', 
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter copy write text...','keenshot'),
      ),
   )
);
 
 //Copyright body
 $wp_customize->add_setting( 'sample_default_footer_text_body',
   array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_sanitize',  
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( 'copyright_footer_text_body_control',
   array(
      'label' => __( 'Copyright Body','keenshot' ),
      'description' => esc_html__( 'Text controls Type can be either text, email, url, number, hidden, or date','keenshot'),
      'section' => 'keenshot_footer_custom_controls_section',
      'settings' => 'sample_default_footer_text_body',
      'priority' => '',
      'type' => 'textarea', 
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter copyright body message...','keenshot' ),
      ),
   )
 );


 //Copyright image
  $wp_customize->add_setting( 'sample_default_footer_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'copyright_footer_image_control',
   array(
      'label' => __( 'Footer Image','keenshot' ),
      'description' => '',
      'section' => 'keenshot_footer_custom_controls_section',
      'settings' => 'sample_default_footer_image',
      'priority' => '',
      'mime_type' => 'image', 
      'capability' => 'edit_theme_options'
   )
 ));

 $wp_customize->selective_refresh->add_partial( 'sample_default_footer_text_body', array(
   'selector' => '#address',
  ));
 /**
 * Footer Address Info Section
 */
  
  $wp_customize->add_section('keenshot_footer_address',
      array(
      'title' => __( 'Footer Address' ,'keenshot'),
      'description' => esc_html__( 'Update your address','keenshot'),
      'panel' => 'footer_section_panel', 
      'priority' => '', 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_footer_phone_settings',
   array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( 'keenshot_footer_phone_control',
   array(
      'label' => __( 'Phone' ,'keenshot' ),
      'description' => esc_html__( 'Type Phone Number','keenshot'),
      'section' => 'keenshot_footer_address',
      'settings' => 'keenshot_footer_phone_settings',
      'priority' => '',
      'type' => 'text', 
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter phone number...' ,'keenshot' ),
      ),
    )
  );

    $wp_customize->add_setting( 'keenshot_footer_address_settings',
   array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'validate_callback' => '',
      'sanitize_callback' => 'keenshot_sanitize', 
      'dirty' => false, 
   )
 );

 $wp_customize->add_control( 'keenshot_footer_address_control',
   array(
      'label' => __( 'Your Address' ,'keenshot' ),
      'description' => esc_html__( 'Enter your address info','keenshot' ),
      'section' => 'keenshot_footer_address',
      'settings' => 'keenshot_footer_address_settings',
      'priority' => '',
      'type' => 'textarea', 
      'capability' => 'edit_theme_options',
      'input_attrs' => array(
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter your current address info' ,'keenshot' ),
      ),
    )
  );

  $wp_customize->selective_refresh->add_partial( 'keenshot_footer_address_settings', array(
   'selector' => '#copywrite',
  ));

 }
endif;
add_action('customize_register','keenshot_footer_section_customizer');

function keenshot_footer_image_option(){
   $image_id = wp_get_attachment_url(get_theme_mod( 'sample_default_footer_image',''));
   return $image_id;
}
add_action( 'wp_head', 'keenshot_footer_image_option');

function keenshot_sanitize($input){
	if(!empty($input)) {
		return $input;
	}
	return $input;
}