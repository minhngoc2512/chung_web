<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              thikshare.com
 * @since             1.0.0
 * @package           Easy_Callnow
 *
 * @wordpress-plugin
 * Plugin Name:       Easy Call Now by ThikShare
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.1.0
 * Author:            Dang Ngoc Binh
 * Author URI:        thikshare.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-callnow
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-callnow-activator.php
 */
function activate_easy_callnow() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-callnow-activator.php';
	Easy_Callnow_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-callnow-deactivator.php
 */
function deactivate_easy_callnow() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-callnow-deactivator.php';
	Easy_Callnow_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_easy_callnow' );
register_deactivation_hook( __FILE__, 'deactivate_easy_callnow' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-easy-callnow.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_easy_callnow() {

	$plugin = new Easy_Callnow();
	$plugin->run();

}
run_easy_callnow();
