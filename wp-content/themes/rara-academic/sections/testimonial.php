<?php
/**
 * Testimonial Section
 * 
 * @package Rara_Academic
*/ 

$section_title   = get_theme_mod( 'rara_academic_testimonial_section_title' );
$testimonial_cat = get_theme_mod( 'rara_academic_testimonial_category' );
    
if( $section_title || $testimonial_cat ){   
?>

<section class="students-section">
    <div class="testimonial">
        <div class="container">
		
		<?php 
			    
            if( $section_title ) echo '<h2 class="section-title">' . esc_html( $section_title ) . '</h2>';
				
			if( $testimonial_cat ){
                
                $qry = new WP_Query( array(
    				'posts_per_page'      => -1,
    				'post_type'           => 'post',
    				'ignore_sticky_posts' => true,
    				'cat'                 => $testimonial_cat
    			)); 
                
                if( $qry->have_posts() ){ ?>
			    
                    <div class="testimonial-holder">
    				    <ul id="lightSlider" class="owl-carousel">
                        
                            <?php
                        
                            while( $qry->have_posts() ){ 
                                $qry->the_post(); ?>
    
    							<li>
    								<?php if( has_post_thumbnail() ){ ?>
   								    	    <div class="img-holder"><?php the_post_thumbnail( 'rara-academic-testimonial' ); ?></div>
    								<?php } ?>
    
    								<div class="text-holder">
    									<?php the_content(); ?> 
    									<cite><?php echo esc_html__( '-', 'rara-academic' ); ?> 
    									    <strong><?php the_title(); ?></strong>
    									    <?php  
    									        if( has_excerpt() ){ 
    									            echo esc_html__( ',', 'rara-academic' );
    									            the_excerpt();
    									        }
    									    ?>
    									</cite>
    								</div>
    							</li>
    				            <?php 
                            } 
                            wp_reset_postdata();
                            ?>	
    				    </ul>
    				</div>
                    <?php 
                }
            } 
        ?>
        </div>	   
    </div>
</section>

<?php 
}