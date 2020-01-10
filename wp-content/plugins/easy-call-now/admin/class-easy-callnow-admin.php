<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       thikshare.com
 * @since      1.0.0
 *
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/admin
 * @author     Thik Share <dangngocbinh.dnb@gmail.com>
 */
class Easy_Callnow_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		new EasyCallNow_OptionPage();
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Callnow_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Callnow_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/easy-callnow-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_Callnow_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Callnow_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */		 

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/easy-callnow-admin.js', array( 'jquery','wp-color-picker' ), $this->version, false );

	}

}


class EasyCallNow_OptionPage {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	function admin_menu() {
		add_options_page(
			'Easy Call Now - Setup',
			'Easy Call Now',
			'manage_options',
			'easy-call-now',
			array(
				$this,
				'settings_page'
			)
		);
	}

	function get_settings(){
		$phone = get_option( 'easy_callnow_phone_number', false );
		$position = get_option( 'easy_callnow_call_position', false );
		$ring_color = get_option( 'easy_callnow_ring_color', false );
		$ring_hover_color = get_option( 'easy_callnow_ring_hover_color', false );
		$button_color = get_option( 'easy_callnow_button_color', false );
		$number_color = get_option( 'easy_callnow_number_color', false );
		$offset_top = get_option( 'easy_callnow_offset_top', false );
		$offset_bottom = get_option( 'easy_callnow_offset_bottom', false );
		$offset_left = get_option( 'easy_callnow_offset_left', false );
		$offset_right = get_option( 'easy_callnow_offset_right', false );
		return array(
			'phone' => $phone ? $phone : 'xxx.xxx.xxx',
			'position' => $position ? $position : 'p_bottom_right',
			'ring_color' => $ring_color ? $ring_color : '#f00',
			'ring_hover_color' => $ring_hover_color ? $ring_hover_color : '#baf5a7',
			'button_color' => $button_color ? $button_color : '#eee',
			'number_color' => $number_color ? $number_color : '#f00',
			'offset_top' => $offset_top ? $offset_top : '50',
			'offset_bottom' => $offset_bottom ? $offset_bottom : '15',
			'offset_left' => $offset_left ? $offset_left : '5',
			'offset_right' => $offset_right ? $offset_right : '5',
			);
	}


	function  settings_page() {
		if(isset($_POST['update'])){
			update_option( 'easy_callnow_phone_number', trim($_POST['phone']) );
			update_option( 'easy_callnow_call_position', trim($_POST['p_call_position']) );
			update_option( 'easy_callnow_ring_color', trim($_POST['ring_color']) );
			update_option( 'easy_callnow_ring_hover_color', trim($_POST['ring_hover_color']) );
			update_option( 'easy_callnow_button_color', trim($_POST['button_color']) );
			update_option( 'easy_callnow_number_color', trim($_POST['number_color']) );
			update_option( 'easy_callnow_offset_top', trim($_POST['offset_top']) );
			update_option( 'easy_callnow_offset_bottom', trim($_POST['offset_bottom']) );
			update_option( 'easy_callnow_offset_left', trim($_POST['offset_left']) );
			update_option( 'easy_callnow_offset_right', trim($_POST['offset_right']) );
		}
		

		$config = $this->get_settings();
		?>

		<h1 class="wp-heading-inline"><?php _e('Easy Call Now - Setup','easy-callnow') ?></h1>
		<p><?php __('Input phone number to show Call Now Button - Remove number to disable','easy-callnow') ?></p>
		<hr>
		<form action="" class="ts-frm" method="POST">
			<div class="form-group">
			  <label class="control-label" ><?php _e('Phone Number','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input type="text" name="phone" value="<?php echo $config['phone']; ?>">
			    </div>
			</div>

			

			<div class="form-group">
			  <label class="control-label" ><?php _e('Position','easy-callnow') ?></label> 			    
			    <div class="input-group position-choosen">			 	
			  		<input name="p_call_position" value="p_top_right" class="p_top_right"  type="radio" 
			  			<?php echo ($config['position'] == 'p_top_right')? 'checked' : ''; ?> >
			  		<input name="p_call_position" value="p_bottom_right" class="p_bottom_right"  type="radio" 
			  			<?php echo ($config['position'] == 'p_bottom_right')? 'checked' : ''; ?>>
			  		<input name="p_call_position" value="p_bottom_left" class="p_bottom_left"  type="radio" 
			  			<?php echo ($config['position'] == 'p_bottom_left')? 'checked' : ''; ?>>
			    </div>
			</div>
			<div class="form-group offset-control">
			  <label class="control-label" ><?php _e('Offset Top','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="offset_top" value="<?php echo $config['offset_top']; ?>" type="text">
			    </div>
			    <label class="control-label" ><?php _e('Offset Bottom','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="offset_bottom" value="<?php echo $config['offset_bottom']; ?>" type="text">
			    </div>
			    <div class="clear"></div>
			    <label class="control-label" ><?php _e('Offset Left','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="offset_left" value="<?php echo $config['offset_left']; ?>" type="text">
			    </div>
			    <label class="control-label" ><?php _e('Offset Right','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="offset_right" value="<?php echo $config['offset_right']; ?>" type="text">
			    </div>
			</div>

			<div class="form-group">
			  <label class="control-label" ><?php _e('Ring Color','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="ring_color" class="color-field" value="<?php echo $config['ring_color']; ?>" type="text">
			    </div>
			</div>

			<div class="form-group">
			  <label class="control-label" ><?php _e('Ring Hover Color','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="ring_hover_color" class="color-field" value="<?php echo $config['ring_hover_color']; ?>" type="text">
			    </div>
			</div>

			<div class="form-group">
			  <label class="control-label" ><?php _e('Button Color','easy-callnow') ?></label> 			    
			    <div class="input-group">			 	
			  		<input name="button_color" class="color-field" value="<?php echo $config['button_color']; ?>" type="text">
			    </div>
			</div>

			<div class="form-group">
		  <label class="control-label" ><?php _e('Number Color','easy-callnow') ?></label> 			    
		    <div class="input-group">			 	
		  		<input name="number_color"  class="color-field" value="<?php echo $config['number_color']; ?>" type="text">
		    </div>
		  </div>

		  <div class="form-group">
		  <input type="submit" name="update" value="<?php _e('Save Change','easy-callnow') ?>">
		  </div>
			
		</form>
		<div class="clear"></div>
		<hr>
		<p>Credit by: Đặng Ngọc Bình from <a href="http://thikshare.com">ThikShare.com</a></p>
		<?php
	}
}