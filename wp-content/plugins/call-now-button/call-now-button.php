<?php
/*
Plugin Name: Call Now Button
Plugin URI: http://callnowbutton.com
Description: Mobile visitors will see a call now button fixed at the bottom of your site 
Version: 0.3.6
Author: Jerry Rietveld
Author URI: http://www.jgrietveld.com
License: GPL2
*/

/*  Copyright 2013-2017  Jerry Rietveld  (email : jerry@jgrietveld.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
define('CNB_VERSION','0.3.6');
define('CNB_BASENAME', plugin_basename( __FILE__ ) );
define('CNB_BASEFOLDER', plugin_basename( dirname( __FILE__ ) ) );
define('CNB_FILENAME', str_replace( CNB_BASEFOLDER.'/', '', CNB_BASENAME ) );
add_action('admin_menu', 'register_cnb_page');
add_action('admin_init', 'cnb_options_init');

$cnb_changelog = 
array(
	array(
		'3.6' => 'Small validation fixes and zoom now controls icon size in full width buttons.',
		'3.5' => 'Small JS fix',
		'3.4' => 'Option to resize your button and change where it sits in the stack order (z-index).',
		'3.3' => 'Some small improvements.',
		'3.2' => 'Option to hide icon in text button, small bug fixes.',
		'3.1' => 'You can now add text to your button and it\'s possible to switch between including and excluding specific pages.',
		'3.0' => 'Option to add text to your button.',
		'2.1' => 'Some small fixes',
		'2.0' => 'The Call Now Button has a fresh new look! If you prefer the old button, you can <span class="cnb-switch-back">switch back</span> in the Advanced Settings. <a href="http://callnowbutton.com/new-button-design/" target="_blank" class="cnb-external"><i>See the difference &raquo;</i></a>'
	)
);

$cnb_settings = cnb_get_options(); // Grabbing the settins and checking for latest version OR creating the options file for first time installations
$cnb_options = $cnb_settings['options'];
$cnb_updated = $cnb_settings['updated'];


$cnb_options['active'] = isset($cnb_options['active']) ? 1 : 0;
$cnb_options['classic'] = isset($cnb_options['classic']) ? 1 : 0;
$cnb_options['hideIcon'] = isset($cnb_options['hideIcon']) ? $cnb_options['hideIcon'] : 0;

$plugin_title = apply_filters( 'cnb_plugin_title',  'Call Now Button');

if(isset($_GET['page']) && strpos($_GET['page'], 'call-now-button') !== false) {
	add_action( 'admin_enqueue_scripts', 'cnb_enqueue_color_picker' ); // add the color picker
}

function register_cnb_page() {
	global $plugin_title;
	$page = add_submenu_page('options-general.php', $plugin_title, $plugin_title, 'manage_options', 'call-now-button', 'call_now_settings_page');
	add_action( 'admin_print_styles-' . $page , 'cnb_admin_styling' );
}
function cnb_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'cnb-script-handle', plugins_url('call-now-button.js', __FILE__ ), array( 'wp-color-picker' ), CNB_VERSION, true );
}
function cnb_admin_styling() {
	wp_enqueue_style( 'cnb_styling' );
}

function cnb_plugin_meta($links, $file) {
	if ( $file == CNB_BASENAME ) {
		$cnb_new_links = array(
		sprintf( '<a href="options-general.php?page=%s">%s</a>', CNB_FILENAME, __('Settings')),
		'<a href="http://callnowbutton.com/support/">Support</a>');
		array_push(
			$links,
			$cnb_new_links[0],
			$cnb_new_links[1]
		);
	}	
	return $links;
}
add_filter( 'plugin_row_meta', 'cnb_plugin_meta', 10, 2 );

function cnb_plugin_add_settings_link( $links ) {
    array_unshift( $links, sprintf( '<a href="options-general.php?page=%s">%s</a>', CNB_FILENAME, __('Settings') ) );
  	return $links;
}
add_filter( 'plugin_action_links_'. CNB_BASENAME, 'cnb_plugin_add_settings_link' );

function cnb_options_init() {
	register_setting('cnb_options','cnb');
	wp_register_style( 'cnb_styling', plugins_url('call-now-button.css', __FILE__), false, CNB_VERSION, 'all' );
}
function call_now_settings_page() { 
	global $cnb_options;
	global $plugin_title;
	global $cnb_updated;
	global $cnb_changelog;
	?>
	
	<div class="wrap">	
		<h1>Call Now Button <span class="version">v<?php echo CNB_VERSION;?></span></h1>
		
	<!--## NOTIFICATION BARS ##  -->
		<?php 
		// Display notification that the button is active or inactive
		if(!$cnb_options['active']==1) {
			echo '<div class="notice-error notice"><p>The Call Now Button is currently <b>inactive</b>.</p></div>';
		}

		// Display notification that there's a caching plugin active
		if(isset($_GET['settings-updated'])) {
			$cnb_caching_check = cnb_check_for_caching();
			if($cnb_caching_check[0] == TRUE) {
				echo '<div class="notice-error notice"><p><span class="dashicons dashicons-warning"></span> Your website is using a <strong><i>Caching Plugin</i></strong> ('.$cnb_caching_check[1].'). If you\'re not seeing your button or your changes, make sure you empty your cache first.</p></div>';
			}
		} 

		// Display notification that the button is limited to a number of posts/pages
		if($cnb_options['active']==1 && $cnb_options['show'] != "") {
			echo '<div class="notice-error notice">'.
			'<p><span>Appearance of the Button is <b>limited</b><span class="hide-on-mobile"> to specific Posts or Pages</span>. <span class="check-settings">Review settings &raquo;</span></p></div>';
		}

		// inform exisiting users about update to the button design
		if($cnb_updated[0]) { ?>
		<div class="notice-warning notice is-dismissible">
			<?php
				$cnb_old_version = substr($cnb_updated[1],2);
				foreach ($cnb_changelog[0] as $key => $value) { // Only on first run after update show list of changes since last update
					if($key > $cnb_old_version) {
						echo '<p><span class="dashicons dashicons-yes"></span> ' . $value . '</p>';
					}
				}
			?>
		</div>
		<?php } ?>

<form method="post" action="options.php" class="cnb-container">
	<?php settings_fields('cnb_options'); ?>
	<table class="form-table">
    	<tr valign="top">
			<th scope="row">Button status:</th>
	    	<td class="activated">
	        	<input id="activated" name="cnb[active]" type="checkbox" value="1" <?php checked('1', $cnb_options['active']); ?> /> <label title="Enable" for="activated">Enabled</label> &nbsp; &nbsp; 
	        </td>
	    </tr>
		<tr valign="top">
			<th scope="row">Phone number:</th>
			<td><input type="text" name="cnb[number]" value="<?php echo $cnb_options['number']; ?>" /></td>
		</tr>
		<tr valign="top" class="button-text">
			<th scope="row">Button text:</th>
			<td>
				<input id="buttonTextField" type="text" name="cnb[text]" value="<?php echo $cnb_options['text']; ?>" maxlength="30" />
				<input id="hideIcon" name="cnb[hideIcon]" type="checkbox" value="1" <?php checked('1', $cnb_options['hideIcon']); ?> /> <label class="small-italic" title="hide" for="hideIcon">Hide icon</label>

				<p class="description">Make sure to check on your phone if the text fits your button! <span class="whatsThis">(<a href="http://callnowbutton.com/call-now-button-text-buttons/" target="_blank">Learn why...</a>)</span></p>
			</td>
		</tr>
	</table>
    <div id="settings">
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Button color:</th>
		    	<td><input name="cnb[color]" type="text" value="<?php echo $cnb_options['color']; ?>" class="cnb-color-field" data-default-color="#009900" /></td>
		    </tr>
			<tr valign="top"><th scope="row">Position</th>
		    	<td class="appearance">
		    		<div class="appearance-options">
			        	<div class="radio-item">
				            <input type="radio" id="appearance1" name="cnb[appearance]" value="right" <?php checked('right', $cnb_options['appearance']); ?>>
				            <label title="right" for="appearance1">Right corner</label>
			        	</div>
			        	<div class="radio-item">
				            <input type="radio" id="appearance2" name="cnb[appearance]" value="left" <?php checked('left', $cnb_options['appearance']); ?>>
				            <label title="left" for="appearance2">Left corner</label>
			        	</div>
			        	<div class="radio-item">
				            <input type="radio" id="appearance3" name="cnb[appearance]" value="middle" <?php checked('middle', $cnb_options['appearance']); ?>>
				            <label title="middle" for="appearance3">Center bottom</label>
			        	</div>
			        	<div class="radio-item">
				            <input type="radio" id="appearance4" name="cnb[appearance]" value="full" <?php checked('full', $cnb_options['appearance']); ?>>
				            <label title="full" for="appearance4">Full bottom</label>
			            </div>
		        	</div>
		            <p class="description appearanceDesc">This setting is ignored because you have text entered into the <b>Button text</b> field.</p>
		        </td>
		    </tr>
			<tr valign="top">
				<th scope="row">Click tracking:</th>
				<td> 
				    <div class="radio-item">
					    <input id="tracking3" type="radio" name="cnb[tracking]" value="0" <?php checked('0', $cnb_options['tracking']); ?> /> 
					    <label for="tracking3">Disabled</label>
					</div>
					<div class="radio-item">
						<input id="tracking1" type="radio" name="cnb[tracking]" value="2" <?php checked('2', $cnb_options['tracking']); ?> /> 
						<label for="tracking1">Google Universal Analytics (analytics.js)</label>
				    </div>
				    <div class="radio-item">
					    <input id="tracking4" type="radio" name="cnb[tracking]" value="3" <?php checked('3', $cnb_options['tracking']); ?> /> 
					    <label for="tracking4">Latest Google Analytics (gtag.js)</label>
				    </div>
				    <div class="radio-item">
					    <input id="tracking2" type="radio" name="cnb[tracking]" value="1" <?php checked('1', $cnb_options['tracking']); ?> /> 
					    <label for="tracking2">Classic Google Analytics (ga.js)</label>
				    </div>
					<p class="description">Click tracking turned on? Wait for about a day then log into your Google Analytics accunt and click in the <strong>Behavior</strong> section on <strong>Events</strong>. <span class="whatsThis">(<a href="https://support.google.com/analytics/answer/1033068#SeeAlerts" target="_blank">What's this?</a>)</span></p>
				</td>
			</tr>
			<tr valign="top" class="appearance">
				<th scope="row">Limit appearance:</th>
				<td>					 
					<input type="text" name="cnb[show]" value="<?php echo $cnb_options['show']; ?>" />
					<p class="description">Enter IDs of the posts &amp; pages, separated by commas (leave blank for all).</p>
					<div class="radio-item">
						<input id="limit1" type="radio" name="cnb[limit]" value="include" <?php checked('include', $cnb_options['limit']);?> />
						<label for="limit1">Limit to these posts and pages.</label>
					</div>
					<div class="radio-item">
						<input id="limit2" type="radio" name="cnb[limit]" value="exclude" <?php checked('exclude', $cnb_options['limit']);?> />
						<label for="limit2">Exclude these posts and pages.</label>
					</div>
					
				</td>
			</tr>
			<tr valign="top" class="zoom">
				<th scope="row">Button size (<span id="cnb_slider_value"></span>):</th>
				<td>
					<label class="cnb_slider_value">Smaller&nbsp;&laquo;&nbsp;</label><input type="range" min="0.7" max="1.3" name="cnb[zoom]" value="<?php echo $cnb_options['zoom']; ?>" class="slider" id="cnb_slider" step="0.1"><label class="cnb_slider_value">&nbsp;&raquo;&nbsp;Bigger</label>				
				</td>
			</tr>
			<tr valign="top" class="z-index">
				<th scope="row">Order:</th>
				<td>
					<label class="cnb_slider_value">Backwards&nbsp;&laquo;&nbsp;</label><input type="range" min="1" max="10" name="cnb[z-index]" value="<?php echo $cnb_options['z-index']; ?>" class="slider2" id="cnb_slider2" step="1"><label class="cnb_slider_value">&nbsp;&raquo;&nbsp;Front</label>
					<p class="description">The default (and recommended) value is all the way to the front so the button sits on top of everything else. In case you have a specific usecase where you want something else to sit in front of the Call Now Button (e.g. a chat window or a cookie notice) you can move this backwards one step at a time to adapt it to your situation. <span class="whatsThis">(<a href="http://callnowbutton.com/set-order/" target="_blank">Learn more...</a>)</span></p>
				</td>
			</tr>
			<tr valign="top" class="classic">
				<th scope="row">Back to old button design:</th>
		    	<td>
		        	<input id="classic" name="cnb[classic]" type="checkbox" value="1" <?php checked('1', $cnb_options['classic']); ?> /> <label title="Enable" for="classic">Old button <span class="inline-helper">- <a href="http://callnowbutton.com/new-button-design/" target="_blank" class="cnb-normal"><i>What's the difference?</i></a></span></label>
		        </td>
			</tr>
		</table>
	</div><!--#settings-->
	<input type="hidden" name="cnb[version]" value="<?php echo CNB_VERSION; ?>" />
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
	<div id="cnb_settings">+ Advanced settings</div>
</form>

		<div class="feedback-collection">
			<div class="cnb-clear"></div>
  			<p class="cnb-url cnb-center"><a href="http://callnowbutton.com" target="_blank">callnowbutton.com</a></p>

	        <hr>
	        
	  		<p class="cnb-center cnb-spacing">
	  			<a href="http://callnowbutton.com/support/" target="_blank" title="Support">Support</a> &middot;
	        	<a href="http://callnowbutton.com/feature-request/" target="_blank" title="Feature Requests">Suggestions</a> &middot; 
	        	<a href="#donate" id="paypalLink">Donate</a> &middot; 
	        	<a href="http://callnowbutton.com/praise/" target="_blank" title="Praise">Just say thanks :-)</a>
	        </p>
	        <!--// Display notification about the testing program -->
			<div class="postbox cnb-alert-box cnb-center">
				<p>The Call&nbsp;Now&nbsp;Button&nbsp;<b>Pro</b> is launching soon! 
					<a class="cnb-external" href="http://callnowbutton.com/be-notified-call-now-button-pro/" rel="help" target="_blank">Be notified when it does!</a>
				</p>
			</div>
			
	        <hr>
	        <div class="donate cnb-center">
	            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	                <input type="hidden" name="cmd" value="_s-xclick">
	                <input type="hidden" name="hosted_button_id" value="Q82GBVSERC9AW">
	                <input id="paypal" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	            </form>
	        </div><!--.donate-->
	    </div>
    </div>
<?php }
if(get_option('cnb') && !is_admin()) {
	
	$cnb_options = get_option('cnb');
	if(isset($cnb_options['active'])) $enabled = $cnb_options['active']; else $enabled = 0;
	if($enabled == '1') {
		// it's enabled so put footer stuff here
		function cnb_head() {
			$cnb_options = get_option('cnb');
			if(isset($cnb_options['classic'])) $classic = $cnb_options['classic']; else $classic = 0;
			$credits 	 = "\n<!-- Call Now Button ".CNB_VERSION." by Jerry Rietveld (callnowbutton.com) -->\n";
			$showTextButton = ($cnb_options['text'] == '') ? false : true;
			$ButtonExtra = "";
			if($classic == 1 && !$showTextButton) { 

			// OLD BUTTON DESIGN			
				if($cnb_options['appearance'] == 'full' || $cnb_options['appearance'] == 'middle' || $showTextButton) {
					$ButtonAppearance = "width:100%;left:0;";
					$ButtonExtra = "body {padding-bottom:60px;}";				
				} 
				elseif($cnb_options['appearance'] == 'left') { 
					$ButtonAppearance = "width:100px;left:0;border-bottom-right-radius:40px; border-top-right-radius:40px;";
				} else {
					$ButtonAppearance = "width:100px;right:0;border-bottom-left-radius:40px; border-top-left-radius:40px;";
				}
				
				$credits .= "<style>#callnowbutton {display:none;} @media screen and (max-width:650px){#callnowbutton .NoButtonText{display:none;}#callnowbutton {display:block; ".$ButtonAppearance." height:80px; position:fixed; bottom:-20px; border-top:2px solid ".changeColor($cnb_options['color'],'lighter')."; background:url(data:image/svg+xml;base64,".svg(changeColor($cnb_options['color'], 'darker') ).") center 2px no-repeat ".$cnb_options['color']."; text-decoration:none; box-shadow:0 0 5px #888; z-index:".zindex($cnb_options['z-index']).";background-size:58px 58px}".$ButtonExtra."}</style>\n";

			} else {
			// NEWEST BUTTON DESIGN
				$credits = "\n<!-- Call Now Button ".CNB_VERSION." by Jerry Rietveld (callnowbutton.com) -->\n";

				$ButtonShape = "width:65px; height:65px; border-radius:50%; border-top:1px solid ".changeColor($cnb_options['color'], 'lighter')."; bottom:15px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);transform: scale(" . $cnb_options['zoom'] . ");";

				if($cnb_options['appearance'] == 'full' || $showTextButton) {
					$ButtonAppearance = "width:100%;left:0;bottom:0;height:60px;border-top:1px solid ".changeColor($cnb_options['color'], 'lighter')."; border-bottom:1px solid ".changeColor($cnb_options['color'], 'darker').";";
					$ButtonExtra = "body {padding-bottom:60px;}#callnowbutton img {transform: scale(" . $cnb_options['zoom'] . ");}";
					if($showTextButton) {
						$ButtonAppearance .= "text-shadow: 0 1px ".changeColor($cnb_options['color'], 'darker')."; text-align:center;color:#fff; font-weight:600; font-size:120%;  overflow: hidden;";
						if(!isset($cnb_options['hideIcon'])) {
							$ButtonAppearance .= 'padding-right:20px;';
						}
					}
				}			
				elseif($cnb_options['appearance'] == 'left'  ) {
					$ButtonAppearance = $ButtonShape . "left:20px;"; 
				}
				elseif($cnb_options['appearance'] == 'middle') {
					$ButtonAppearance = $ButtonShape . "left:50%; margin-left:-33px;"; 
				}
				else {
					$ButtonAppearance = $ButtonShape . "right:20px;"; 
				}

				$credits = $credits ."<style>";
				$credits .= "#callnowbutton {display:none;} @media screen and (max-width:650px){#callnowbutton {display:block; position:fixed; text-decoration:none; z-index:".zindex($cnb_options['z-index']).";";
				$credits .= $ButtonAppearance;
				if(!$showTextButton) {
					$credits .= "background:url(data:image/svg+xml;base64,".svg(changeColor($cnb_options['color'], 'darker') ).") center/50px 50px no-repeat ".$cnb_options['color'].";";
				} else {
					$credits .= "background:".$cnb_options['color'].";display: flex; justify-content: center; align-items: center;";
				}
				$credits .= "}" . $ButtonExtra . "}#callnowbutton .NoButtonText{display:none;}";
				$credits .= "</style>\n";
			}
			echo $credits;
		}
		add_action('wp_head', 'cnb_head');
		
		function cnb_footer() {
			$cnb_options = get_option('cnb');
						
			if(isset($cnb_options['show']) && $cnb_options['show'] != "") {
				$show = explode(',', str_replace(' ', '' ,$cnb_options['show']));
				$limited = TRUE;
				$include = ($cnb_options['limit'] == 'include') ? TRUE : FALSE; // FALSE meanse IDs should be excluded
			} else {
				$limited = FALSE;
			}
			
			if($cnb_options['tracking'] == '1') { // for ga.js
				$tracking = "onclick=\"_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);\""; 
			} elseif($cnb_options['tracking'] == '2') { // for analytics.js
				$tracking = "onclick=\"ga('send', 'event', 'Contact', 'Call Now Button', 'Phone');\""; 
			} elseif($cnb_options['tracking'] == '3') { // for gtag.js
				$tracking = "onclick=\"gtag('event', 'Call Now Button', {event_category: 'contact', event_label: 'phone'});\"";
			} else {
				$tracking = "";
			}

			if($cnb_options['text'] == '') {
				$buttonText = '<span class="NoButtonText">Call Now Button</span>';
			} elseif(isset($cnb_options['hideIcon'])) {
				$buttonText = $cnb_options['text'];
			} else {
				$buttonText = '<img alt="Call Now Button" src="data:image/svg+xml;base64,'.svg(changeColor($cnb_options['color'], 'darker')).'" width="40">'. $cnb_options['text'];
			}

			$callLink = '<a href="tel:'.$cnb_options['number'].'" id="callnowbutton" '.$tracking.'>'.$buttonText.'</a>';
			
			if($limited) {
				if($include) {
					if(is_single($show) || is_page($show)) {
						echo $callLink;
					}
				} else {
					if(!is_single($show) && !is_page($show)) {
						echo $callLink;
					}					
				}
			} else {
				echo $callLink;
			}
		}
		add_action('wp_footer', 'cnb_footer');
	}
} 

function cnb_get_options() { // Grabbing existing settings and creating them if it's a first time installation
	if(!get_option('cnb')) { // Doesn't exist -> set defaults
		$default_options = array(
							  'active',
							  'number' => '',
							  'text' => '',
							  'hideIcon' => 0,
							  'color' => '#009900',
							  'appearance' => 'right',
							  'tracking' => 0,
							  'show' => '',
							  'limit' => 'include',
							  'zoom' => '1',
							  'z-index' => '10',
							  'version' => CNB_VERSION
							  );
		add_option('cnb',$default_options);
	} else { // Does exist -> see if update is needed
		$updated = cnb_update_options();
	}
	$cnb_options['options'] = get_option('cnb');
	$cnb_options['updated'] = isset($updated) ? $updated : array(false, substr(CNB_VERSION, 0, 3));
	return $cnb_options;
}
function cnb_update_needed() { //compares version numbers
	$cnb_options = get_option('cnb');
	$pluginVersion 	= CNB_VERSION;
	$setupVersion 	= array_key_exists('version', $cnb_options) ? $cnb_options['version'] : 0.1;
	if($pluginVersion == $setupVersion) {
		$output = false;
	} elseif(substr($pluginVersion,0,3) > substr($setupVersion,0,3)) {
		$output = true;
	} elseif(substr($pluginVersion,0,3) == substr($setupVersion,0,3)) {
		$output = (substr($pluginVersion,-1) > substr($setupVersion,-1)) ? true : false;
	} else {
		$output = false;
	}
	return $output;
}
function cnb_update_options() {
	$cnb_options = get_option('cnb');
	//$version = array_key_exists('version', $cnb_options) ? substr($cnb_options['version'], 0, 3) : 0.1;
	if(cnb_update_needed()) { // Check current version and if it needs an update
		$cnb_options['active'] = isset($cnb_options['active']) ? 1 : 0;
		$cnb_options['text'] = isset($cnb_options['text']) ? $cnb_options['text'] : "";
		$cnb_options['hideIcon'] = isset($cnb_options['hideIcon']) ? $cnb_options['hideIcon'] : 0;
		$cnb_options['limit'] = isset($cnb_options['limit']) ? $cnb_options['limit'] : 'include';
		$default_options = array(
							  'active' => $cnb_options['active'],
							  'number' => $cnb_options['number'],
							  'text' => $cnb_options['text'],
							  'hideIcon' => $cnb_options['hideIcon'],
							  'color' => $cnb_options['color'],
							  'appearance' => $cnb_options['appearance'],
							  'tracking' => $cnb_options['tracking'],
							  'show' => $cnb_options['show'],
							  'limit' => $cnb_options['limit'],
							  'zoom' => '1',
							  'z-index' => '10',
							  'version' => CNB_VERSION
							  );
		if(array_key_exists('classic', $cnb_options) && $cnb_options['classic'] == 1 ) {
			$default_options['classic'] = 1;
		}
		update_option('cnb',$default_options);
		$updated = array(true, $cnb_options['version']);  // Updated and previous version number
	} else {
		$updated = array(false, $cnb_options['version']); // Not updated and current version number
	}
	return $updated;
}
// Color functions to calculate borders
function changeColor($color, $direction) {
	if(!preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $color, $parts));
	if(!isset($direction) || $direction == "lighter") { $change = 45; } else { $change = -50; }
	for($i = 1; $i <= 3; $i++) {
	  $parts[$i] = hexdec($parts[$i]);
	  $parts[$i] = round($parts[$i] + $change);
	  if($parts[$i] > 255) { $parts[$i] = 255; } elseif($parts[$i] < 0) { $parts[$i] = 0; }
	  $parts[$i] = dechex($parts[$i]);
	} 
	$output = '#' . str_pad($parts[1],2,"0",STR_PAD_LEFT) . str_pad($parts[2],2,"0",STR_PAD_LEFT) . str_pad($parts[3],2,"0",STR_PAD_LEFT);
	return $output;
}

function svg($color) {
	$phone = '<path d="M7.104 14.032l15.586 1.984c0 0-0.019 0.5 0 0.953c0.029 0.756-0.26 1.534-0.809 2.1 l-4.74 4.742c2.361 3.3 16.5 17.4 19.8 19.8l16.813 1.141c0 0 0 0.4 0 1.1 c-0.002 0.479-0.176 0.953-0.549 1.327l-6.504 6.505c0 0-11.261 0.988-25.925-13.674C6.117 25.3 7.1 14 7.1 14" fill="'.$color.'"/><path d="M7.104 13.032l6.504-6.505c0.896-0.895 2.334-0.678 3.1 0.35l5.563 7.8 c0.738 1 0.5 2.531-0.36 3.426l-4.74 4.742c2.361 3.3 5.3 6.9 9.1 10.699c3.842 3.8 7.4 6.7 10.7 9.1 l4.74-4.742c0.897-0.895 2.471-1.026 3.498-0.289l7.646 5.455c1.025 0.7 1.3 2.2 0.4 3.105l-6.504 6.5 c0 0-11.262 0.988-25.925-13.674C6.117 24.3 7.1 13 7.1 13" fill="#fff"/>';
	$svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">' . $phone . '</svg>';
	return base64_encode($svg);
}
function buttonActive() {
	$cnb_options = get_option('cnb');
	if(isset($cnb_options['active'])) { $output = true; } else { $output = false; }
	return $output;
}

function zindex($value) {
	$zindex = array(
		10 => 2147483647,
		9 => 214748365,
		8 => 21474836,
		7 => 2147484,
		6 => 214748,
		5 => 21475,
		4 => 2147,
		3 => 215,
		2 => 21,
		1 => 2
	);
	return $zindex[$value];
}

function cnb_check_for_caching() {
	$caching_plugins = array(
		'autoptimize/autoptimize.php',
		'breeze/breeze.php',
		'cache-control/cache-control.php',
		'cache-enabler/cache-enabler.php',
		'comet-cache/comet-cache.php',
		'fast-velocity-minify/fvm.php',
		'hyper-cache/plugin.php',
		'litespeed-cache/litespeed-cache.php',
		'simple-cache/simple-cache.php',
		'w3-total-cache/w3-total-cache.php',
		'wp-fastest-cache/wpFastestCache.php',
		'wp-super-cache/wp-cache.php'
	);
	$active = FALSE; //Default is false
	$name = 'none'; // Default name is none
	foreach ($caching_plugins as $plugin) {
		if ( is_plugin_active( $plugin ) ) {
			$active = TRUE;
			$name = explode('/', $plugin);
			$name = $name[0];
			break;
		}
	}
	return array($active,$name);
}
?>
