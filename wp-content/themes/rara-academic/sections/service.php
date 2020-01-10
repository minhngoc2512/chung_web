<?php  
/**
 * Service Section
 * 
 * @package Rara_Academic
*/     
     
$section_title  = get_theme_mod( 'rara_academic_services_section_title' );
$service_one    = get_theme_mod( 'rara_academic_service_post_one' );
$service_two    = get_theme_mod( 'rara_academic_service_post_two' );
$service_three  = get_theme_mod( 'rara_academic_service_post_three' );
$service_four   = get_theme_mod( 'rara_academic_service_post_four' );
$service_five   = get_theme_mod( 'rara_academic_service_post_five' );
$service_six    = get_theme_mod( 'rara_academic_service_post_six' );

$services_posts = array( $service_one, $service_two, $service_three, $service_four, $service_five, $service_six );
$services_posts = array_diff( array_unique( $services_posts ), array('') );  

if( $services_posts || $section_title ){
?>

<section class="services">
    <div class="container">
        <?php if( $section_title ){ ?>
			    <h2 class="section-title">
					<?php echo esc_html( $section_title ); ?>
				</h2>
		<?php  } 
            
            
			$service_qry = new WP_Query( array( 
                'post_type'           => 'post',
                'posts_per_page'      => -1,
                'post__in'            => $services_posts,
                'orderby'             => 'post__in',
                'ignore_sticky_posts' => true
            ) );

			if( $services_posts && $service_qry->have_posts() ){ ?>
				<div class="row">
					<?php while( $service_qry->have_posts() ){ $service_qry->the_post(); ?>
						
						<div class="col-3">
							<?php if( has_post_thumbnail() ){ ?>
								<span class="image">
								    <a href="<?php the_permalink(); ?>">
								       <?php the_post_thumbnail( 'rara-academic-services' ); ?>
								    </a>
								</span>
							<?php } ?>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<?php the_excerpt(); ?>
						</div>
					
					<?php }
                    wp_reset_postdata(); ?>
				</div>
		    <?php 
            } 
		?>
    </div>
</section>
    
 <?php
 }