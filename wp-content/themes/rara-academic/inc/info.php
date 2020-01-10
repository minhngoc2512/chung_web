<?php
/**
 * Rara Academic Theme Info
 *
 * @package rara_academic
 */

function rara_academic_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'theme_info' , array(
		'title'       => __( 'Information Links' , 'rara-academic' ),
		'priority'    => 6,
		));
    
    $wp_customize->add_setting(
		'setup_instruction',
		array(
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new Rara_Academic_Theme_Info( 
			$wp_customize,
			'setup_instruction',
			array(
				'settings'		=> 'setup_instruction',
				'section'		=> 'theme_info',
				'description'	=> __( '<strong>Instruction for how to setup Home Page in Rara Academic Theme</strong><br/>1. Go to Pages and create a new page (Title can be anything. For example, Home )<br/>
2. In right column and under Page Attributes, choose "Home Page" template<br/>
3. Click on Publish<br/>
4. Go to Appearance-> Customize -> Default Settings -> Static Front Page<br/>
5. Select A static page<br/>
6. Under Front Page, select the page that you created in the step 1<br/>
7. Save changes', 'rara-academic'),
			)
		)
	);
    
	$wp_customize->add_setting('theme_info_theme',array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
		));
    
    $theme_info = '';
	$theme_info .= '<h3 class="sticky_title">' . __( 'Need help?', 'rara-academic' ) . '</h3>';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'View demo', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://demo.rarathemes.com/rara-academic/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';
	$theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'View documentation', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://docs.rarathemes.com/docs/rara-academic/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';
	$theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Theme info', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/wordpress-themes/rara-academic/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Support ticket', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/support-ticket/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';
	$theme_info .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Rate this theme', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://wordpress.org/support/theme/rara-academic/reviews/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';
	$theme_info .= '<span class="sticky_info_row"><label class="more-detail row-element">' . __( 'More WordPress Themes', 'rara-academic' ) . ': </label><a href="' . esc_url( 'https://rarathemes.com/wordpress-themes/' ) . '" target="_blank">' . __( 'here', 'rara-academic' ) . '</a></span><br />';


	$wp_customize->add_control( new Rara_Academic_Theme_Info( $wp_customize ,'theme_info_theme',array(
		'label' => __( 'About Rara Academic' , 'rara-academic' ),
		'section' => 'theme_info',
		'description' => $theme_info
		)));

	$wp_customize->add_setting('theme_info_more_theme',array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
		));

}
add_action( 'customize_register', 'rara_academic_customizer_theme_info' );


if( class_exists( 'WP_Customize_control' ) ){

	class Rara_Academic_Theme_Info extends WP_Customize_Control
	{
    	/**
       	* Render the content on the theme customizer page
       	*/
       	public function render_content()
       	{
       		?>
       		<label>
       			<strong class="customize-text_editor"><?php echo esc_html( $this->label ); ?></strong>
       			<br />
       			<span class="customize-text_editor_desc">
       				<?php echo wp_kses_post( $this->description ); ?>
       			</span>
       		</label>
       		<?php
       	}
    }//editor close
    
}//class close

if( class_exists( 'WP_Customize_Section' ) ) :
/**
 * Adding Go to Pro Section in Customizer
 * https://github.com/justintadlock/trt-customizer-pro
 */
class Rara_Academic_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'pro-section';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

			<h3 class="accordion-section-title">
				{{ data.title }}

				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}
endif;

add_action( 'customize_register', 'rara_academic_sections_pro' );
function rara_academic_sections_pro( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'Rara_Academic_Customize_Section_Pro' );

	// Register sections.
	$manager->add_section(
		new Rara_Academic_Customize_Section_Pro(
			$manager,
			'rara_academic_view_pro',
			array(
				'title'    => esc_html__( 'Pro Available', 'rara-academic' ),
                'priority' => 5, 
				'pro_text' => esc_html__( 'VIEW PRO THEME', 'rara-academic' ),
				'pro_url'  => 'https://rarathemes.com/wordpress-themes/rara-academic-pro/'
			)
		)
	);
}