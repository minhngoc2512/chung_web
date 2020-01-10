<?php

/**
 * Fired during plugin activation
 *
 * @link       thikshare.com
 * @since      1.0.0
 *
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/includes
 * @author     Thik Share <dangngocbinh.dnb@gmail.com>
 */
class Easy_Callnow_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$config = new EasyCallNow_OptionPage();
		$data = $config->get_settings();
		if(!isset($data['phone'])) update_option( 'easy_callnow_phone_number', 'xxx.xxx.xxx');
		if(!isset($data['position'])) update_option( 'easy_callnow_call_position', 'p_bottom_right');
		if(!isset($data['ring_color'])) update_option( 'easy_callnow_ring_color', '#f00');
		if(!isset($data['ring_hover_color'])) update_option( 'easy_callnow_ring_hover_color', '#baf5a7');
		if(!isset($data['button_color'])) update_option( 'easy_callnow_button_color', '#eee');
		if(!isset($data['number_color'])) update_option( 'easy_callnow_number_color', '#f00');
		if(!isset($data['offset_top'])) update_option( 'easy_callnow_offset_top', '50');
		if(!isset($data['offset_bottom'])) update_option( 'easy_callnow_offset_bottom', '15');
		if(!isset($data['offset_left'])) update_option( 'easy_callnow_offset_left', '5');
		if(!isset($data['offset_right'])) update_option( 'easy_callnow_offset_right', '5');
	}

}
