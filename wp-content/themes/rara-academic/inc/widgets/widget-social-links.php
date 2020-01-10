<?php
/**
 * Widget Social Links
 *
 * @package Rara Academic
 */
 
function rara_academic_register_social_links_widget() {

    register_widget( 'rara_academic_Social_Links' );
}

add_action( 'widgets_init', 'rara_academic_register_social_links_widget' );
 
 /**
 * Adds rara_academic_Social_Links widget.
 */
class rara_academic_Social_Links extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rara_academic_social_links', // Base ID
			__( 'RARA: Social Links', 'rara-academic' ), // Name
			array( 'description' => __( 'A Social Links Widget', 'rara-academic' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
	   
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Social Media', 'rara-academic' );		
        
        echo $args['before_widget'];

        if( $title ) echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];
        
        rara_academic_get_social_links();

        echo $args['after_widget'];
        
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Social Media', 'rara-academic' );		
        
        ?>
		
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e( 'Title', 'rara-academic' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
        
        <p>
            <small><?php esc_html_e( 'You can change the social links from the customizer in Social Settings options.', 'rara-academic' ); ?></small>
        </p>
        
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
        $instance['title'] = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : __( 'Social Media', 'rara-academic' );
        
        return $instance;
	}

} // class rara_academic_Social_Links 