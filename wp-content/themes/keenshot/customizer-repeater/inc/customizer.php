<?php
/**
 * Keenshot Customizer Functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 */

function keenshot_customizer_repeater_register( $wp_customize ) {

  $section = array(
    'keenshot-skill', 'keenshot-about','keenshot-team','keenshot-slider' , 'keenshot-client-logo','keenshot-contact'
  );

  foreach($section as $q):
   locate_template( '/customizer-repeater/class/'.$q.'.php', true, true );
  endforeach;

  $wp_customize->add_panel( 'keenshot_theme_panel',
   array(
      'title' => __( 'Keenshot : Manage Theme' ,'keenshot'),
      'description' => __( 'Adjust your keenshot theme','keenshot' ),
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'active_callback' => '',
   )
 );
  

   /**
    * KEENSHOT HOME PAGE SLIDER SECTION
    */

    $wp_customize->add_section( 'keenshot_home_page_slider_section',
    array(
       'title' => __( 'Keenshot: Home Page Slider','keenshot' ),
       'panel' => 'keenshot_theme_panel', 
       'capability' => 'edit_theme_options', 
       'description_hidden' => 'false', 
    )
  );
 
  $wp_customize->add_setting( 'keenshot_home_page_slider_settings', array(
       'default' => '',
       'transport' => 'refresh',
       'type' => 'theme_mod',
       'capability' => 'edit_theme_options',
       'dirty' => false, 
       'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
       ));
 
  $wp_customize->add_control( new Keenshot_Slider_Customizer_Repeater( $wp_customize, '  keenshot_home_page_slider_customizer_control', array(
      'label'   => __('Upload slider image','keenshot'),
      'section' => 'keenshot_home_page_slider_section',
      'settings' => 'keenshot_home_page_slider_settings',
      'priority' => 20,
      'customizer_repeater_image_control' => true,
    )));
    
     /**
    * KEENSHOT ABOUT US SECTION
    */

   $wp_customize->add_section( 'keenshot_about_section',
   array(
      'title' => __( 'Keenshot: About Section','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_about_settings', array(
     'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
    ));
 $wp_customize->add_control( new Keenshot_About_Customizer_Repeater( $wp_customize, '  keenshot_about_us_customizer_control', array(
     'label'   => __('Manage about section','keenshot'),
     'section' => 'keenshot_about_section',
     'settings' => 'keenshot_about_settings',
     'priority' => 30,
     'customizer_repeater_image_control' => true,
     'customizer_repeater_title_control' => true,
     'customizer_repeater_subtitle_control' => true,
     'customizer_repeater_text_control' => true,
     'customizer_repeater_repeater_control' => true
   )));

   /**
     * KEENSHOT CLIENT LOGO SECTION
    */
 
    $wp_customize->add_section( 'keenshot_client_logo_section',
    array(
       'title' => __( 'Keenshot: Client Logo','keenshot' ),
       'panel' => 'keenshot_theme_panel', 
       'capability' => 'edit_theme_options', 
       'description_hidden' => 'false', 
    )
  );
 
  $wp_customize->add_setting( 'keenshot_client_logo_settings', array(
      'default' => '',
       'transport' => 'refresh',
       'type' => 'theme_mod',
       'capability' => 'edit_theme_options',
       'dirty' => false, 
       'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
       ));
 
  $wp_customize->add_control( new Keenshot_Client_Logo_Customizer_Repeater( $wp_customize, '  keenshot_client_logo_customizer_control', array(
      'label'   => __('Adjust client logo','keenshot'),
      'section' => 'keenshot_client_logo_section',
      'settings' => 'keenshot_client_logo_settings',
      'priority' => 40,
      'customizer_repeater_image_control' => true,
      'customizer_repeater_link_control' => true,
 
    )));


 /**
  * KEENSHOT TESTIMONIAL SECTION
  */

   $wp_customize->add_section( 'keenshot_testionial_section',
   array(
      'title' => __( 'Keenshot: Testimonial','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'priority' => 50, 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_testimonial_settings', array(
     'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
      ));

 $wp_customize->add_control( new Keenshot_Team_Customizer_Repeater( $wp_customize, '  keenshot_testimonial_customizer_control', array(
     'label'   => __('Manage testimonial section','keenshot'),
     'section' => 'keenshot_testionial_section',
     'settings' => 'keenshot_testimonial_settings',
     'priority' => 60,
     'customizer_repeater_image_control' => true,
     'customizer_repeater_title_control' => true,
     'customizer_repeater_text_control' => true,
   )));
   
/**
 * KEENSHOT SKILL SECTION
 */
 $wp_customize->add_section( 'about_page_skill_section',
   array(
      'title' => __( 'Keenshot: Manage Skill','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_skill_settings', array(
 	  'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
      ));

 $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'keenshot_skill_customizer_control', array(
	  'label'   => __('Manage your skill','keenshot'),
	  'section' => 'about_page_skill_section',
     'settings' => 'keenshot_skill_settings',
	  'priority' => 70,
	  'customizer_repeater_title_control' => true,
	  'customizer_repeater_text_control' => true,
	  'customizer_repeater_repeater_control' => true
   )));

 /**
  * KEENSHOT TEAM SECTION
  */

   $wp_customize->add_section( 'keenshot_team_section',
   array(
      'title' => __( 'Keenshot: Team','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_team_settings', array(
     'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
      ));

 $wp_customize->add_control( new Keenshot_Team_Customizer_Repeater( $wp_customize, '  keenshot_team_customizer_control', array(
     'label'   => __('Keenshot: Team','keenshot'),
     'section' => 'keenshot_team_section',
     'settings' => 'keenshot_team_settings',
     'priority' => 80,
     'customizer_repeater_image_control' => true,
     'customizer_repeater_title_control' => true,
     'customizer_repeater_subtitle_control' => true,
     'customizer_repeater_repeater_control' => true
   )));

  /**
    * KEENSHOT CONTACT ADDRESS SECTION
    */

   $wp_customize->add_section( 'keenshot_contact_section',
   array(
      'title' => __( 'Keenshot: Contact Address','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

 $wp_customize->add_setting( 'keenshot_contact_settings', array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
      ));

 $wp_customize->add_control( new Keenshot_Contact_Customizer_Repeater( $wp_customize, '  keenshot_contact_customizer_control', array(
     'label'   => __('Keenshot: Contact Address','keenshot'),
     'section' => 'keenshot_contact_section',
     'settings' => 'keenshot_contact_settings',
     'priority' => 90,
     'customizer_repeater_title_control' => true,
     'customizer_repeater_subtitle_control' => true,
     'customizer_repeater_text_control' => true,
   )));

  /**
    * KEENSHOT CONTACT SECTION
    */

   $wp_customize->add_section( 'keenshot_contact_page_section',
   array(
      'title' => __( 'Keenshot: Contact','keenshot' ),
      'panel' => 'keenshot_theme_panel', 
      'capability' => 'edit_theme_options', 
      'description_hidden' => 'false', 
   )
 );

   $wp_customize->add_setting( 'keenshot_contact_page_settings', array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_repeater_sanitize'
      ));

   $wp_customize->add_control( new Keenshot_About_Customizer_Repeater( $wp_customize, '  keenshot_contact_page_customizer_control', array(
     'label'   => __('Keenshot: Contact','keenshot'),
     'section' => 'keenshot_contact_page_section',
     'settings' => 'keenshot_contact_page_settings',
     'priority' => 100,
     'customizer_repeater_image_control' => true,
     'customizer_repeater_repeater_control' => true
   )));

   /**
    * KEENSHOT CUSTOMIZER SIDEBAR CONTROL
    */

    $wp_customize->add_section( 'keenshot_sidebar_section',
    array(
       'title' => __( 'Keenshot: Sidebar Layout','keenshot' ),
       'panel' => 'keenshot_theme_panel', 
       'capability' => 'edit_theme_options', 
       'description_hidden' => 'false', 
    )
   );

    $wp_customize->add_setting( 'keenshot_sidebar_settings', array(
      'default' => '',
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'dirty' => false, 
      'sanitize_callback' => 'keenshot_customizer_sanitize'
      ));

      $wp_customize->add_control('keenshot_sidebar_control', array(
        'label'      => __('Sidebar position', 'keenshot'),
        'section'    => 'keenshot_sidebar_section',
        'settings'   => 'keenshot_sidebar_settings',
        'type'       => 'radio',
        'choices'    => array(
            'left'   => __('left', 'keenshot'),
            'right'  => __('right', 'keenshot')
        ),
    ));
 
}
add_action( 'customize_register', 'keenshot_customizer_repeater_register' );

function keenshot_customizer_repeater_sanitize($input){
	$input_decoded = json_decode($input,true);

	if(!empty($input_decoded)) {
		foreach ($input_decoded as $boxk => $box ){
			foreach ($box as $key => $value){
					$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
			}
		}
		return json_encode($input_decoded);
	}
	return $input;
}
function keenshot_customizer_sanitize($input){
    	if(!empty($input)) {
	      	return $input;
	    }
	    return $input;
}
  