<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       thikshare.com
 * @since      1.0.0
 *
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Easy_Callnow
 * @subpackage Easy_Callnow/public
 * @author     Thik Share <dangngocbinh.dnb@gmail.com>
 */
class Easy_Callnow_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action( 'wp_head', array($this, 'show_call_now_button'), 10, 1 );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/easy-callnow-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/easy-callnow-public.js', array( 'jquery' ), $this->version, false );

	}

	public function show_call_now_button() {
		$config = new EasyCallNow_OptionPage();
		$data = $config->get_settings();

		$sdt_real = str_replace(' ', '', $data['phone']);
		$sdt_real = str_replace('-', '', $sdt_real);
		$sdt_real = str_replace('.', '', $sdt_real);
		?>
		<div class="fix_tel">
	      <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
	        <div class="ring-alo-ph-circle"></div>
	        <div class="ring-alo-ph-circle-fill"></div>
	        <div class="ring-alo-ph-img-circle">

	          <a href="tel:<?php echo $sdt_real; ?>">
	            <img class="lazy" 
	            	src="<?php echo plugin_dir_url(__FILE__ ) . 'images/phone-ring.png'; ?>" 
	            	alt="<php _e('Click to Call','call-now'); ?>">
	            <noscript>&amp;lt;img src="<?php echo plugins_url( 'images/phone-ring.png', __FILE__ ); ?>" alt=""&amp;gt;</noscript>
	            </a>
	        </div>
	      </div>
	      <div class="tel">
	          <p class="fone"><?php echo $data['phone']; ?></p>
	      </div>
	    </div>
	    <style type="text/css">
	    	.ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle {
			    background-color: <?php echo $data['ring_color']; ?>;
			}
			.ring-alo-phone.ring-alo-green .ring-alo-ph-circle{
				background-color: <?php echo $data['ring_color']; ?>;	
			}
			.ring-alo-phone.ring-alo-green .ring-alo-ph-circle {
			    border-color: <?php echo $data['ring_color']; ?>;
			}

			.ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-img-circle, .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-img-circle{
				background-color: <?php echo $data['ring_hover_color']; ?>;		
			}

			.fone {			 
			    color: <?php echo $data['number_color']; ?>;			    
			}

			.tel{
				background-color: <?php echo $data['button_color']; ?>;
			}
			.fix_tel{
				top: auto;
				bottom: auto;
				right: auto;
				left: auto;
				<?php echo (strpos($data['position'], 'top') !== false) ? ('top: ' . $data['offset_top'] .'px; '): ''; ?>
				<?php echo (strpos($data['position'], 'bottom') !== false) ? ('bottom: ' . $data['offset_bottom'] .'px; '): ''; ?>
				<?php echo (strpos($data['position'], 'left') !== false) ? ('left: ' . $data['offset_left'] .'px; '): ''; ?>
				<?php echo (strpos($data['position'], 'right') !== false) ? ('right: ' . $data['offset_right'] .'px; '): ''; ?>
			}
	    </style>
		<?php 
	}

}
