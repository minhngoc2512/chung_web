<?php /**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rara_academic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rara-academic' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'rara-academic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'rara-academic' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'rara-academic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'rara-academic' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'rara-academic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'rara-academic' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'rara-academic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'rara-academic' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'rara-academic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rara_academic_widgets_init' );

/*
* Recent post widget
*/
require get_template_directory() . '/inc/widgets/widget-recent-post.php';

/*
* Popular post widget
*/
require get_template_directory() . '/inc/widgets/widget-popular-post.php';

/*
* Social Links post widget
*/
require get_template_directory() . '/inc/widgets/widget-social-links.php';

?>