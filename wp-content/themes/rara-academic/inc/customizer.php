<?php
/**
 * Rara Academic Theme Customizer.
 *
 * @package Rara_Academic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rara_academic_customize_register( $wp_customize ) {

    if ( version_compare( get_bloginfo('version'),'4.9', '>=') ) {
        $wp_customize->get_section( 'static_front_page' )->title = __( 'Static Front Page', 'rara-academic' );
    }
	
    /** Option list of all post */	
    $options_posts = array();
    $options_posts_obj = get_posts('posts_per_page=-1');
    $options_posts[''] = __( 'Choose Post', 'rara-academic' );
    foreach ( $options_posts_obj as $posts ) {
    	$options_posts[$posts->ID] = $posts->post_title;
    }

    /** Option list of all categories */
    $args = array(
	   'type'                     => 'post',
	   'orderby'                  => 'name',
	   'order'                    => 'ASC',
	   'hide_empty'               => 1,
	   'hierarchical'             => 1,
	   'taxonomy'                 => 'category'
    ); 
    $option_categories = array();
    $category_lists = get_categories( $args );
    $option_categories[''] = __( 'Choose Category', 'rara-academic' );
    foreach( $category_lists as $category ){
        $option_categories[$category->term_id] = $category->name;
    }
    
    /** Default Settings*/
    $wp_customize->add_panel(
     	'wp_default_panel',
     	array( 
     		'priority' => 10,
     		'capability' => 'edit_theme_options',
     		'theme_support' => '',
     		'title' => __('Default Settings','rara-academic'),
     		'description' => __('Default section provided by wordpress customizer','rara-academic'),
     		)
     	);

    $wp_customize->get_section( 'title_tagline' )->panel     = 'wp_default_panel';
    $wp_customize->get_section( 'colors' )->panel            = 'wp_default_panel';
    $wp_customize->get_section( 'background_image' )->panel  = 'wp_default_panel';
    $wp_customize->get_section( 'static_front_page' )->panel = 'wp_default_panel'; 


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'refresh';
    $wp_customize->get_setting( 'background_image' )->transport = 'refresh';
    /** Default Settings Ends */
    
    /** Header Settings */
    $wp_customize->add_section(
        'rara_academic_header_section',
        array(
            'title' => __( 'Header Settings', 'rara-academic' ),
            'priority' => 20,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Phone Number  */
    $wp_customize->add_setting(
        'rara_academic_phone',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_phone',
        array(
            'label' => __( 'Phone Number', 'rara-academic' ),
            'section' => 'rara_academic_header_section',
            'type' => 'text',
        )
    );

       /** Email Address  */
    $wp_customize->add_setting(
        'rara_academic_email_address',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_email',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_email_address',
        array(
            'label' => __( 'Email Address', 'rara-academic' ),
            'section' => 'rara_academic_header_section',
            'type' => 'text',
        )
    );
    
    /** Home Page Settings */
    $wp_customize->add_panel( 
        'rara_academic_home_page_settings',
         array(
            'priority' => 30,
            'capability' => 'edit_theme_options',
            'title' => __( 'Home Page Settings', 'rara-academic' ),
            'description' => __( 'Customize Home Page Settings', 'rara-academic' ),
        ) 
    );
    
    /** banner Section */
    $wp_customize->add_section(
        'rara_academic_banner_settings',
        array(
            'title' => __( 'Banner Section', 'rara-academic' ),
            'priority' => 10,
            'panel' => 'rara_academic_home_page_settings',
        )
    );
    
    /** Enable/Disable banner Section */
    $wp_customize->add_setting(
        'rara_academic_ed_banner_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_banner_section',
        array(
            'label' => __( 'Enable Banner Section', 'rara-academic' ),
            'section' => 'rara_academic_banner_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Banner Post */
    $wp_customize->add_setting(
        'rara_academic_banner_post',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_banner_post',
        array(
            'label' => __( 'Select Banner Post', 'rara-academic'),
            'section' => 'rara_academic_banner_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Read More Text */
    $wp_customize->add_setting(
        'rara_academic_banner_read_more',
        array(
            'default'=> __( 'Learn More', 'rara-academic' ),
            'sanitize_callback'=> 'sanitize_text_field'
            )
        );
    
    $wp_customize->add_control(
        'rara_academic_banner_read_more',
        array(
              'label' => __( 'Read More Texts', 'rara-academic' ),
              'section' => 'rara_academic_banner_settings', 
              'type' => 'text',
            ));


    /** courses Section */
    $wp_customize->add_section(
        'rara_academic_courses_settings',
        array(
            'title' => __( 'Courses Section', 'rara-academic' ),
            'priority' => 20,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable courses Section */
    $wp_customize->add_setting(
        'rara_academic_ed_courses_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_courses_section',
        array(
            'label' => __( 'Enable Courses Section', 'rara-academic' ),
            'section' => 'rara_academic_courses_settings',
            'type' => 'checkbox',
        )
    );

    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_courses_section_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_courses_section_title',
        array(
            'label'   => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_courses_settings',
            'type'    => 'text',
        )
    );
    
    /** Section Description */
    $wp_customize->add_setting(
        'rara_academic_courses_section_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_courses_section_description',
        array(
            'label'   => __( 'Section Description', 'rara-academic' ),
            'section' => 'rara_academic_courses_settings',
            'type'    => 'textarea',
        )
    );
    
    /** Post One */
    $wp_customize->add_setting(
        'rara_academic_popular_course_post_one',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_popular_course_post_one',
        array(
            'label' => __( 'Select Post One', 'rara-academic'),
            'section' => 'rara_academic_courses_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );

    /** Post Two */
    $wp_customize->add_setting(
        'rara_academic_popular_course_post_two',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
        
    $wp_customize->add_control(
        'rara_academic_popular_course_post_two',
        array(
            'label' => __( 'Select Post Two', 'rara-academic'),
            'section' => 'rara_academic_courses_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );

    /** Post Three */
    $wp_customize->add_setting(
        'rara_academic_popular_course_post_three',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_popular_course_post_three',
        array(
            'label' => __( 'Select Post Three', 'rara-academic'),
            'section' => 'rara_academic_courses_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );

    /** Welcome Section */
    $wp_customize->add_section(
        'rara_academic_welcome_settings',
        array(
            'title' => __( 'Welcome Section', 'rara-academic' ),
            'priority' => 30,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable welcome Section */
    $wp_customize->add_setting(
        'rara_academic_ed_welcome_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_welcome_section',
        array(
            'label' => __( 'Enable Welcome Section', 'rara-academic' ),
            'section' => 'rara_academic_welcome_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Select Welcome Post */
    $wp_customize->add_setting(
        'rara_academic_welcome_post',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_welcome_post',
        array(
            'label' => __( 'Select Welcome Post', 'rara-academic'),
            'section' => 'rara_academic_welcome_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
   
    /** Read More Text */
    $wp_customize->add_setting(
        'rara_academic_welcome_read_more',
        array(
            'default'=> __( 'Read More', 'rara-academic' ),
            'sanitize_callback'=> 'sanitize_text_field'
            )
        );
    
    $wp_customize->add_control(
        'rara_academic_welcome_read_more',
        array(
              'label' => __( 'Read More Texts', 'rara-academic' ),
              'section' => 'rara_academic_welcome_settings', 
              'type' => 'text',
            ));
   
    /** Service Section */
    $wp_customize->add_section(
        'rara_academic_service_settings',
        array(
            'title' => __( 'Service Section', 'rara-academic' ),
            'priority' => 40,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable service Section */
    $wp_customize->add_setting(
        'rara_academic_ed_service_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_service_section',
        array(
            'label' => __( 'Enable Services Section', 'rara-academic' ),
            'section' => 'rara_academic_service_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_services_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
    $wp_customize->add_control(
        'rara_academic_services_section_title',
        array(
            'label' => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_service_settings',
            'type' => 'text',
        ));
    
    /** Post One */
    $wp_customize->add_setting(
        'rara_academic_service_post_one',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_one',
        array(
            'label' => __( 'Select Post One', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Post Two */
    $wp_customize->add_setting(
        'rara_academic_service_post_two',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_two',
        array(
            'label' => __( 'Select Post Two', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Post Three */
    $wp_customize->add_setting(
        'rara_academic_service_post_three',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_three',
        array(
            'label' => __( 'Select Post Three', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Post Four */
    $wp_customize->add_setting(
        'rara_academic_service_post_four',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_four',
        array(
            'label' => __( 'Select Post Four', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Post Five */
    $wp_customize->add_setting(
        'rara_academic_service_post_five',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_five',
        array(
            'label' => __( 'Select Post Five', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );
    
    /** Post Six */
    $wp_customize->add_setting(
        'rara_academic_service_post_six',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_service_post_six',
        array(
            'label' => __( 'Select Post Six', 'rara-academic'),
            'section' => 'rara_academic_service_settings',
            'type' => 'select',
            'choices' => $options_posts,
        )
    );

    /** Notice Section */
    $wp_customize->add_section(
        'rara_academic_notice_settings',
        array(
            'title' => __( 'Notice Section', 'rara-academic' ),
            'priority' => 50,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable notice Section */
    $wp_customize->add_setting(
        'rara_academic_ed_notice_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_notice_section',
        array(
            'label' => __( 'Enable Notice Section', 'rara-academic' ),
            'section' => 'rara_academic_notice_settings',
            'type' => 'checkbox',
        )
    );

    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_notice_section_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_notice_section_title',
        array(
            'label'   => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_notice_settings',
            'type'    => 'text',
        )
    );
    
    /** Section Description */
    $wp_customize->add_setting(
        'rara_academic_notice_section_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_notice_section_description',
        array(
            'label'   => __( 'Section Description', 'rara-academic' ),
            'section' => 'rara_academic_notice_settings',
            'type'    => 'textarea',
        )
    );

    /** Button Label */
    $wp_customize->add_setting(
        'rara_academic_notice_section_button_label',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_notice_section_button_label',
        array(
            'label' => __( 'Button Label', 'rara-academic' ),
            'section' => 'rara_academic_notice_settings',
            'type' => 'text',
        )
    );
    
    /** Button Link */
    $wp_customize->add_setting(
        'rara_academic_notice_section_button_link',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_notice_section_button_link',
        array(
            'label'   => __( 'Button Link', 'rara-academic' ),
            'section' => 'rara_academic_notice_settings',
            'type'    => 'text',
        )
    );
    
    /** Blog Section */
    $wp_customize->add_section(
        'rara_academic_blog_settings',
        array(
            'title' => __( 'Blog Section', 'rara-academic' ),
            'priority' => 60,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable latest_news Section */
    $wp_customize->add_setting(
        'rara_academic_ed_blog_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_blog_section',
        array(
            'label' => __( 'Enable Latest News Section', 'rara-academic' ),
            'section' => 'rara_academic_blog_settings',
            'type' => 'checkbox',
        )
    );

    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_blog_section_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_blog_section_title',
        array(
            'label'   => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_blog_settings',
            'type'    => 'text',
        )
    );
    
    /** Section Description */
    $wp_customize->add_setting(
        'rara_academic_blog_section_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_blog_section_description',
        array(
            'label'   => __( 'Section Description', 'rara-academic' ),
            'section' => 'rara_academic_blog_settings',
            'type'    => 'textarea',
        )
    );

    /** Testimonials Section */
    $wp_customize->add_section(
        'rara_academic_students_settings',
        array(
            'title' => __( 'Testimonials Section', 'rara-academic' ),
            'priority' => 70,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable Testimonials Section */
    $wp_customize->add_setting(
        'rara_academic_ed_testimonial_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_testimonial_section',
        array(
            'label' => __( 'Enable Testimonials Section', 'rara-academic' ),
            'section' => 'rara_academic_students_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_testimonial_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_testimonial_section_title',
        array(
            'label' => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_students_settings',
            'type' => 'text',
        )
    );

    /** Testimonial Category */
    $wp_customize->add_setting(
        'rara_academic_testimonial_category',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_testimonial_category',
        array(
            'label' => __( 'Choose Testimonials Category', 'rara-academic'),
            'section' => 'rara_academic_students_settings',
            'type' => 'select',
            'choices' => $option_categories,
        )
    );
    
    /** CTA Section */
    $wp_customize->add_section(
        'rara_academic_cta_settings',
        array(
            'title' => __( 'CTA Section', 'rara-academic' ),
            'priority' => 80,
            'panel' => 'rara_academic_home_page_settings',
        )
    );

    /** Enable/Disable CTA Section */
    $wp_customize->add_setting(
        'rara_academic_ed_cta_section',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_cta_section',
        array(
            'label' => __( 'Enable CTA Section', 'rara-academic' ),
            'section' => 'rara_academic_cta_settings',
            'type' => 'checkbox',
        )
    );

    /** Section Title */
    $wp_customize->add_setting(
        'rara_academic_cta_section_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_cta_section_title',
        array(
            'label'   => __( 'Section Title', 'rara-academic' ),
            'section' => 'rara_academic_cta_settings',
            'type'    => 'text',
        )
    );
    
    /** Section Description */
    $wp_customize->add_setting(
        'rara_academic_cta_section_description',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_cta_section_description',
        array(
            'label'   => __( 'Section Description', 'rara-academic' ),
            'section' => 'rara_academic_cta_settings',
            'type'    => 'textarea',
        )
    );

    /** Button Label */
    $wp_customize->add_setting(
        'rara_academic_cta_section_button_label',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_cta_section_button_label',
        array(
            'label' => __( 'Button Label', 'rara-academic' ),
            'section' => 'rara_academic_cta_settings',
            'type' => 'text',
        )
    );
    
    /** Button Link */
    $wp_customize->add_setting(
        'rara_academic_cta_section_button_link',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_cta_section_button_link',
        array(
            'label'   => __( 'Button Link', 'rara-academic' ),
            'section' => 'rara_academic_cta_settings',
            'type'    => 'text',
        )
    );    
    /** Home Page Settings Ends */
    
    /** BreadCrumb Settings */
    $wp_customize->add_section(
        'rara_academic_breadcrumb_settings',
        array(
            'title' => __( 'Breadcrumb Settings', 'rara-academic' ),
            'priority' => 40,
            'capability' => 'edit_theme_options',
        )
    );
   

    /** Enable/Disable BreadCrumb */
    $wp_customize->add_setting(
        'rara_academic_ed_breadcrumb',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_breadcrumb',
        array(
            'label' => __( 'Enable Breadcrumb', 'rara-academic' ),
            'section' => 'rara_academic_breadcrumb_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Show/Hide Current */
    $wp_customize->add_setting(
        'rara_academic_ed_current',
        array(
            'default' => '1',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_current',
        array(
            'label' => __( 'Show current', 'rara-academic' ),
            'section' => 'rara_academic_breadcrumb_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Home Text */
    $wp_customize->add_setting(
        'rara_academic_breadcrumb_home_text',
        array(
            'default' => __( 'Home', 'rara-academic' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_breadcrumb_home_text',
        array(
            'label' => __( 'Breadcrumb Home Text', 'rara-academic' ),
            'section' => 'rara_academic_breadcrumb_settings',
            'type' => 'text',
        )
    );
    
    /** Breadcrumb Separator */
    $wp_customize->add_setting(
        'rara_academic_breadcrumb_separator',
        array(
            'default' => __( '>', 'rara-academic' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_breadcrumb_separator',
        array(
            'label' => __( 'Breadcrumb Separator', 'rara-academic' ),
            'section' => 'rara_academic_breadcrumb_settings',
            'type' => 'text',
        )
    );
    /** BreadCrumb Settings Ends */
    
    /** Social Settings */
    $wp_customize->add_section(
        'rara_academic_social_settings',
        array(
            'title' => __( 'Social Settings', 'rara-academic' ),
            'description' => __( 'Leave blank if you do not want to show the social link.', 'rara-academic' ),
            'priority' => 50,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Enable/Disable Social in Header */
    $wp_customize->add_setting(
        'rara_academic_ed_social',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_social',
        array(
            'label' => __( 'Enable Social Links in Header', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'checkbox',
        )
    );
    
    /** Facebook */
    $wp_customize->add_setting(
        'rara_academic_facebook',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_facebook',
        array(
            'label' => __( 'Facebook', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    
    /** Twitter */
    $wp_customize->add_setting(
        'rara_academic_twitter',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_twitter',
        array(
            'label' => __( 'Twitter', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    /** Pinterest */
    $wp_customize->add_setting(
        'rara_academic_pinterest',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_pinterest',
        array(
            'label' => __( 'Pinterest', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    /** LinkedIn */
    $wp_customize->add_setting(
        'rara_academic_linkedin',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_linkedin',
        array(
            'label' => __( 'LinkedIn', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    /** Gooble Plus */
    $wp_customize->add_setting(
        'rara_academic_gplus',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_gplus',
        array(
            'label' => __( 'Google Plus', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    /** Instagram */
    $wp_customize->add_setting(
        'rara_academic_instagram',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_instagram',
        array(
            'label' => __( 'Instagram', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    
    /** YouTube */
    $wp_customize->add_setting(
        'rara_academic_youtube',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_youtube',
        array(
            'label' => __( 'YouTube', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );

     /** Ok */
    $wp_customize->add_setting(
        'rara_academic_ok',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ok',
        array(
            'label' => __( 'OK', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    /** Vk */
    $wp_customize->add_setting(
        'rara_academic_vk',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_vk',
        array(
            'label' => __( 'VK', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );

    /** Xing */
    $wp_customize->add_setting(
        'rara_academic_xing',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_xing',
        array(
            'label' => __( 'Xing', 'rara-academic' ),
            'section' => 'rara_academic_social_settings',
            'type' => 'text',
        )
    );
    /** Social Settings Ends */

    /** Blog page Settings */
    $wp_customize->add_section(
        'rara_academic_blog_page_settings',
        array(
            'title' => __( 'Blog Page Settings', 'rara-academic' ),
            'priority' => 55,
            'capability' => 'edit_theme_options',
        )
    );

    /** Enable/Disable full content in blog page */
    $wp_customize->add_setting(
        'rara_academic_ed_full_content',
        array(
            'default' => '',
            'sanitize_callback' => 'rara_academic_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_ed_full_content',
        array(
            'label' => __( 'Full content in Blog page', 'rara-academic' ),
            'section' => 'rara_academic_blog_page_settings',
            'type' => 'checkbox',
        )
    );

     /** Footer Section */
    $wp_customize->add_section(
        'rara_academic_footer_section',
        array(
            'title' => __( 'Footer Settings', 'rara-academic' ),
            'priority' => 70,
        )
    );
    
    /** Copyright Text */
    $wp_customize->add_setting(
        'rara_academic_footer_copyright_text',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'rara_academic_footer_copyright_text',
        array(
            'label' => __( 'Copyright Info', 'rara-academic' ),
            'section' => 'rara_academic_footer_section',
            'type' => 'textarea',
        )
    );
    
    /**
     * Sanitization Functions
     * 
     * @link https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php 
     */
     function rara_academic_sanitize_checkbox( $checked ){
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
     }
     
     function rara_academic_sanitize_select( $input, $setting ){
        // Ensure input is a slug.
    	$input = sanitize_key( $input );
    	
    	// Get list of choices from the control associated with the setting.
    	$choices = $setting->manager->get_control( $setting->id )->choices;
    	
    	// If the input is a valid key, return it; otherwise, return the default.
    	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
     }
}
add_action( 'customize_register', 'rara_academic_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rara_academic_customize_preview_js() {
    $build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
    $suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'rara_academic_customizer', get_template_directory_uri() . '/js' . $build . '/customizer' . $suffix . '.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rara_academic_customize_preview_js' );
