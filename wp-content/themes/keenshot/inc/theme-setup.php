<?php
/**
 * Keenshot functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 */


 if( ! function_exists( 'keenshot_theme_setup' ) ) :
 /**
  * Keenshot Theme Setup
  */

function keenshot_theme_setup(){ 
	/*
	* Make theme available for translation.
    * Translations can be filed in the /languages/ directory. 
    */
    load_theme_textdomain( 'keenshot', get_template_directory() . '/languages' );
    
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
	* @link https://developer.wordpress.org/themes/functionality
	featured-images-post-thumbnails/
	*/
	

	add_theme_support( 'post-thumbnails');

    /**
    * Add support for core custom logo.
	*
    * @link https://codex.wordpress.org/Theme_Logo
	*/
	add_theme_support(
			'custom-logo',
			  array(
				'flex-width'  => false,
				'flex-height' => false
			)
	);

    /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
			'html5',
			 array(
				'search-form',
				'comment-form',
				'comment-list',
			)
		);
    
    /**
	* Add support for core custom header.
	*
	* @link https://codex.wordpress.org/Theme_Logo
	*/

    $keenshot_custom_header_details = array(
	  'default-image'      => '',
	  'default-text-color'     => '',
	  'uploads'                => true,
      'header-text'        => true,
      'flex-height'        => true,
      'flex-width'         => true
    );

    add_theme_support("custom-header",$keenshot_custom_header_details);

    /**
	* Add support for core custom background.
	*
	* @link https://codex.wordpress.org/Theme_Logo
	*/

    add_theme_support('custom-background');

    /**
	* Add support for core custom editor_style.
	*
	* @link https://codex.wordpress.org/Theme_Logo
	*/

    add_editor_style( 'custom-editor-style.css' );
	/**
	* Add support for core custom logo.
	*
	* @link https://codex.wordpress.org/Theme_Logo
	*/

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
    
    // Register Keenshot Navigation Menu.
	register_nav_menu( "primary", __( "Nav Menu", "keenshot" ) );

	if (is_single()){
		 $content_width = 780;  
	}

	/**
	 * gutenberg support
	 */

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );
	
   /*
	* Enable support for woocommerce plugins
	*/
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 200,
	
		'product_grid'          => array(
			'default_rows'    => 3,
			'min_rows'        => 2,
			'max_rows'        => 8,
			'default_columns' => 4,
			'min_columns'     => 2,
			'max_columns'     => 5,
		),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider');
}
endif;
add_action("after_setup_theme","keenshot_theme_setup");


if( ! function_exists( 'keenshot_content_width' ) ) :
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function keenshot_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'keenshot_content_width', 780 );
}
endif;
add_action( 'after_setup_theme', 'keenshot_content_width', 0 );

/**
 * Woocommerce support @hoocked 
 */

add_action('woocommerce_before_main_content', 'keenshot_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'keenshot_wrapper_end', 10);

function keenshot_wrapper_start() {
	echo '<section class="shop-page" id="main"><div class="container"><div class="row">';

	if(is_product()){
		echo '<div class="col-md-8 col-sm-8">';
	}else if(is_shop()){
		echo '<div class="col-md-8 col-sm-8">';
	}else{
		echo '';
	}
}

function keenshot_wrapper_end() {
    echo"</div>";
	?>
	<div class="col-md-4 col-sm-12 col-xs-12">
	  <?php	get_sidebar(); ?>
	
	<?php
	echo "</div></div></section>";
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

