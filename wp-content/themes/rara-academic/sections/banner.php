<?php  
/**
 * Banner Section
 * 
 *  @package Rara_Academic
*/

$banner_post = get_theme_mod( 'rara_academic_banner_post' );
$read_more   = get_theme_mod( 'rara_academic_banner_read_more', __( 'Learn More', 'rara-academic' ) );

$qry = new WP_Query( "p=$banner_post" );

if( $banner_post && $qry->have_posts() ){
    while( $qry->have_posts() ){
        $qry->the_post();
        if( has_post_thumbnail() ){ ?>
        
            <section class="banner-section">
    
                <?php the_post_thumbnail( 'rara-academic-banner' ); ?>

            	<div class="banner-text">
            		
            		<div class="container">
            			
            			<div class="text">
            				
            				<h2><?php the_title(); ?></h2>
            				    
                            <?php the_excerpt();
                            
                            if( $read_more ){ ?>
            				    <a href="<?php the_permalink(); ?>" class="learn-more"><?php echo esc_html( $read_more ); ?></a>
            			    <?php } ?>
            			
                        </div>
            		
            		</div>
            	
            	</div>
                
            </section>			
        <?php 
        }
    }
    wp_reset_postdata();
}