<?php

namespace WPForms\Lite\Admin;

/**
 * WPForms Connect Skin.
 *
 * WPForms Connect is our service that makes it easy for non-techy users to
 * upgrade to WPForms Pro without having to manually install WPForms Pro plugin.
 *
 * @package    WPForms\Admin
 * @author     WPForms
 * @since      1.5.5
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2019, WPForms LLC
 */

class ConnectSkin extends \WP_Upgrader_Skin {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.5.5
	 *
	 * @param array $args Empty array of args (we will use defaults).
	 */
	public function __construct( $args = array() ) {

		parent::__construct();
	}

	/**
	 * Set the upgrader object and store it as a property in the parent class.
	 *
	 * @since 1.5.5
	 *
	 * @param object $upgrader The upgrader object (passed by reference).
	 */
	public function set_upgrader( &$upgrader ) {

		if ( is_object( $upgrader ) ) {
			$this->upgrader =& $upgrader;
		}
	}

	/**
	 * Set the upgrader result and store it as a property in the parent class.
	 *
	 * @since 1.5.5
	 *
	 * @param object $result The result of the install process.
	 */
	public function set_result( $result ) {

		$this->result = $result;
	}

	/**
	 * Empty out the header of its HTML content and only check to see if it has
	 * been performed or not.
	 *
	 * @since 1.5.5
	 */
	public function header() {}

	/**
	 * Empty out the footer of its HTML contents.
	 *
	 * @since 1.5.5
	 */
	public function footer() {}

	/**
	 * Instead of outputting HTML for errors, json_encode the errors and send them
	 * back to the Ajax script for processing.
	 *
	 * @since 1.5.5
	 *
	 * @param array $errors Array of errors with the install process.
	 */
	public function error( $errors ) {

		if ( ! empty( $errors ) ) {
			echo \wp_json_encode(
				array(
					'error' => \esc_html__( 'There was an error installing WPForms Pro. Please try again.', 'wpforms-lite' ),
				)
			);
			die;
		}
	}

	/**
	 * Empty out the feedback method to prevent outputting HTML strings as the install
	 * is progressing.
	 *
	 * @since 1.5.5
	 *
	 * @param string $string The feedback string.
	 */
	public function feedback( $string ) {}
}
