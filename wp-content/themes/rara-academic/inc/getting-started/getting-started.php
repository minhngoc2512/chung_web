<?php
/**
 * Getting Started Page.
 *
 * @package Rara_Academic
 */

require get_template_directory() . '/inc/getting-started/class-getting-start-plugin-helper.php';

if( ! function_exists( 'rara_academic_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function rara_academic_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'rara-academic' ),
		__( 'Getting Started', 'rara-academic' ),
		'manage_options',
		'rara-academic-getting-started',
		'rara_academic_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'rara_academic_getting_started_menu' );

if( ! function_exists( 'rara_academic_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function rara_academic_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_rara-academic-getting-started' != $hook ) return;

    wp_enqueue_style( 'rara-academic-getting-started', get_template_directory_uri() . '/inc/getting-started/css/getting-started.css', false, RARA_ACADEMIC_THEME_VERSION );
    
    wp_enqueue_script( 'plugin-install' );
    wp_enqueue_script( 'updates' );
    wp_enqueue_script( 'rara-academic-getting-started', get_template_directory_uri() . '/inc/getting-started/js/getting-started.js', array( 'jquery' ), RARA_ACADEMIC_THEME_VERSION, true );
    wp_enqueue_script( 'rara-academic-recommended-plugin-install', get_template_directory_uri() . '/inc/getting-started/js/recommended-plugin-install.js', array( 'jquery' ), RARA_ACADEMIC_THEME_VERSION, true );    
    wp_localize_script( 'rara-academic-recommended-plugin-install', 'rara_academic_start_page', array( 'activating' => __( 'Activating ', 'rara-academic' ) ) );
}
endif;
add_action( 'admin_enqueue_scripts', 'rara_academic_getting_started_admin_scripts' );

if( ! function_exists( 'rara_academic_call_plugin_api' ) ) :
/**
 * Plugin API
**/
function rara_academic_call_plugin_api( $plugin ) {
	include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	$call_api = plugins_api( 
        'plugin_information', 
            array(
    		'slug'   => $plugin,
    		'fields' => array(
    			'downloaded'        => false,
    			'rating'            => false,
    			'description'       => false,
    			'short_description' => true,
    			'donate_link'       => false,
    			'tags'              => false,
    			'sections'          => true,
    			'homepage'          => true,
    			'added'             => false,
    			'last_updated'      => false,
    			'compatibility'     => false,
    			'tested'            => false,
    			'requires'          => false,
    			'downloadlink'      => false,
    			'icons'             => true
    		)
    	) 
    );
	return $call_api;
}
endif;

if( ! function_exists( 'rara_academic_check_for_icon' ) ) :
/**
 * Check For Icon 
**/
function rara_academic_check_for_icon( $arr ) {
	if( ! empty( $arr['svg'] ) ){
		$plugin_icon_url = $arr['svg'];
	}elseif( ! empty( $arr['2x'] ) ){
		$plugin_icon_url = $arr['2x'];
	}elseif( ! empty( $arr['1x'] ) ){
		$plugin_icon_url = $arr['1x'];
	}else{
		$plugin_icon_url = $arr['default'];
	}                               
	return $plugin_icon_url;
}
endif;

if( ! function_exists( 'rara_academic_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function rara_academic_getting_started_page(){ ?>
	<div class="wrap getting-started">
		<h2 class="notices"></h2>
		<div class="intro-wrap">
			<div class="intro">
				<h3><?php printf( esc_html__( 'Getting started with %1$s v%2$s', 'rara-academic' ), RARA_ACADEMIC_THEME_NAME, RARA_ACADEMIC_THEME_VERSION ); ?></h3>
				<h4><?php printf( esc_html__( 'You will find everything you need to get started with %1$s below.', 'rara-academic' ), RARA_ACADEMIC_THEME_NAME ); ?></h4>
			</div>
		</div>

		<div class="panels">
			<ul class="inline-list">
				<li class="current">
                    <a id="plugins" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 18">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M16,9v4.66l-3.5,3.51V19h-1V17.17L8,13.65V9h8m0-6H14V7H10V3H8V7H7.99A1.987,1.987,0,0,0,6,8.98V14.5L9.5,18v3h5V18L18,14.49V9a2.006,2.006,0,0,0-2-2Z" transform="translate(-6 -3)"/>
                        </svg>
                        <?php esc_html_e( 'Recommended Plugins', 'rara-academic' ); ?>
                    </a>
                </li>
				<li>
                    <a id="help" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M12,23H11V16.43A5.966,5.966,0,0,1,7,18a6.083,6.083,0,0,1-6-6V11H7.57A5.966,5.966,0,0,1,6,7a6.083,6.083,0,0,1,6-6h1V7.57A5.966,5.966,0,0,1,17,6a6.083,6.083,0,0,1,6,6v1H16.43A5.966,5.966,0,0,1,18,17,6.083,6.083,0,0,1,12,23Zm1-9.87v7.74a4,4,0,0,0,0-7.74ZM3.13,13A4.07,4.07,0,0,0,7,16a4.07,4.07,0,0,0,3.87-3Zm10-2h7.74a4,4,0,0,0-7.74,0ZM11,3.13A4.08,4.08,0,0,0,8,7a4.08,4.08,0,0,0,3,3.87Z" transform="translate(-1 -1)"/>
                        </svg>
                        <?php esc_html_e( 'Getting Started', 'rara-academic' ); ?>
                    </a>
                </li>
				<li>
                    <a id="support" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M11,18h2V16H11ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20ZM12,6a4,4,0,0,0-4,4h2a2,2,0,0,1,4,0c0,2-3,1.75-3,5h2c0-2.25,3-2.5,3-5A4,4,0,0,0,12,6Z" transform="translate(-2 -2)"/>
                        </svg>
                        <?php esc_html_e( 'FAQ\'s &amp; Support', 'rara-academic' ); ?>
                    </a>
                </li>
				<li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.297 20">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M19.384,17.534V13.75L14,19.155l5.384,5.405V20.777H31.3V17.534Zm6.53,9.189H14v3.243H25.914V33.75L31.3,28.345l-5.384-5.405Z" transform="translate(-14 -13.75)"/>
                        </svg>
                        <?php esc_html_e( 'Free Vs Pro', 'rara-academic' ); ?>
                    </a>
                </li>
			</ul>
			<div id="panel" class="panel">
				<?php require get_template_directory() . '/inc/getting-started/tabs/plugins-panel.php'; ?>
				<?php require get_template_directory() . '/inc/getting-started/tabs/help-panel.php'; ?>
				<?php require get_template_directory() . '/inc/getting-started/tabs/support-panel.php'; ?>
				<?php require get_template_directory() . '/inc/getting-started/tabs/free-vs-pro-panel.php'; ?>
				<?php require get_template_directory() . '/inc/getting-started/tabs/link-panel.php'; ?>
			</div><!-- .panel -->
		</div><!-- .panels -->
	</div><!-- .getting-started -->
	<?php
}
endif;