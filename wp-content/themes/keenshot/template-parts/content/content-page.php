<?php
/**
  *
  * Description: keenshot theme main content page
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package WordPress
  * @subpackage keenshot
  * @since 1.0.0
  */

the_post(); ?>   

<section class="page-banner" id="main">
    <div class="container">
        <div class="row">    
            <h1><?php echo esc_html(apply_filters( 'keenshot_page_title',$wp_query->post->post_title, 'keenshot'),'keenshot'); ?></h1>
        </div>
    </div>
</section><!--  /end of page-banner -->     

<section class="blog-list blog-single" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    <div class="container">
        <div class="row">
    <?php
     if(class_exists('WooCommerce')){
        if(is_cart() || is_checkout() || is_account_page()){
            echo '<div class="col-md-12 col-sm-12 col-xs-12">';
        }
    }
     else if(is_page_template( 'page-templates/full-width.php' )){ ?>
          <div class="col-md-12 col-sm-12 col-xs-12">
     <?php }else{
         echo "<div class='col-md-8 col-sm-8 col-xs-8'>";
     }
    ?>
   
        <div class="blog-content">
                    
        <?php the_post_thumbnail( 'large'); ?>
            
        </div> <!-- Blog content -->
        <div class="default-editor">
                <?php 
                    the_content(); 
                ?>
        </div>

        <div class="comments">
		<?php 
			if ( comments_open() ):
			comments_template();
			endif;
		?>
	  </div>
    </div>
    
    <?php 
        if(class_exists('WooCommerce')){
            if(is_cart() || is_checkout() || is_account_page()){
                echo '';
            }
        }
        else if(is_page_template( 'page-templates/full-width.php' )){
            echo '';
        }
        else{
            echo '<div class="sidebar"><div class="col-md-4 col-sm-12 col-xs-12">';
            if (is_active_sidebar( 'sidebar' ))
            dynamic_sidebar( 'sidebar' ); 
            echo '</div></div>';
        }
    ?>
 
        </div>
    </div>
</section><!--  /end of blog-list -->

